<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Package;
use App\Models\Purchase;
use App\Models\User;
use App\Models\UserLedger;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminSalaryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_trigger_salary_distribution_and_users_receive_daily_income()
    {
        // Create an admin
        $admin = Admin::create([
            'name' => 'Test Admin',
            'email' => 'admin@example.test',
            'password' => bcrypt('password'),
            'type' => 'admin',
        ]);

    // Create a package (controller only checks existence) - provide required fields
    $package = new Package();
    $package->name = 'test-package';
    $package->title = 'Test Package Title';
    $package->photo = '/public/upload/package/test.jpg';
    $package->price = 100;
    $package->validity = '10';
    $package->commission_with_avg_amount = 1000;
    $package->save();

        // Create a user
        $user = User::create([
            'name' => 'User One',
            'email' => 'user1@example.test',
            'password' => bcrypt('secret'),
            'balance' => 0,
        ]);

        // Create a purchase for the user with an active status and a daily_income
        $purchase = new Purchase();
        $purchase->user_id = $user->id;
        $purchase->package_id = $package->id;
        $purchase->daily_income = 10; // amount to be distributed
        $purchase->validity = Carbon::now()->addDays(2)->toDateString();
        $purchase->status = 'active';
        $purchase->save();

        // Ensure no ledger exists yet
        $this->assertDatabaseMissing('user_ledgers', [
            'user_id' => $user->id,
            'reason' => 'daily_income',
            'amount' => 10,
        ]);

        // Act as admin using the admin guard and call the salary submit route
        $response = $this->actingAs($admin, 'admin')->get(route('admin.salary.submit'));

        // Expect redirect back with success in session
        $response->assertRedirect();

        // Refresh models
        $user->refresh();
        $admin->refresh();

        // User balance should be increased by daily_income
        $this->assertEquals(10, $user->balance);

        // A ledger row should have been created for the user
        $this->assertDatabaseHas('user_ledgers', [
            'user_id' => $user->id,
            'reason' => 'daily_income',
            'amount' => 10,
            'credit' => 10,
            'status' => 'approved',
        ]);

        // Admin salary_date should be updated to today
        $this->assertEquals(Carbon::now()->toDateString(), $admin->salary_date);
    }
}
