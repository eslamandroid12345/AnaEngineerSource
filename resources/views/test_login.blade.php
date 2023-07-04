<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl" style="background-color:powderblue;" >
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>انا مهندس | تسجيل الدخول</title>
    <link rel="apple-touch-icon" href="{{asset('dashbord/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashbord/app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/font.css')}}">


    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static font " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo--><a class="brand-logo" href="index.html">
                        <img src="{{asset('dashbord/app-assets/images/logo/logo.png')}}">

                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src=" {{asset('dashbord/app-assets/images/pages/login-v2.svg')}}" alt="Login V2" /></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Login-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            @if(session()->get('error'))
                                <div class="alert alert-danger">
                                    {{session()->get('error')}}
                                </div>
                            @endif
                            <h2 class="card-title fw-bold mb-1 font">مرحبا ب عودتك </h2>
                            <p class="card-text mb-2 font">سجل دخولك الان واستمتع ب خدماتنا</p>


                            @if($errors->any())
                                <div class="alert alert-danger fontSize" role="alert">
                                    <h4 class="alert-heading">معذرا يوجد خطأ في البيانات </h4>
                                    @foreach ($errors->all as $error )
                                        <div class="alert-body">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <form class="auth-login-form mt-2" action="{{route('auth.handleLogin')}}" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label class="form-label font" for="login-email">البريد الالكتروني </label>
                                    <input class="form-control font" id="login-email" type="text" name="email" placeholder="user@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                </div>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between color font">
                                        <label class="form-label" for="login-password color">كلمه المرور</label><a href="{{route('forget.password.get')}}"><small>هل نسيت كلمه المرور?</small></a>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                                        <label class="form-check-label" for="remember-me">تذكرني</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">سجل دخولك الان</button>
                            </form>
                            <p class="text-center mt-2"><span>هل انت مستخدم جديد?</span><a href="{{route('register')}}"><span>&nbsp;انشاء حساب جديد</span></a></p>
                            <div class="divider my-2">
                                <div class="divider-text">تسجيل الدخول عبر</div>
                            </div>
                            <div class="auth-footer-btn d-flex justify-content-center"></i></a>
                                <a class="btn btn-google" href="{{ route('login.google')}}"><i data-feather="mail"></i></a>
                                <a class="btn btn-facebook" href="{{ route('login.facebook')}}"><i data-feather="mail"></i></a>
                            </div>


                        </div>
                    </div>
                    <!-- /Login-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src=" {{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src=" {{asset('dashbord/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=" {{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
<script src=" {{asset('dashbord/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src=" {{asset('dashbord/app-assets/js/scripts/pages/auth-login.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
