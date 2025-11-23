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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/736.e2ded920.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
@include('loading')
<form action="{{url('login')}}" method="POST" autocomplete="false">
    @csrf
    <div id="app" data-v-app="">
        <div>
            <div class="loginpage" data-v-3214cf8f="">
                <img class="logoimg" src="{{asset('public')}}/CLREnergy/dist/img/logo.780718fc.png" alt="" data-v-3214cf8f="">
                <p class="welcome" data-v-3214cf8f="">Welcome!</p>
                <p class="phonei" data-v-3214cf8f="">Phone Number</p>
                <div class="van-cell van-field input-box" data-v-3214cf8f="">
                    <div class="van-field__left-icon">
                        <p class="areacode" data-v-3214cf8f="">+</p>
                    </div>
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="tel" name="phone" autocomplete="false" inputmode="numeric" id="van-field-1-input" class="van-field__control" placeholder="Please enter phone number">
                        </div>
                    </div>
                </div>
                <p class="phonei" data-v-3214cf8f="">Password</p>
                <div class="van-cell van-field input-box" data-v-3214cf8f="">
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body">
                            <input type="password" id="van-field-2-input" name="password" autocomplete="false" class="van-field__control" placeholder="Please enter password">
                            <div class="van-field__right-icon" onclick="showHidePassword()">
                                <img class="eyeimg" src="{{asset('public/pp.png')}}" alt="" data-v-3214cf8f="">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="forgot" data-v-3214cf8f="">Forgot password?</p>
                <div data-v-3214cf8f="">
                    <view class="nut-animate" data-v-3214cf8f="">
                        <view class="" id="animClassAdd">
                            <button class="btnin" data-v-3214cf8f="" onclick="auth()" type="button">LOGIN</button>
                        </view>
                    </view>
                </div>
                <p class="havei" data-v-3214cf8f="">Don't have an account? <span data-v-3214cf8f="" onclick="window.location.href='{{route('register')}}'">To register</span></p>
            </div>
        </div>
    </div>
</form>

<script>
    function showHidePassword(){
        let password = document.querySelector('input[name="password"]');
        if (password.type == 'password'){
            password.type = 'text';
        }else {
            password.type = 'password'
        }
    }

    function auth(){
        let classes = 'nut-animate__container nut-animate-twinkle loop';
        document.getElementById('animClassAdd').setAttribute('class', classes)

        document.querySelector('form').submit();
    }

</script>
</body>
</html>
