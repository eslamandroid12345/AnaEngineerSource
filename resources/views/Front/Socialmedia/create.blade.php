<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>انا مهندس | انشاء حساب</title>
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
    <link rel="stylesheet" type="text/css" href=" {{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
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

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
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
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5 ">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src=" {{asset('dashbord/app-assets/images/pages/Personal data.svg')}}" alt="Redgister V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5 font">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 color ">  عظيم .. انت الان علي بعد خطوات من انشاء حساب علي منصه انا مهندس </h2>
                                <h3 class="card-text mb-2">استكمل البيانات التاليه ل اتمام انشاء حساب</h3>
                                <form class="auth-register-form mt-2" method="POST" action="{{route('create_profile')}} " enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                    @if($errors->any())
                                    <div class="alert alert-danger fontSize" role="alert">
                                        <h4 class="alert-heading">معذرا يوجد خطأ في البيانات </h4>
                                        @foreach ($errors->all as $error )
                                        <div class="alert-body">
                                            {{$error}}
                                        </div>
                                     @endforeach
                                    @endif
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">رقم الهاتف</label>
                                        <input class="form-control" id="register-username" type="number" name="phone"  value="{{old('phone')}}" placeholder=" +2010123456789" aria-describedby="register-username" autofocus="" tabindex="1" />
                                    </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="register-username">المحافظه   </label>
                                                <input class="form-control" id="register-username" type="text" value="{{old('city')}}" name="city" placeholder=" القاهره  " aria-describedby="register-username" autofocus="" tabindex="1" />
                                            </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">مكان العمل </label>
                                        <input class="form-control" id="register-username" type="text" value="{{old('job')}}" name="job" placeholder=" شركه انا مهندس" aria-describedby="register-username" autofocus="" tabindex="1" />
                                    </div>

                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">الفيسبوك  </label>
                                        <input class="form-control" id="register-username" type="text" value="{{old('facebook')}}" name="facebook" placeholder=" https://www.facebook.com/ana.muhands  " aria-describedby="register-username" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">تويتر </label>
                                        <input class="form-control" id="register-email" type="text" name="twitter" value="{{old('twitter')}}" placeholder="www.twitter.com" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">لينكدان </label>
                                        <input class="form-control" id="register-email" type="text" name="linkedin" value="{{old('linkedin')}}" placeholder="https://www.linkedin.com/in/ana.muhands" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">الصوره الشخصيه </label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">صوره الغلاف  </label>
                                        <input class="form-control" type="file" id="formFile" name="profile_cover">
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">انا اوافق علي<a href="#">&nbsp;الشروط و الاحكام</a></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5" type="submit">انشاء حساب</button>
                                </form>

                        </div>
                        <!-- /Register-->
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
    <script src=" {{asset('dashbord/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src=" {{asset('dashbord/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src=" {{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src=" {{asset('dashbord/app-assets/js/core/app.js')}}"></script>


    <!-- BEGIN: Page JS-->
    <script src="{{asset('dashbord/app-assets/js/scripts/pages/auth-register.js')}}"></script>
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


</html>
