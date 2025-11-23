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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/746.9e4e7656.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="">

<form action="{{url('register')}}" method="post" autocomplete="false">@csrf
    <div id="app" data-v-app="">
        <div>
            <div class="loginpage" data-v-ec0c3f42="">
                <div class="topimg" data-v-ec0c3f42="">
                    <img class="logoimg" src="{{asset('public')}}/CLREnergy/dist/img/logo.780718fc.png" alt=""
                         data-v-ec0c3f42="">
                    <p class="welcome" data-v-ec0c3f42="">Register!</p>
                    <p class="cashi" data-v-ec0c3f42="">Register to receive more cash rewards</p>
                    <img class="imgri" src="{{asset('public')}}/CLREnergy/dist/img/1.0e222c9f.png" alt=""
                         data-v-ec0c3f42="">
                </div>
                <p class="phonei" data-v-ec0c3f42="">Phone</p>
                <div class="van-cell van-field input-box" data-v-ec0c3f42="">
                    <div class="van-field__left-icon">
                        <p class="areacode" data-v-ec0c3f42="">+</p>
                    </div>
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="tel" inputmode="numeric" autocomplete="false" id="van-field-1-input" class="van-field__control"
                                   name="phone"
                                   required
                                   placeholder="Please enter phone number">
                        </div>
                    </div>
                </div>
                <p class="phonei" data-v-ec0c3f42="">Password</p>
                <div class="van-cell van-field input-box" data-v-ec0c3f42="">
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="password" id="van-field-2-input" class="van-field__control"
                                   name="password"
                                   autocomplete="false"
                                   required
                                   placeholder="Please enter password">
                            <div class="van-field__right-icon">
                                <img class="eyeimg imgfi" src="{{asset('public/pp.png')}}" alt="" data-v-ec0c3f42="">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="phonei" data-v-ec0c3f42="">Human Verification</p>
                <div class="van-cell van-field input-box btnbox" data-v-ec0c3f42="">
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="text" id="van-field-3-input" class="van-field__control"
                                   name="vcode"
                                   autocomplete="false"
                                   placeholder="Please enter the human code">
                            <div class="van-field__right-icon">
                                <button type="button" class="van-button van-button--default van-button--normal senduis"
                                        data-v-ec0c3f42="">
                                    <div class="van-button__content">
                                        <?php $code = rand(0000,9999) ?>
                                        <span class="van-button__text" style="filter: blur(1px);font-size: 5.466667vw;">{{$code}}</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="phonei" data-v-ec0c3f42="">Invitation code</p>
                <div class="van-cell van-field input-box" data-v-ec0c3f42="">
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="text" id="van-field-4-input" class="van-field__control"
                                   name="ref_by"
                                   autocomplete="false"
                                   value="{{isset($ref_by) && !empty($ref_by) && $ref_by != null ? $ref_by : rand(0,9999).rand(0,9901)}}"
                                   placeholder="Please enter the invitation code">
                        </div>
                    </div>
                </div>
                <div class="accepti" data-v-ec0c3f42="">
                    <i class="van-badge__wrapper van-icon van-icon-passed" data-v-ec0c3f42=""></i>
                    <p data-v-ec0c3f42="">I agree to the <span data-v-ec0c3f42="">User Registration Agreement</span></p>
                </div>
                <div data-v-ec0c3f42="" onclick="login()">
                    <view class="nut-animate" data-v-ec0c3f42="">
                        <view class="nut-animate__container nut-animate-twinkle loop">
                            <button class="btnin" type="button" data-v-ec0c3f42="">REGISTER</button>
                        </view>
                    </view>
                </div>
                <p class="havei" data-v-ec0c3f42="">Don't have an account? <span data-v-ec0c3f42="" onclick="window.location.href='{{route('login')}}'">To login</span></p>
                <p class="dynamic" data-v-ec0c3f42="">— Customer Reviews —</p>
            </div>
        </div>
    </div>
</form>
@include('alert-message')
@include('loading')
<script>
    let vcode = '{{$code}}';
    function login()
    {
        let code = document.querySelector('input[name="vcode"]');
        if (code.value == vcode){
            document.querySelector('.loading').style.display='block';
            document.querySelector('form').submit();
        }else {
            message('Invalid Code')
        }
    }
</script>
</body>
</html>
