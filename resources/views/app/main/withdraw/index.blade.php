<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/CLREnergy/dist/favicon.ico">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/CLREnergy/dist/css/chunk-vendors.a9285ddb.css" rel="stylesheet">
    <link href="{{asset('public')}}/CLREnergy/dist/css/app.865ef51f.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/335.0a1ca413.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="">
@include('alert-message')
@include('loading')
<form action="{{route('user.withdraw.request')}}" method="post">
    @csrf
    <div id="app" data-v-app="">
        <div>
            <div class="withdrawpage" data-v-0bd190a6="">
                <div class="van-nav-bar van-hairline--bottom navboxi" data-v-0bd190a6="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{url('home')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                        </div>
                        <div class="van-nav-bar__title van-ellipsis">Withdraw</div>
                        <div class="van-nav-bar__right van-haptics-feedback" onclick="window.location.href='{{route('withdraw.history')}}'"><img class="imguis"
                                                                                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAAXNSR0IArs4c6QAAA0ZJREFUWEftmU2IVlUYx3//sg+xFiEtxHI7rlokLnKR4CIaJCTFxECNiFzYBM6mGnVVmbNIYUbBhYSN6GAKBiWBixYuxkAsCKKZZU0DEX0sNLAk//GM577cGd4Z7j3vnWHA96zee+/z8Xv/97nnnPtcUXHYXgN8ATwFvCHpUkXXtma2XwZOAb8AL0n6uUo8VTEKG9tHgHeS/YSktVV929nZHgd60rVBSe9WiVcHeBh4KwWdkhRKZw/boezqFOC4pL4qwWYA247jDcBzwBNA+foLwLoU9CZwvEqCeWzizz+ert8ArpRsDfwFXAPGJMXx9GgB2V4PnASe7RCkaffvgL2SrreAbYd6nwPLm87WULzbwBZJV2T7SWAilUARP27B38DdUsJHgYfTcZy/1SHMY8ADKca/QEAVI86vmFWSUSI9AVx++sPhM6Bf0lQZyPaiPnS244H8GNhR4hgM4B+BYor6PmpY0n+z1bM9BBRP8qSkmJezh+2Yd59OAYYlvd0m54PAt8Az6dp4AP9TutUfSDrUjsL2VuBiuk1nJO3Opr03r48Au+InsG2uhcj2+8DBonQCuDVlAAOSPpoLxPbzaaW7IOlOh8APAdtjpZN0dZ6c7wGHi+u1gDsBzPW13QXOFa+SX1fhSjJ1YNRVuAPxKrneHwrbjjeD06WltJI6NYwmgdckxSZsxshS2HZsiGJVWsgRq+crTQEfBfYvJC1wTFJ/U8CxsY+dWrG7apo9SmJIUnlPPJ0jqySapqsTrwtcR60c2/tHYdvROFmVo1Ly+U3ST3X9sxS2HfPjWWBZ3YQl+3hPfFPSJ3Vi5AJ/CWyuk2gO26uSNtaJkwu8Bwhlij5CnZyFbbw79kk6Ucc5CzhN4LGf6KQB+KukH+rAdheOumrl2GeXRE6yJny6wE2oOF+MdgpH67RobB+Q1GoLLTRMlfi2B4APk62jVfU7sDKdGJEUc+6SGbY/BYrG4x8BXF7FopO5SdLYUiC2Hd9bvgYeSTyXA/hF4KsSYECfT135cmdzMf9DlGgsVNHMLmAjf+907do+B+xcTKKMXKOSXi2A4/tF7BWWKvQo8Hq8883+TtcL7JvjO12GKNkuUYp/At8AJyS1SvZ/hS3pC3ArWmkAAAAASUVORK5CYII="
                                                                                  alt="" data-v-0bd190a6=""></div>
                    </div>
                </div>
                <section class="section-box" data-v-0bd190a6="">
                    <div class="balancei flex" data-v-0bd190a6="">
                        <div class="lefti" data-v-0bd190a6=""><img
                                src="data:image/png;base64,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"
                                alt="" data-v-0bd190a6="">
                            <p data-v-0bd190a6="">Account balance</p></div>
                        <span data-v-0bd190a6="">{{price(auth()->user()->balance)}}</span></div>
                    <div class="selebox" data-v-0bd190a6="">
                        <div class="topi flex" data-v-0bd190a6="">
                            <div class="amounti" data-v-0bd190a6=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-0bd190a6="">
                                <p data-v-0bd190a6="">Withdraw amount</p></div>
                            <p class="minimumi" data-v-0bd190a6="">Minimum withdraw <span data-v-0bd190a6="">{{price(setting('minimum_withdraw'))}}</span></p>
                        </div>
                        <p class="line" data-v-0bd190a6=""></p>
                        <div class="van-cell van-field input-box" data-v-0bd190a6="">
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="tel" inputmode="numeric" id="van-field-1-input"
                                                                    class="van-field__control"
                                                                    name="amount"
                                                                    oninput="getActualAmount(this)"
                                                                    placeholder="Enter the withdraw amount you need">
                                </div></div></div>
                        <p class="actual" data-v-0bd190a6="">Actual amount received</p>
                        <p class="amounta" data-v-0bd190a6="">{{price(0)}}</p>
                        <button class="btnrech" data-v-0bd190a6="" onclick="withdraw()">Withdraw</button>
                        <div class="screenshot flex" data-v-0bd190a6="">
                            <div class="uploadi" data-v-0bd190a6=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-0bd190a6="">
                                <p data-v-0bd190a6="">Withdraw rules</p></div>
                        </div>
                       
                        <p class="platform" data-v-0bd190a6="">1. The minimum amount you can withdraw is {{price(setting('minimum_withdraw'))}}. <br><br>2.
                            After initiating a withdrawal, your funds will be deposited into your account as soon as
                            possible. However, in exceptional circumstances, the process may take up to 24 hours. <br><br>
                            3. You can only perform one withdrawal per day. <br><br> 4. A {{setting('withdraw_charge')}}% withdrawal service fee will be
                            charged, deducting the maintenance fee for our platform.<br><br> 5. It is vital that the
                            withdrawal account details are accurate when entering them. Providing incorrect information may
                            cause the withdrawal to fail, but you may reapply later.<br><br> 6. To activate the withdrawal
                            function, you need to recharge and purchase a non-free device to unlock the withdrawal function.
                            (Minimum purchase of equipment is 450Rs) Withdrawal processing time is from 9:00 to 17:00.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</form>


<script>
    let chargeWithdraw = '{{setting('withdraw_charge')}}';
    function getActualAmount(_this){
        let amount = _this.value;
        document.querySelector('.amounta').innerHTML = '{{currency()}}'+(amount - (amount * chargeWithdraw / 100)).toFixed(2);
    }

    function withdraw(){
        document.querySelector('.loading').style.display='block';
        document.querySelector('form').submit();
    }
</script>
</body>
</html>
