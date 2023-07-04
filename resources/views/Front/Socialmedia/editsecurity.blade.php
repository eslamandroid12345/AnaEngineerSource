<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>انا مهندس - تعديل</title>
    <link rel="apple-touch-icon" href="{{asset('dashbord/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashbord/app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/font.css')}}">
 <!-- BEGIN: Page CSS-->
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <!-- END: Page CSS-->

 <!-- END: Page CSS-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/assets/css/style-rtl.css')}}assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>


            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>


                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{Auth::user()->name}}
                    </div><span class="avatar">
                            @if (auth()->check() && auth()->user()->google_id)
                                <img src="{{ auth()->user()->image }}" alt="" class="round" alt="avatar" height="40" width="40">
                            @elseif (auth()->user()->image)
                                <img src="{{ asset('profile_photo/'. auth()->user()->image) }}" class="round" alt="avatar" height="40" width="40">
                            @else
                                <img src="{{ asset('default_image/y.jpg') }}" class="round" alt="avatar" height="40" width="40">
                            @endif                            <span class="avatar-status-online">
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize  " href="{{route('profile',Auth::user()->id)}}"><i class="me-50 " data-feather="user"></i> الصفحه الشخصيه</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize  " href="{{route('auth.logout')}}"><i class="me-50 " data-feather="log-out"
                                ></i> تسجيل الخروج</a>

                </div>
            </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('Front.layout.RightSideForSocial')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content font">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">


            </div>
            <div class="col-12">
                <ul class="nav nav-pills mb-2">
                    <!-- account -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('edit.social',Auth::user()->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="fw-bold">اعدادات الحساب</span>
                        </a>
                    </li>
                    <!-- security -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('edit.security.social',Auth::user()->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock font-medium-3 me-50"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <span class="fw-bold">الامان</span>
                        </a>
                    </li>
                    <!-- billing and plans -->


                </ul>
                <!-- security -->
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                 @endif

                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">تغير الباسورد</h4>
                    </div>


                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">

                        {{ $error }}

                      </div>
                      @endforeach
                    @endif
                    <br>
                    <div class="card-body pt-1">
                        <!-- form -->
                        <form class="validate-form" novalidate="novalidate" method="POST" action="{{ route('change.password') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="account-old-password"> الباسورد القديم</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input  class="form-control" id="account-old-password"  name="old_password" type="password" placeholder="اكتب هنا الباسورد الحالي مثل    '" data-msg="Please current password">
                                        <div class="input-group-text cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </div>

                                        @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="account-new-password"> الباسورد الجديد</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input type="password" id="account-new-password" name="new_password"  class="form-control" placeholder="اكتب هنا الباسورد الجديد '1234'">
                                        <div class="input-group-text cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="account-retype-new-password">اعد كتابه الباسورد الجديد</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input type="password" class="form-control" id="account-retype-new-password" name="new_password_confirmation" placeholder="اعد كتابع هنا الباسورد الحالي '1234'">
                                        <div class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="fw-bolder">متطلبات كلمة المرور:</p>
                                    <ul class="ps-1 ms-25">
                                        <li class="mb-50">لا يقل طولها عن 8 أحرف - كلما كان ذلك أكبر ، كان ذلك أفضل</li>
                                        <li class="mb-50">حرف صغير واحد على الأقل</li>
                                        <li>
                                        ما لا يقل عن رقم واحد أو رمز أو حرف مسافة بيضاء</li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light"> حفظ التغيرات</button>
                                    <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">الغاء</button>
                                </div>
                            </div>
                        </form>
                        <!--/ form -->
                    </div>
                </div>

                <!-- two-step verification -->

                <!-- / two-step verification -->

                <!-- create API key -->

                <!-- / create API key -->

                <!-- api key list -->
                <div class="card">

                <!-- / api key list -->


                <!-- / recent device -->

                <!--/ security -->
            </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src=" {{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src=" {{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src=" {{asset('dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src=" {{asset('dashbord/app-assets/js/scripts/pages/page-profile.js')}}"></script>
    <!-- END: Page JS-->
    <script src=" {{asset('dashbord/app-assets/js/core/custom.js')}}"></script>
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

</html>
