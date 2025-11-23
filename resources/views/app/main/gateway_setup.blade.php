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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/278.5b9352be.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/345.18397afb.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/335.0a1ca413.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/447.133dce8a.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        input#van-field-5-input {
            border: none;
            outline: none;
            height: 30px;
        }

        input#van-field-5-input:focus {
            border: none;
            outline: none;
        }

        input#van-field-4-input {
            border: none;
            outline: none;
            height: 30px;
        }

        input#van-field-4-input:focus {
            border: none;
            outline: none;
        }

        input#van-field-6-input {
            border: none;
            outline: none;
            height: 30px;
        }

        input#van-field-6-input:focus {
            border: none;
            outline: none;
        }

        input#van-field-5-input::placeholder {
            text-align: left;
        }

        input#van-field-4-input::placeholder {
            text-align: left;
        }

        input#van-field-6-input::placeholder {
            text-align: left;
        }

        [data-v-4958b936] .input-box .van-cell__value .van-field__body input {
            text-align: left;
        }

        .bankpage .section-box .topi[data-v-4958b936] {
            height: 57.8vw;
            background: #272727;
            border-radius: 2.666667vw;
            padding: 4.666667vw 5.333333vw;
        }
    </style>
</head>
<body class="">
@include('loading')
<div id="app" data-v-app="">
    <div>
        <div class="bankpage" data-v-4958b936="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-4958b936="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback"
                         onclick="window.location.href='{{route('dashboard')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow">
                        </i></div>
                    <div class="van-nav-bar__title van-ellipsis">Account</div>
                </div>
            </div>
            <section class="section-box" data-v-4958b936="">
                <div class="topi" data-v-4958b936="">
                    <div class="bankunt" data-v-4958b936=""><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAArRJREFUWEftWM1rE0EUfx+7seJHgoilWtCDtQr9E4qQejTiUf8HL4mC9E9QhOrFixcvCnoU6tEI0qNHT+nVSlWIjVoxHztPZmZ3s9tsCs2G7gq7kMzs8Oa9375585vdH0LOL8w5PggB/rl/cd5jWlUINSQ5BygOMAASAJAAkO7bdu/9OJuR8X38IcsACLaQZJ148ACr7c86eQbgr3sLVz3CN8hQAQzAAACPAguC2taCHQuQdYRJ/MkOgdzEa98/4G79/FyfZz4ByalYIB/c3szFgUWCJ2Q5lT+WNpFawk7j8pqQNGwm5BuR3MEjgw3pOh6ciFfocX1r/qLXb3szMu7bJI0njR312OvBMjI9BYQzpowQHmuALSFZ0AMuSe3Yw823WW4caZ6+roTXNR5i2cTO3cWuIJT0QLnTKuEz6GcK8CO4qjPbMyvK0MOdxqIExV551MoF7XjvZiVkigLgBPUyNoPE0ARUeu0tQ+o2kagBiJW1iRG4T+KakM18a0OhP5+WNIX5c4GUiWPsdSwW3V9JXOJUvDVtHgz8RWswDjDpSBsedfHTI/k4nIq/KEBguM16OfTFnl1i0/d/ukka10sD1n44P5jn2Y4/z7gM/fkxIv795X5V7OIJNm84peDBNNkz1VycJClTWGQwZQKLGkybwCKD/18G5fmFmW6pt8yuOAa9/tcvCIIDp/xlA6vwN/pUh04zvZfzTSGp2pffuEKBLO/d2vZK1gA7QnByVDIR/Qb9061tlzMF2H1x9hYw1YGUO1QmdCZVH0meODe+vs4U4EF3TawGc//hnmfpA7X08aNxaQ0J8yse7davzPVZWfltYj1vzFddGn8MbSJvKS5gElRCKshUH4wImMEOMxIw0qpiXwImcBJ5K1FVncJ3sZGAcQtJjUrAB6WBw7TPhdy23wP/A0QUFao0JotRAAAAAElFTkSuQmCC"
                            alt="" data-v-4958b936="">
                        <p data-v-4958b936="">Bank account</p></div>
                    <p class="bankount" data-v-4958b936="">Bank account</p>
                    <p class="bankcard" data-v-4958b936="">{{auth()->user()->gateway_number}}</p>
                    <div class="holderi" data-v-4958b936="">
                        <div class="hmile" data-v-4958b936=""><span data-v-4958b936="">Cardholder</span>
                            <p data-v-4958b936="">{{auth()->user()->name}}</p></div>
                        <div class="hmile" data-v-4958b936=""><span data-v-4958b936="">Account Name</span>
                            <p data-v-4958b936="">{{auth()->user()->gateway_method}}</p></div>
                    </div>
                </div>
                <form action="{{route('setup.gateway.submit')}}" method="post">@csrf
                    <div class="bankinfo" data-v-4958b936="">
                        <div class="listinfo flex" data-v-4958b936="">
                            <div class="namei" data-v-4958b936=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-4958b936=""><span data-v-4958b936="">Acc Name</span></div>
                            <div class="van-cell van-field input-box" data-v-4958b936="">
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body">
                                        <a class="modal-trigger" href="#modal1">
                                            <input type="text" id="van-field-4-input"
                                                   class="van-field__control"
                                                   name="gateway_method"
                                                   placeholder="Please enter">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listinfo flex" data-v-4958b936="">
                            <div class="namei" data-v-4958b936=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-4958b936=""><span data-v-4958b936="">Cardholder</span></div>
                            <div class="van-cell van-field input-box" data-v-4958b936="">
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body"><input type="text" id="van-field-5-input"
                                                                        class="van-field__control"
                                                                        name="name"
                                                                        placeholder="Please enter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listinfo flex" data-v-4958b936="">
                            <div class="namei" data-v-4958b936=""><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAA4xJREFUWEftmE1IVFEUx//n3BkdP0YJNCkCkylcFRW1iECiNi3atGgRFdGH1SKEJCnQxbQwyhLaVUSbQgI30qIPCoMoKIhCiBZmFn2XBmmmpTb3xH3z3ozPeUPPwY+3cGAY5sx95/zmnHvPuecQAv6igPPBBSgHER4qW75TCDtJYQ1YFhCDwAIwQPbn5O/EgNeaDLkyOjLWCin8AOnnSlEb3n5to0MYdxyXAhxoWBZjxR1CsiIJA0BlgjkGkp9JY1kBFQBydPjTRywvmGUbbe7rNZAWoIEj4scglKc8YcNN9pwbbIJxDy+7wKegjxX6x0TWRzb39ZJsRGhwbfVTkKyyjQ+R0s1hpa9H6M1HikPP5D6VOBgbFi/5m9A7iKQRjKjhICVdJH3raLC+epcQrtmhGlJKaopP9XTNJFQ23WO3ylerPH4AQtTwsMJuGjhafRuMLZaApaHkTM+5uYBzbCY6Fx4D6KzlMIU7NFBf3Q9CmRGEx0cXF51/92UuAeVO2SIdVp/ts/DdACZMIiGF0dKW7shcwqW8eL/iD0jySUGbEIt1UhVGSlu6i4IAqDsrhoWl0OIKJOD9imGhyYCMcZA0gzXYJOCQSaxOMtZ2UkbyN+s9WZb+7vyeXpt+xi3LokOhEYSwy4MZFcGCc1eSiaXOXT18lLpc9Tkh9ixZ3rXTA9wHoPmzuehL7UETYiXN1iEJaStKCLvD6RVeszAp9xfi9HqvbWLLvEI8f4qnkL+05ymez4P+XTjvQf++8l4578FZ86DEERrh2D4wfStqen3DMSzxpZHfJXRAh/CquO7tXUfef6UsGtWF+wXyrKD2w8NcQX3fZn6ejDWAqIWViBKpKWh688gY/dW69DQRHQeLDoX0yvwj718a+e9LlZdBcgAKY6ITscLaTx9zgfS9BwfjsQvMdNiq04Q9xY29V43BodaqdiJsT14eZGtR3bubFuDFyk6wbDLlTKnE+ry9n57kBOj3PmgAiemwAZkIONxa1Q7CdvtalQIcuVjZSdMB6LeSZAMMjAdde1BJTcGJudiDTtPEGC09626a/neKOYRXkZk5xX+ETdMkVtPUDw5y2xm0xv3ewmPgCY174EcfgR8eucZvjPKpzvOmez5oD43S4zcn05sZIZg7iO0B5hTmeb4mrD71ESNzgJm6BHiMgMEgpx+eob5YoPCDSD+HojaVbQScS82cjWcCP+X/B3rzmOqIyPRRAAAAAElFTkSuQmCC"
                                    alt="" data-v-4958b936=""><span data-v-4958b936="">Address</span></div>
                            <div class="van-cell van-field input-box" data-v-4958b936="">
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body"><input type="tel" inputmode="numeric"
                                                                        name="gateway_number"
                                                                        id="van-field-6-input"
                                                                        class="van-field__control"
                                                                        placeholder="Please enter">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kindre" data-v-4958b936="">
                        <div class="minder" data-v-4958b936=""><img
                                src="data:image/png;base64,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"
                                alt="" data-v-4958b936="">
                            <p data-v-4958b936="">Kind reminder</p></div>
                        <p class="platform" data-v-4958b936="">Please make sure to input your bank account information
                            with
                            precision. Your earnings will be transferred to the bank account you provide, and the
                            accuracy
                            of the details is crucial for a successful transaction.</p></div>
                    <button class="btnrech" data-v-4958b936="" type="submit">Confirm</button>
                </form>
            </section>
        </div>
    </div>
    <style>
        .modal .modal-content {
            padding: 77px 0 !important;
        }

        .btn-floating.btn-large {
            width: 56px;
            height: 56px;
            padding: 0 !important;
            margin: 0 34px !important;
        }

        .modal .modal-content {
            padding: 24px;
            background: #000;
        }
    </style>
@include('alert-message')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @foreach(\App\Models\PaymentMethod::get() as $element)
        <option value="{{$element->id}}">{{$element->name}}</option>
@endforeach
<!-- Modal Structure -->
    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-content">
            @foreach(\App\Models\PaymentMethod::get() as $element)
                <a class="btn-floating btn-large pulse" onclick="getPaymentMethod('{{$element->name}}')"><img
                        style="width: 55px;height:55px;border-radius: 50%;" src="{{asset($element->photo)}}" alt="">
                    <p style="text-align: center;">{{$element->name}}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.modal').modal();
    });

    function getPaymentMethod(method) {
        document.querySelector('input[name="gateway_method"]').value = method;
        $('.modal').modal();
    }
</script>
</body>
</html>
