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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/791.be86190f.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        select#payment_method {
            width: 100%;
            padding: 15px 5px;
            border-radius: 10px;
            background: linear-gradient(270deg,#fec316,#f07128);
            color: #000;
            font-size: 16px;
        }
        .copy img {
            filter: invert(1);
        }
        .address {
            font-size: 15px;
            color: #fff;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    @include('loading')
    <form action="{{route('deposit.payment')}}" method="post">
        @csrf
        <div>
            <div class="rechargepage" data-v-7f67603e="">
                <div class="van-nav-bar van-hairline--bottom navboxi" data-v-7f67603e="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{url('home')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow">
                            </i></div>
                        <div class="van-nav-bar__title van-ellipsis">Deposit</div>
                        <div class="van-nav-bar__right van-haptics-feedback" onclick="window.location.href='{{route('deposit.history')}}'"><img class="imguis"
                                                                                                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAAXNSR0IArs4c6QAAA0ZJREFUWEftmU2IVlUYx3//sg+xFiEtxHI7rlokLnKR4CIaJCTFxECNiFzYBM6mGnVVmbNIYUbBhYSN6GAKBiWBixYuxkAsCKKZZU0DEX0sNLAk//GM577cGd4Z7j3vnWHA96zee+/z8Xv/97nnnPtcUXHYXgN8ATwFvCHpUkXXtma2XwZOAb8AL0n6uUo8VTEKG9tHgHeS/YSktVV929nZHgd60rVBSe9WiVcHeBh4KwWdkhRKZw/boezqFOC4pL4qwWYA247jDcBzwBNA+foLwLoU9CZwvEqCeWzizz+ert8ArpRsDfwFXAPGJMXx9GgB2V4PnASe7RCkaffvgL2SrreAbYd6nwPLm87WULzbwBZJV2T7SWAilUARP27B38DdUsJHgYfTcZy/1SHMY8ADKca/QEAVI86vmFWSUSI9AVx++sPhM6Bf0lQZyPaiPnS244H8GNhR4hgM4B+BYor6PmpY0n+z1bM9BBRP8qSkmJezh+2Yd59OAYYlvd0m54PAt8Az6dp4AP9TutUfSDrUjsL2VuBiuk1nJO3Opr03r48Au+InsG2uhcj2+8DBonQCuDVlAAOSPpoLxPbzaaW7IOlOh8APAdtjpZN0dZ6c7wGHi+u1gDsBzPW13QXOFa+SX1fhSjJ1YNRVuAPxKrneHwrbjjeD06WltJI6NYwmgdckxSZsxshS2HZsiGJVWsgRq+crTQEfBfYvJC1wTFJ/U8CxsY+dWrG7apo9SmJIUnlPPJ0jqySapqsTrwtcR60c2/tHYdvROFmVo1Ly+U3ST3X9sxS2HfPjWWBZ3YQl+3hPfFPSJ3Vi5AJ/CWyuk2gO26uSNtaJkwu8Bwhlij5CnZyFbbw79kk6Ucc5CzhN4LGf6KQB+KukH+rAdheOumrl2GeXRE6yJny6wE2oOF+MdgpH67RobB+Q1GoLLTRMlfi2B4APk62jVfU7sDKdGJEUc+6SGbY/BYrG4x8BXF7FopO5SdLYUiC2Hd9bvgYeSTyXA/hF4KsSYECfT135cmdzMf9DlGgsVNHMLmAjf+907do+B+xcTKKMXKOSXi2A4/tF7BWWKvQo8Hq8883+TtcL7JvjO12GKNkuUYp/At8AJyS1SvZ/hS3pC3ArWmkAAAAASUVORK5CYII="
                                                                                                                                                alt="" data-v-7f67603e=""></div>
                    </div>
                </div>
                <section class="section-box" data-v-7f67603e="">
                    <div class="balancei flex" data-v-7f67603e="">
                        <div class="lefti" data-v-7f67603e=""><img
                                src="data:image/png;base64,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"
                                alt="" data-v-7f67603e="">
                            <p data-v-7f67603e="">Account balance</p></div>
                        <span data-v-7f67603e="">{{price(auth()->user()->balance)}}</span></div>
                    <div class="payment" data-v-7f67603e="">
                        <div class="paytitle" data-v-7f67603e=""><img
                                src="data:image/png;base64,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"
                                alt="" data-v-7f67603e="">
                            <p data-v-7f67603e="">Payment method</p></div>
                        <p class="line" data-v-7f67603e=""></p>
                        <div class="methodlist" data-v-7f67603e="">
                            <select name="methods" id="payment_method" onchange="getAddress(this)">
                                           <option value="">Select Payment Channel</option>
                                @foreach(\App\Models\PaymentMethod::get() as $element)
                                    <option value="{{$element->name}}::{{$element->address}}">{{$element->name}}</option>
                                @endforeach
                            </select>

                            <div style="padding-top: 20px;width: 100%;display: none" class="channel_box">
                                <div class="address">Loading......</div>
                                <div class="copy"><img onclick="copyLink()" src="https://img.icons8.com/windows/32/copy.png" style="width: 25px;" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="method_">

                    <script>
                        function getAddress(_this){
                            var channel_box = document.querySelector('.channel_box');
                            var method_ = document.querySelector('input[name="method_"]');
                            var address = document.querySelector('.address');

                            if (_this.value != ''){
                                channel_box.style.display = 'block';
                                method_.value = _this.value.split("::")[0];
                                address.innerHTML = _this.value.split("::")[1];
                            }else {
                                channel_box.style.display = 'none';
                            }
                        }
                        function copyLink()
                        {
                            var text = document.querySelector('.address').innerHTML;
                            const body = document.body;
                            const input = document.createElement("input");
                            body.append(input);
                            input.style.opacity = 0;
                            input.value = text.replaceAll(' ', '');
                            input.select();
                            input.setSelectionRange(0, input.value.length);
                            document.execCommand("Copy");
                            input.blur();
                            input.remove();
                            message('Success');
                        }
                    </script>

                    <?php $minimumDeposit = setting('minimum_deposit'); ?>
                    <div class="selebox" data-v-7f67603e="">
                        <div class="topi flex" data-v-7f67603e="">
                            <div class="amounti" data-v-7f67603e=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-7f67603e="">
                                <p data-v-7f67603e="">Select amount</p></div>
                            <p class="minimumi" data-v-7f67603e="">Minimum deposit <span data-v-7f67603e="">{{price($minimumDeposit)}}</span></p>
                        </div>
                        <p class="line" data-v-7f67603e=""></p>
                        <div class="listamount" data-v-7f67603e="">
                            <div class="listi choamout" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, '{{$minimumDeposit}}')">{{$minimumDeposit}}</p>
                                <div class="checkIcon">
                                    <img src="{{asset('public/ss.png')}}" alt="" data-v-7f67603e="">
                                </div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 15.00)">15.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 20.00)">20.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 30.00)">30.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 40.00)">40.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 50.00)">50.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 100.00)">100.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 200.00)">200.00</p>
                                <div class="checkIcon"></div>
                            </div>
                            <div class="listi" data-v-7f67603e="">
                                <p data-v-7f67603e="" onclick="getAmount(this, 500.00)">500.00</p>
                                <div class="checkIcon"></div>
                            </div>
                        </div>
                        <div class="van-cell van-field input-box" data-v-7f67603e="">
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="tel" inputmode="numeric" id="van-field-1-input"
                                                                    class="van-field__control"
                                                                    name="selectedAmount"
                                                                    readonly
                                                                    value="{{$minimumDeposit}}"
                                                                    placeholder="Enter the deposit amount you need">
                                </div></div>
                        </div>

                        <div class="van-cell van-field input-box" data-v-7f67603e="">
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="text" id="van-field-1-input"
                                                                    class="van-field__control"
                                                                    name="address"
                                                                    placeholder="Enter payment address">
                                </div></div>
                        </div>

                        <div class="van-cell van-field input-box" data-v-7f67603e="">
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="text" id="van-field-1-input"
                                                                    class="van-field__control"
                                                                    name="trx"
                                                                    placeholder="Enter payment transaction ID">
                                </div></div>
                        </div>

                        <button type="button" class="btnrech" data-v-7f67603e="" onclick="onepayPayment()">Deposit</button>
                        <p class="platform" data-v-7f67603e="">
                        <p style="color:#fff;">
                            Tip: If the recharge fails, please change the recharge method and try again.</p>
                        <p style="color:#fff;"><br><br>
                            1. You can top-up your account with a minimum of ৳250 and our recharge services are accessible round the clock.

                            <br><br>
                            2. If your app account balance does not reflect the recharge within 30 minutes of successful transaction, contact our customer service team immediately.  Provide your account number and recharge confirmation for assistance.

                            <br><br>
                            3. We recommend refraining from storing recipient account details for future transfers.  It is essential to ensure that the recharge receipt matches the payment amount to prevent any payment discrepancies.</p>
                    </div>
                </section>
            </div>
        </div>
        <input type="hidden" name="amount">
    </form>
