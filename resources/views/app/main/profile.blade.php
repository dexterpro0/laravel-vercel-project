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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/345.18397afb.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        .productpage[data-v-24240da6]:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 95.733333vw;
            background: url({{asset('public')}}/CLREnergy/dist/img/ic_bg.f75bd924.jpg) no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="productpage" data-v-24240da6="">
            <div class="boxquit" data-v-24240da6="" onclick="window.location.href='{{route('logout')}}'"><img
                    src="{{asset('public/cr.png')}}"
                    alt="" data-v-24240da6="">
                <p data-v-24240da6="">Logout</p></div>
            <div class="content" data-v-24240da6="">
                <div class="topi flex" data-v-24240da6="">
                    <div class="logoimg" data-v-24240da6="">
                        <div class="imglogo" data-v-24240da6=""><img
                                src="{{asset('public')}}/CLREnergy/dist/img/logo.4108f2e0.png" alt=""
                                data-v-24240da6="">
                            <div class="van-uploader uploader-boxs" data-v-24240da6="">
                                <div class="van-uploader__wrapper">
                                    <div class="van-uploader__upload"><i
                                            class="van-badge__wrapper van-icon van-icon-photograph van-uploader__upload-icon">
                                        </i>
                                        <input type="file" class="van-uploader__input"
                                               accept="image/*" multiple="" name="photo" onchange="updateProfile(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="revisei" data-v-24240da6=""><p data-v-24240da6="">Edit</p></div>
                        </div>
                        <img class="imgpar"
                             src="{{asset('public/bz.png')}}"
                             alt="" data-v-24240da6=""></div>
                    <div class="righti" data-v-24240da6="" onclick="window.location.href='{{url('vip/commission')}}'"><img
                            src="{{asset('public/li.png')}}"
                            alt="" data-v-24240da6="">
                        <p data-v-24240da6="">My Bills</p></div>
                </div>
                <p class="numberi" data-v-24240da6="">{{auth()->user()->phone}}</p>
                <p class="iduis" data-v-24240da6="">ID:{{auth()->user()->ref_id}}</p>
                <div class="assetsi" data-v-24240da6="">
                    <div class="listtal" data-v-24240da6=""><p data-v-24240da6="">{{price(auth()->user()->balance)}}</p><span data-v-24240da6="">Total assets</span>
                    </div>
                    <div class="listtal" data-v-24240da6=""><p data-v-24240da6="">
                            {{price(\App\Models\Deposit::where('status', 'approved')->where('user_id', auth()->id())->sum('amount'))}}
                        </p><span data-v-24240da6="">Total Deposit</span>
                    </div>
                    <div class="listtal" data-v-24240da6=""><p data-v-24240da6="">
                            {{price(\App\Models\Withdrawal::where('status', 'approved')->where('user_id', auth()->id())->sum('amount'))}}
                        </p><span data-v-24240da6="">Total Withdraw</span>
                    </div>
                </div>
                <div class="item-list" data-v-24240da6="">
                    <div class="itemi" data-v-24240da6="" onclick="window.location.href='{{route('user.deposit')}}'"><img
                            src="{{asset('public/mo.png')}}"
                            alt="" data-v-24240da6="">
                        <p data-v-24240da6="">Deposit</p></div>
                    <div class="itemi" data-v-24240da6="" onclick="window.location.href='{{route('user.withdraw')}}'"><img
                            src="{{asset('public/de.png')}}"
                            alt="" data-v-24240da6="">
                        <p data-v-24240da6="">Withdraw</p></div>
                    <div class="itemi" data-v-24240da6="" onclick="window.location.href='{{route('user.change.password')}}'"><img
                            src="{{asset('public/pa.png')}}"
                            alt="" data-v-24240da6="">
                        <p data-v-24240da6="">Password</p></div>
                    <div class="itemi" data-v-24240da6="" onclick="window.location.href='{{url('add-bank')}}'"><img
                            src="{{asset('public/hand.png')}}"
                            alt="" data-v-24240da6="">
                        <p data-v-24240da6="">Account</p></div>
                </div>
                <img onclick="showPopUpGift()" class="imgi" src="{{asset('public')}}/CLREnergy/dist/img/5.47502287.png"
                     alt="" data-v-24240da6="">
                <div class="commont" data-v-24240da6=""><img
                        src="{{asset('public/pl.png')}}"
                        alt="" data-v-24240da6="">
                    <p data-v-24240da6="">Common tool</p></div>
                <div class="accouti" data-v-24240da6="">
                    <div class="list flex" data-v-24240da6="">
                        <div class="lefti" data-v-24240da6=""
                             onclick="document.querySelector('.van-overlay').style.zIndex = '2009';document.querySelector('.redenvelope').style.display='block'">
                            <img src="{{asset('public')}}/CLREnergy/dist/img/9.20ba07eb.png" alt=""
                                 data-v-24240da6="">
                            <p data-v-24240da6="">Envelope</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="" onclick="window.location.href='{{route('user.bank')}}'">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/ok.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">Account</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="" onclick="window.location.href='{{route('history.all')}}'">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/lii.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">History</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="" onclick="window.location.href='{{url('/rule')}}'">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/pli.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">Guide</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="" onclick="window.location.href='{{route('about')}}'">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/que.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">About us</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="" onclick="window.location.href='{{route('appreview')}}'">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/enfv.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">App Reviews</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                    <div class="list flex" data-v-24240da6="">
                        <div class="lefti" data-v-24240da6=""><img
                                src="{{asset('public/dow.png')}}"
                                alt="" data-v-24240da6="">
                            <p data-v-24240da6="">Download App</p></div>
                        <i class="van-badge__wrapper van-icon van-icon-arrow incoi" data-v-24240da6="">
                        </i></div>
                </div>
            </div>


            <style>
                [data-v-24240da6] .redenvelope {
                    width: 86.266667vw;
                    height: 112.266667vw;
                    background: url({{asset('public')}}/CLREnergy/dist/img/ic_bg2.351657fa.png) no-repeat;
                    background-size: cover;
                    padding: 53.333333vw 13.333333vw 2.666667vw 9.333333vw;
                    overflow-y: visible;
                }
            </style>
            <!--Remap Code-->
            <div class="van-overlay" role="button" tabindex="0" style="z-index: 2009;display: none;"></div>
            <div role="dialog" tabindex="0" class="van-popup van-popup--center redenvelope"
                 style="z-index: 2009;display: none;"><p
                    class="redemption" data-v-24240da6="">Reward redemption</p>
                <div class="van-cell van-field input-box" data-v-24240da6="">
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body"><input type="text" id="van-field-2-input"
                                                            class="van-field__control"
                                                            name="code"
                                                            placeholder="Enter redemption code">
                        </div>
                    </div>
                </div>
                <div class="redeem" data-v-24240da6="" onclick="getGiftCode()">Click to redeem</div>
                <img class="closei"
                     onclick="closeRed()"
                     src="{{asset('public/cls.png')}}"
                     alt="" data-v-24240da6=""></div>

            @include('app.layout.manu')
        </div>
    </div>
</div>
@include('alert-message')
@include('loading')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function showPopUpGift() {
        document.querySelector('.van-overlay').style.display = 'block';
        document.querySelector('.redenvelope').style.display = 'block';
    }

    function closeRed(){
        document.querySelector('.van-overlay').style.zIndex = '-1';
        document.querySelector('.redenvelope').style.display='none';
    }

    function getGiftCode(){
        let code = document.querySelector('input[name="code"]').value;

        $.ajax({
            url: '{{url('submit-bonus-amount')}}'+"/"+code,
            dataType: 'json',
            type: 'GET',
            error: function(error) {
                console.log(error)
            },
            success: function(data) {
                message(data.message);
                closeRed()
                document.querySelector('input[name="code"]').value = ''
                document.querySelector('.loading').style.display='block';
                setTimeout(function (){
                    document.querySelector('.loading').style.display='none';
                }, 1000);
            },
        });
    }

    function updateProfile(){
        event.preventDefault()
    }
</script>
</body>
</html>
