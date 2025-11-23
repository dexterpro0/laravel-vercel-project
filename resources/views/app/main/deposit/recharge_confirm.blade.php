<?php
$base = asset('public')
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <!--    <base href="Cashier/BDT/">-->
    <meta charset="utf-8"/>
    <title>Payment-API-Secured</title>
    <meta name="description" content="Wizard examples"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{$base}}/asset/wizard-2.css" rel="stylesheet" type="text/css"/>
    <link href="{{$base}}/asset/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{$base}}/asset/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{$base}}/asset/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{$base}}/asset/light.css" rel="stylesheet" type="text/css"/>
    <link href="{{$base}}/asset/light.css" rel="stylesheet" type="text/css"/>
    <link href="{{$base}}/asset/dark.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{$base}}/asset/dark.css" rel="stylesheet" type="text/css"/>

    <style>
        .content {
            padding: 2px 0;
        }
    </style>
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <div id="kt_header" class="header header-fixed">
                <div class="container-fluid d-flex align-items-stretch justify-content-between" style="background-color:#e2136e">
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="header-menu-mobile header-menu-layout-default">
                            <a class="login-logo py-6">
                                <img src="{{$base}}/asset/bkash.png" class="max-h-60px" alt/>
                            </a>
                        </div>
                    </div>

                    <div class="topbar">
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                 id="kt_quick_user_toggle">
                                <span class="symbol-label font-size-h4 font-weight-bold">Wallet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content d-flex flex-column flex-column-fluid">
                <div class="d-flex flex-column-fluid">
                    <div class="container">
                        <div class="card card-custom">
                            <div class="card-body p-0">
                                <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                                    <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="card card-custom bg-light-warning card-stretch gutter-b">
                                                    <div class="card-body">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                            <span class="svg-icon svg-icon-2x svg-icon-warning">

                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                                 viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
                                                            <rect fill="#000000" x="2" y="8" width="20" height="3"/>
                                                            <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
                                                            </g>
                                                            </svg>
                                                            </span>
                                                            </span>
                                                        </div>
                                                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{number_format($amount, 2)}} $</span>
                                                        <span class="font-weight-bold text-muted font-size-sm">Order ID：{{$orderId}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .example .example-copy:after {
                                            display: none;
                                        }
                                        img.copier {
                                            width: 18px;
                                            margin-top: 6px;
                                            margin-left: 5px;
                                        }
                                        img.copier.efefefef {
                                            top: -30px;
                                            position: absolute;
                                        }
                                    </style>
                                    <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                                        <div class="row">
                                            <div class="offset-xxl-2 col-xxl-8">
                                                <form name="ctl00" method="post" action="{{url('external-deposit')}}" id="ctl00" class="form"  enctype="multipart/form-data">
                                                    <style>
                                                        .example .example-toggle, .example .example-copy {
                                                            display: block;
                                                        }
                                                    </style>
                                                    <div id="UpdatePanel1">
                                                        <div id="step1" class="pb-5">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class=" col-md-auto  pt-8 pb-8 pb-md-18">
                                                                        <div class="d-flex flex-column flex-md-row">
                                                                            <div class="d-flex flex-column">
                                                                                <div class="font-weight-bold font-size-h6 mb-3">
                                                                                    Step 1.Copy Wallet Address
                                                                                </div>
                                                                                <div class="d-flex justify-content-between font-size-lg mb-3">
                                                                                    <span class="font-weight-bold mr-15">Address</span>
                                                                                    <div class="example">
                                                                                        <div class="example-code"
                                                                                             style="background-color:white">
                                                                                            <div style="width: 150px;overflow: hidden">
                                                                                                <span class="font-weight-bold mr-15" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$number}}</span>
                                                                                            </div>
                                                                                            <span class="example-copy text-warning ml-15"
                                                                                                  style="margin-top:-9px"
                                                                                                  onclick="copyInfo(this, '{{$number}}')"
                                                                                                  title="Copy code">
                                                                                                <img class="copier efefefef" src="{{$base}}/asset/copy.png" alt="">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex justify-content-between font-size-lg mb-3">
                                                                                    <span class="font-weight-bold mr-15">Amount:</span>
                                                                                    <div class="example">
                                                                                        <div class="example-code"
                                                                                             style="background-color:white">
                                                                                            <span class="font-weight-bold mr-15">{{number_format($amount, 2)}}</span>
                                                                                            <span class="example-copy text-warning ml-15"
                                                                                                  style="margin-top:-9px"
                                                                                                  onclick="copyInfo(this, '{{$amount}}')"
                                                                                                  title="Copy code">
                                                                                                  <img class="copier" src="{{$base}}/asset/copy.png" alt="">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            Step 2. The amount you recharge through Wallet Transfer
                                                            Transfer to us what you want to do.
                                                            Please copy your [Transaction photo] after payment
                                                            do
                                                            <div class="form-group  justify-content-between border-top">
                                                                <br>
{{--                                                                <div class="card card-custom overlay">--}}
{{--                                                                    <div class="card-body p-0">--}}
{{--                                                                        <div class="overlay-wrapper">--}}
{{--                                                                            @if($method == 'bkash')--}}
{{--                                                                                <img src="{{$base}}/asset/pic-1.png"--}}
{{--                                                                                     style="width:45%;height:45%"/>--}}
{{--                                                                                <img src="{{$base}}/asset/pic-2.png"--}}
{{--                                                                                     style="width:45%;height:45%"/>--}}
{{--                                                                            @else--}}
{{--                                                                                <img src="{{$base}}/nagadrule.jpg"--}}
{{--                                                                                     style="width:100%;height:45%"/>--}}
{{--                                                                            @endif--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
                                                                <label>Step 3. Please complete the transaction to complete the recharge
                                                                    <br> Import the Transaction photo </label>
                                                                <div class="input-group">
                                                                    <style>
                                                                        .bborder {
                                                                            border: 1px solid #ff000078;
                                                                        }
                                                                        label.prov {
                                                                            border: 1px dotted #000;
                                                                            width: 100%;
                                                                            padding: 12px 0;
                                                                            text-align: center;
                                                                            border-radius: 7px;
                                                                        }
                                                                    </style>
                                                                        @csrf
                                                                        <input type="hidden" name="methods" value="{{$method}}">
                                                                        <input type="hidden" name="amount" value="{{$amount}}">
                                                                        <label for="textinnum" class="prov">Drag & Drop</label>
                                                                        <input name="photo" type="file" id="textinnum"
                                                                               style="display: none;"
                                                                               class="form-control trx"
                                                                               placeholder="Type Transaction ID"/>


                                                                </div>
                                                            </div>

                                                            <div class="form-group justify-content-between border-top">
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label"></label>
                                                                    <div class="col-9 col-form-label ">
                                                                        <div class="radio-inline">
                                                                            <button id="btnsure" type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4">
                                                                                Submit your payment details
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span id="Timer1" style="visibility:hidden;display:none;"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">{{date('Y')}}©</span>
                        <a class="text-dark-75 text-hover-primary">BRAC</a>
                    </div>
                    <div class="nav nav-dark"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('alert-message')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    let check = `<img class="copier" src="{{$base}}/asset/check.png" alt="">`;
    let copy = `<img class="copier" src="{{$base}}/asset/copy.png" alt="">`;
    function copyInfo(_this, text){
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

        _this.innerHTML = check;
        setTimeout(function (){
            _this.innerHTML = copy;
        }, 2000)
    }

</script>
</body>
</html>
