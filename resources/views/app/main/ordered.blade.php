<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/CLREnergy/dist/favicon.ico">
    <title>{{env('APP_NAME')}}</title>
    <script defer="defer" src="/{{asset('public')}}/CLREnergy/dist/js/app.2caaccad.js"></script>
    <link href="{{asset('public')}}/CLREnergy/dist/css/chunk-vendors.a9285ddb.css" rel="stylesheet">
    <link href="{{asset('public')}}/CLREnergy/dist/css/app.865ef51f.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/839.507eb5dc.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        .commission_received {
            font-size: 16px;
            background: #f07128;
            padding: 7px 15px;
            padding-top: 9px;
            border-radius: 4px;
            color: #fff;
        }
        .productpage .activelist .product-list2 .list .topi .imgpro[data-v-0a1fc1e4] {
            height: 123px;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="orderpage" data-v-9d1d8c7a="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-9d1d8c7a="">
                <div class="van-nav-bar__content"><!---->
                    <div class="van-nav-bar__title van-ellipsis">My Investing</div>
                    <div class="van-nav-bar__right van-haptics-feedback" onclick="window.location.href='{{route('vip.commission')}}'"><img class="imguis"
                                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAAXNSR0IArs4c6QAAA0ZJREFUWEftmU2IVlUYx3//sg+xFiEtxHI7rlokLnKR4CIaJCTFxECNiFzYBM6mGnVVmbNIYUbBhYSN6GAKBiWBixYuxkAsCKKZZU0DEX0sNLAk//GM577cGd4Z7j3vnWHA96zee+/z8Xv/97nnnPtcUXHYXgN8ATwFvCHpUkXXtma2XwZOAb8AL0n6uUo8VTEKG9tHgHeS/YSktVV929nZHgd60rVBSe9WiVcHeBh4KwWdkhRKZw/boezqFOC4pL4qwWYA247jDcBzwBNA+foLwLoU9CZwvEqCeWzizz+ert8ArpRsDfwFXAPGJMXx9GgB2V4PnASe7RCkaffvgL2SrreAbYd6nwPLm87WULzbwBZJV2T7SWAilUARP27B38DdUsJHgYfTcZy/1SHMY8ADKca/QEAVI86vmFWSUSI9AVx++sPhM6Bf0lQZyPaiPnS244H8GNhR4hgM4B+BYor6PmpY0n+z1bM9BBRP8qSkmJezh+2Yd59OAYYlvd0m54PAt8Az6dp4AP9TutUfSDrUjsL2VuBiuk1nJO3Opr03r48Au+InsG2uhcj2+8DBonQCuDVlAAOSPpoLxPbzaaW7IOlOh8APAdtjpZN0dZ6c7wGHi+u1gDsBzPW13QXOFa+SX1fhSjJ1YNRVuAPxKrneHwrbjjeD06WltJI6NYwmgdckxSZsxshS2HZsiGJVWsgRq+crTQEfBfYvJC1wTFJ/U8CxsY+dWrG7apo9SmJIUnlPPJ0jqySapqsTrwtcR60c2/tHYdvROFmVo1Ly+U3ST3X9sxS2HfPjWWBZ3YQl+3hPfFPSJ3Vi5AJ/CWyuk2gO26uSNtaJkwu8Bwhlij5CnZyFbbw79kk6Ucc5CzhN4LGf6KQB+KukH+rAdheOumrl2GeXRE6yJny6wE2oOF+MdgpH67RobB+Q1GoLLTRMlfi2B4APk62jVfU7sDKdGJEUc+6SGbY/BYrG4x8BXF7FopO5SdLYUiC2Hd9bvgYeSTyXA/hF4KsSYECfT135cmdzMf9DlGgsVNHMLmAjf+907do+B+xcTKKMXKOSXi2A4/tF7BWWKvQo8Hq8883+TtcL7JvjO12GKNkuUYp/At8AJyS1SvZ/hS3pC3ArWmkAAAAASUVORK5CYII="
                                                                              alt="" data-v-9d1d8c7a=""></div>
                </div>
            </div>
            <section class="section-box" data-v-9d1d8c7a="">
                <div class="planbox flex" data-v-9d1d8c7a="">
                    <div class="lefti" data-v-9d1d8c7a="">
                        <div class="accounti" data-v-9d1d8c7a=""><p data-v-9d1d8c7a="">
                                {{price(\App\Models\Purchase::where('user_id', auth()->user()->id)->where('status', 'active')->sum('daily_income'))}}
                            </p><span
                                data-v-9d1d8c7a="">Daily income</span></div>
                    </div>
                    <div class="lefti" data-v-9d1d8c7a="">
                        <div class="accounti" data-v-9d1d8c7a=""><p data-v-9d1d8c7a="">
                                {{\App\Models\Purchase::where('user_id', auth()->user()->id)->where('status', 'active')->count()}}
                            </p><span data-v-9d1d8c7a="">Investment quantity</span>
                        </div>
                    </div>
                </div>
                @if(\App\Models\Package::whereIn('id', my_vips())->orderByDesc('id')->count() > 0)
                <div class="planbox flex" data-v-9d1d8c7a="">
                    <div class="lefti" data-v-9d1d8c7a="" style="width: 100%;margin-top: 5px;display: flex;justify-content: space-between;">
                        <div class="accounti" data-v-9d1d8c7a="">
                            <p data-v-9d1d8c7a="" id="my_commission">{{price(auth()->user()->receive_able_amount)}}</p>
                        </div>
                        <div class="accounti" data-v-9d1d8c7a="">
                            <a href="javascript:void(0)" onclick="received_vip_commssion()" class="commission_received">Receive</a>
                        </div>
                    </div>
                </div>
                @endif
                <p class="dynamic" data-v-9d1d8c7a="">— Product List —</p>
                <div class="product-list" data-v-9d1d8c7a="">
                    <?php use \Carbon\Carbon;?>
                    @if(\App\Models\Package::whereIn('id', my_vips())->count() > 0)
                    @foreach(\App\Models\Package::whereIn('id', my_vips())->orderByDesc('id')->get() as $element)
                    <div class="list" data-v-9d1d8c7a="">
                        <div class="topi" data-v-9d1d8c7a=""><img
                                src="{{asset($element->photo)}}"
                                alt="" data-v-9d1d8c7a=""></div>
                        <p class="name" data-v-9d1d8c7a="">{{$element->name}}</p>
                        <div class="leasebox" data-v-9d1d8c7a="">
                            <div class="pricei onei" data-v-9d1d8c7a="">
                                <p data-v-9d1d8c7a="">
                                    <?php
                                        $myVip = \App\Models\Purchase::where('user_id', auth()->user()->id)->where('package_id', $element->id)->where('status', 'active')->first();

                                        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $myVip->created_at);
                                        $from = \Carbon\Carbon::now();
                                        $diff_in_days = $to->diffInDays($from);
                                        ?>
                                        {{ now()->diffInDays($myVip->created_at) }}/<span data-v-9d1d8c7a="">{{$element->validity}}</span>
                                </p>
                                <span data-v-9d1d8c7a="">Cycle days</span>
                            </div>
                            <div class="pricei" data-v-9d1d8c7a=""><p class="hourly" data-v-9d1d8c7a="">
                                    {{price(($element->commission_with_avg_amount / $element->validity) / 24)}}
                                </p><span
                                    data-v-9d1d8c7a="">Hourly income</span></div>
                            <div class="pricei onei" data-v-9d1d8c7a=""><p class="hourly" data-v-9d1d8c7a="">
                                    {{price($element->commission_with_avg_amount / $element->validity)}}
                                </p>
                                <span data-v-9d1d8c7a="">Daily income</span></div>
                            <div class="pricei" data-v-9d1d8c7a=""><p data-v-9d1d8c7a="">
                                    {{price($element->commission_with_avg_amount)}}
                                </p><span
                                    data-v-9d1d8c7a="">Total income</span></div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="empty-wrap" data-v-062f15fe="" data-v-9d1d8c7a="" style="margin-top: 50px;"><img
                            class="empty" src="{{asset('public')}}/CLREnergy/dist/img/empty.c564e83c.png" alt=""
                            data-v-062f15fe="">
                        <p class="text" data-v-062f15fe="">No product data!</p>
                    </div>
                    <button class="makemoey" data-v-9d1d8c7a="" onclick="window.location.href='{{route('user.deposit')}}'">To make money &gt;&gt;</button>
                    @endif
                </div>
            </section>
            @include('app.layout.manu')
        </div>
    </div><!---->
</div>
@include('alert-message')
@include('loading')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function received_vip_commssion(){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
        $.ajax({
            url:'{{route('user.received.amount')}}',
            type: 'GET',
            success: function( data ){
                document.querySelector('.commission_received').innerHTML = 'Receiving...';
                document.querySelector('.loading').style.display='block';
                setTimeout(function (){
                    document.querySelector('.loading').style.display='none';
                    document.querySelector('.commission_received').innerHTML = 'Receive';
                }, 800);
                if (data.status == true){
                    document.querySelector('#my_commission').innerHTML = data.received_balance;
                }
                message(data.message);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });
    }
</script>
</body>
</html>