</div>
@include('alert-message')

<script>
    function getAmount(_this, amount){
        let parentElement = _this.closest('.listi');

        let elements = document.querySelectorAll('.listi');
        for (let i=0; i<elements.length;i++){
            if (elements[i].classList.contains('choamout')){
                elements[i].classList.remove('choamout');
            }
        }

        parentElement.classList.add('choamout');

        let findCheckIconElements = document.querySelectorAll('.checkIcon');
        for (let j=0; j<findCheckIconElements.length;j++){
            findCheckIconElements[j].innerHTML = ''
        }

        parentElement.querySelector('.checkIcon').innerHTML = `<img src="{{asset('public/ss.png')}}" alt="" data-v-7f67603e="">`;
        document.querySelector('input[name="selectedAmount"]').value = amount;
    }
    
    function onepayPayment(){
        var aa = document.querySelector('select[name="methods"]').value;
        var aamm = document.querySelector('input[name="selectedAmount"]').value;
                var address = document.querySelector('input[name="address"]').value;
                                var trx = document.querySelector('input[name="trx"]').value;
        if(aa == ''){
            message('Select a payment channel')
            return 0;
        }
        if(aamm == ''){
            message('Enter payment amount')
            return 0;
        }
        if(address == ''){
            message('Enter payment address')
            return 0;
        }
        if(trx == ''){
            message('Enter Transaction ID')
            return 0;
        }
        document.querySelector('form').submit();
    }

</script>
</body>
</html>
