<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
{{--new--}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> {{$profile->name}} الصفحه الرئيسيه ل</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/font.css')}}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/pages/page-profile.css')}}">
    <!-- END: Page CSS-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/assets/css/style-rtl.css')}}">
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
            <ul class="nav navbar-nav bookmark-icons">
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize  " href="{{route('social.home')}}"><i class="me-50 " data-feather="user"></i> الصفحه الرئيسيه</a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize  " href="{{route('auth.logout')}}"><i class="me-50 " data-feather="user"></i> تسجيل الخروج</a>

                    </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">    {{$profile->name}} </p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo">
                    <img src="{{asset('Dashbord/app-assets/images/logo/logosm.svg')}}"  height="40" viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >

                        <h2 class="brand-text  font " style="font-size: medium; color:#058f00 ;"> انا مهندس</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item fontSize"><a class="d-flex align-items-center " href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الصفحه الرئيسيه</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                <ul class="menu-content">

                    <li class="active fontSize"><a class="d-flex align-items-center " href="{{url('/')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">الرئيسيه</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الكورسات والمقالات </span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الدورات و المقالات</span></a>
                <ul class="menu-content">
                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('home_elms')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">الدورات</span></a>
                    </li>

                    <li><a class="d-flex align-items-center fontSize" href="{{route('all.artical')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">المقالات</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('all.magazines')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details"> المجلات</span></a>
                    </li>
                </ul>
            </li>

            <!-- <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">التواصل الاجتماعي</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="User">اعدادات التواصل الاجتماعي</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">الحسابات المحظوره</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">توثيق الحسابات </span></a>
                    </li>
                </ul>
            </li> -->




    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">


    </div>
    <div class="content-body">
        <div id="user-profile">
            <!-- profile header -->
            <div class="row">
                <div class="col-12">
                    <div class="card profile-header mb-2">
                        <!-- profile cover photo -->

                        <img class="card-img-top" src="{{asset('cover_photo/'.$profile->profile_cover)}}" alt="User Profile Image" width="100%" height="400">

                        <!--/ profile cover photo -->

                        <div class="position-relative"  >
                            <!-- profile picture -->
                            <div class="profile-img-container d-flex align-items-center" >
                                <div class="profile-img" >

                                    </span>

                                    <img src="{{asset('profile_photo/'.$profile->image) }}" class="rounded img-fluid" alt="Card image"  >

                                </div>
                                <!-- profile title -->
                                <div class="profile-title ms-3">

                                    <h2 class="text-white">{{$profile->name}} <img src="{{asset('Dashbord/app-assets/images/svg/correect.svg')}}"> </button>
                                    </h2>
                                    </li>

                                    <p class="text-white font">{{$profile->job}}</p>

                                </div>
                            </div>
                        </div>

                        <!-- tabs pill -->
                        <div class="profile-header-nav">
                            <!-- navbar -->
                            <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                <button class="btn btn-icon navbar-toggler waves-effect waves-float waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify font-medium-5"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg>
                                </button>

                                <!-- collapse  -->
                                <div class="collapse navbar-collapse font" id="navbarSupportedContent">
                                    <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">

                                        <!-- edit button -->
                                        @if(Auth::check() && Auth::user()->id === $profile->id)
                                            <ul class="nav nav-pills mb-0">

                                                <li class="nav-item">
                                                    <a href="{{route('add.post')}}">

                                                        <button class="btn btn-primary waves-effect waves-float waves-light">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit d-block d-md-none"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                            <span class="fw-bold d-none d-md-block">اضف منشور</span>

                                                        </button>
                                                    </a>
                                                    <a href="{{route('edit_profile',$profile->id)}}">
                                                        <button class="btn btn-primary waves-effect waves-float waves-light">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit d-block d-md-none"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                            <span class="fw-bold d-none d-md-block">تعديل</span>

                                                        </button>
                                                    </a>


                                                </li>

                                                <a href="{{route('edit_profile',$profile->id)}}">

                                                </a>
                                            </ul>






                                        @else
                                            <ul class="nav nav-pills mb-0">
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold active" href="#">
                                                        <span class="d-none d-md-block ">الاحداث</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rss d-block d-md-none"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle></svg>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold" href="about_us.html">
                                                        <span class="d-none d-md-block">معلومات عن</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info d-block d-md-none"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                                    </a>
                                                </li>

                                                <li class="nav-item">

                                                </li>
                                                <li class="nav-item flow-now">
                                                    <form action="" method="post">
                                                        eslam
                                                        <input type="hidden" value="{{(int)$id}}" id="following_id">

                                                        @if($user_following->count() > 0)
                                                            <button  id="unFlow" type="button" class="btn btn-flat-danger">الغاء متابعه    </button>
                                                        @else

                                                            <button id="addFlow" type="button" class="btn btn-flat-primary">متابعه     </button>
                                                        @endif
                                                    </form>

                                                    <a class="nav-link fw-bold" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users d-block d-md-none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </a>
                                                </li>
                                                <a href="{{route('edit_profile',$profile->id)}}">

                                                </a>
                                            </ul>
                                        @endif


                                    </div>



                                </div>

                                <!--/ collapse  -->
                            </nav>
                            <!--/ navbar -->
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-outline-danger waves-effect font">الغاء المتابعه</button>


            <div class="card">
                <div class="card-header">
                    <h3>{{ $profile->user->name }}</h3>
                </div>
                <div class="card-body">
                    <p>Email: {{ $profile->user->email }}</p>
                </div>
                <div class="card-footer">
                    @if(Auth::check())
                        @if(Auth::user()->follows($profile))
                            <form action="{{ route('unfollow', $profile->user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Unfollow</button>
                            </form>
                        @else
                            <form action="{{ route('follow', $profile->user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Follow</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    @if(auth()->check())
                        @if(auth()->user()->id !== $profile->id)
                            @if(auth()->user()->following->contains($profile->id))
                                <form action="{{ route('user.unfollow', $profile->user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Unfollow</button>
                                </form>
                            @else
                                <form action="{{ route('user.follow', $profile->user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Follow</button>
                                </form>
                            @endif
                        @endif
                    @endif
                </div>
            </div>

            <a href="{{route('add.post')}}"><button type="button" class="btn btn-primary waves-effect waves-float waves-light font">اضف منشور</button></a>



            <!--/ profile header -->

            <!-- profile info section -->
            <section id="profile-info ">
                <div class="row font">
                    <!-- left profile info section -->
                    <div class="col-lg-3 col-12 order-2 order-lg-1">
                        <!-- about -->
                        <div class="card">
                            <div class="card-body followers-load">
                                <h5 class="mb-75 fontSize">يعمل  </h5>
                                <p class="card-text">{{$profile->job}}</p>
                                <div class="mt-2">
                                    <h5 class="mb-75 ">يقيم في:</h5>
                                    <p class="card-text fontSize">{{$profile->city}} </p>
                                </div>
                                <br>
                                <h4 class="mb-75 "> التواصل الاجتماعي</h4>
                                <h5 class="mb-75 followers-loaded">عدد المتابعين {{$followers->count()}}</h5>
                                <div class="demo-inline-spacing">
                                    <a href="{{$profile->facebook}}"><button type="button" class="btn btn-outline-primary"><i data-feather="facebook"></i></button></a>
                                    <a href="{{$profile->twitter}}"><button type="button" class="btn btn-outline-primary"><i data-feather="twitter"></i></button></a>
                                    <a href="{{$profile->linkedin}}"><button type="button" class="btn btn-outline-primary"><i data-feather="linkedin"></i></button></a>
                                    <a href="{{$profile->email}}"><button type="button" class="btn btn-outline-primary"><i data-feather="mail"></i></button></a>

                                </div>
                            </div>


                        </div>

                    </div>
                    <!--/ left profile info section -->

                    <!-- center profile info section -->
                    <div class="col-lg-6 col-12 order-1 order-lg-2">
                        @if(Auth::check() && Auth::user()->id === $profile->id)
                            @foreach ($posts as $post)
                                <!-- post 1 -->
                                <div class="card">
                                    <div class="card-body call-load">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <!-- avatar -->
                                            <div class="avatar me-1">
                                                <img src="{{asset('profile_photo/'.$profile->image)}}" alt="avatar img" width="50" height="50">
                                            </div>
                                            <!--/ avatar -->
                                            <div class="profile-user-info">
                                                <h6 class="mb-0"> {{$profile->name}} </h6>
                                                <small class="text-muted">12 Dec 2022 at 1:16 AM</small>
                                            </div>
                                        </div>
                                        <p class="card-text font">
                                            {{$post->body}}
                                        </p>
                                        <!-- post img -->
                                        <img class="img-fluid rounded mb-75" src="{{asset('posts/'.$post->photo)}}" alt="avatar img">
                                        <!--/ post img -->

                                        <!-- like share -->
                                        <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">

                                            <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">



                                                <form action="" method="POST">
                                                    @csrf

                                                    <button type="button" class="btn rounded-pill btn-icon btn-label-secondary waves-effect like-post" data-id="{{$post->id}}" style="color:#00000">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3 me-50">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>
                                                </span>
                                                        <span id="count"> {{ $post->likeCount }}</span>
                                                    </button>
                                                </form>


                                                <form action="" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn rounded-pill btn-icon btn-label-secondary waves-effect unlike-post" style="color:#058f00" data-id="{{$post->id}}">

                                                <span>
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_502_16)">
                                                        <path d="M16.4983 3.64956C16.094 3.24503 15.6139 2.92412 15.0855 2.70517C14.5571 2.48623 13.9907 2.37354 13.4187 2.37354C12.8468 2.37354 12.2804 2.48623 11.752 2.70517C11.2236 2.92412 10.7435 3.24503 10.3392 3.64956L9.5 4.48873L8.66083 3.64956C7.84407 2.83281 6.73632 2.37396 5.58125 2.37396C4.42618 2.37396 3.31842 2.83281 2.50166 3.64956C1.68491 4.46632 1.22606 5.57408 1.22606 6.72915C1.22606 7.88421 1.68491 8.99197 2.50166 9.80873L3.34083 10.6479L9.5 16.8071L15.6592 10.6479L16.4983 9.80873C16.9029 9.40438 17.2238 8.92429 17.4427 8.39589C17.6617 7.86748 17.7744 7.30112 17.7744 6.72915C17.7744 6.15718 17.6617 5.59081 17.4427 5.06241C17.2238 4.534 16.9029 4.05391 16.4983 3.64956Z" stroke="#EB5757" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M18.6607 -7.04729e-05L2.71429 16.2856" stroke="#EB5757" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_502_16">
                                                        <rect width="19" height="19" fill="white"/>
                                                        </clipPath>
                                                        </defs>
                                                        </svg>


                                                </span>

                                                    </button>
                                                </form>

                                                </form>

                                            </div>

                                            <!-- share and like count and icons -->
                                            <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                                                <a href="#" class="text-nowrap">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square text-body font-medium-3 me-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                    <span class="text-muted me-1">{{ $post->comments->count() }}</span>
                                                </a>
                                            </div>
                                            <!-- share and like count and icons -->
                                        </div>
                                        <!-- like share -->

                                        <!-- comments -->


                                        @foreach ($post->comments as $comment)
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar mt-25 me-75">
                                                    <img src="{{asset('profile_photo/'.$comment->user->image)}}" alt="Avatar" height="34" width="34" />
                                                </div>
                                                <div class="profile-user-info w-100">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0">{{$comment->user->name}}</h6>

                                                    </div>
                                                    <small>
                                                        {{ $comment->body }}
                                                    </small>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--/ comments -->
                                        <br>
                                        <!-- comment box -->
                                        <form action="" method="post">
                                            <fieldset class="mb-75">
                                                <label class="form-label" for="label-textarea">اضف تعليق </label>
                                                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                                                <textarea class="form-control font" id="label-textarea" rows="3" placeholder="اكتب هنا تعليقك" name="body" > </textarea>
                                            </fieldset>
                                            <!--/ comment box -->
                                            <button type="button" id="add-comment" class="btn btn-sm btn-primary font"> تعليق</button>

                                        </form>
                                    </div>

                                    <!--/ comments -->

                                    <!-- comment box -->
                                    <!-- comment box -->

                                </div>
                            @endforeach
                        @else
                            <p class="card-text font">
                                لاتوجد منشورات لعرضها
                            </p>
                        @endif
                    </div>
                    @foreach($posts as $post)
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-start align-items-center mb-1">
                                    <!-- avatar -->
                                    <div class="avatar me-1">
                                        <img src="{{asset('storage/profile_photo/'.$profile->image) }}" alt="avatar img" height="50" width="50" />
                                    </div>
                                    <!--/ avatar -->
                                    <div class="profile-user-info">
                                        <h6 class="mb-0">{{$profile->name}}</h6>
                                        <small class="text-muted">{{$post->created_at}}</small>
                                    </div>
                                </div>
                                <p class="card-text font">
                                    {{$post->body}}
                                </p>
                                <!-- post img -->
                                <img class="img-fluid rounded mb-75" src="{{$post->photo}}" alt="avatar img" />
                                <!--/ post img -->

                                <!-- like share -->
                                <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
                                    <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                                        <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                                            <i data-feather="heart" class="profile-likes font-medium-3 me-50"></i>
                                            <span>1.25k</span>
                                        </a>

                                        <!-- avatar group with tooltip -->
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-group ms-1">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Trina Lynes" class="avatar pull-up">
                                                    <img src=" app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Lilian Nenez" class="avatar pull-up">
                                                    <img src=" app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Alberto Glotzbach" class="avatar pull-up">
                                                    <img src=" app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="George Nordic" class="avatar pull-up">
                                                    <img src=" app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Vinnie Mostowy" class="avatar pull-up">
                                                    <img src=" app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted text-nowrap ms-50">+140 more</a>
                                        </div>
                                        <!-- avatar group with tooltip -->
                                    </div>

                                    <!-- share and like count and icons -->
                                    <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                                        <a href="#" class="text-nowrap">
                                            <i data-feather="message-square" class="text-body font-medium-3 me-50"></i>
                                            <span class="text-muted me-1">1.25k</span>
                                        </a>

                                        <a href="#" class="text-nowrap">
                                            <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                                            <span class="text-muted">1.25k</span>
                                        </a>
                                    </div>
                                    <!-- share and like count and icons -->
                                </div>
                                <!-- like share -->

                                <!-- comments -->
                                <div class="d-flex align-items-start mb-1">
                                    <div class="avatar mt-25 me-75">
                                        <img src=" app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="34" width="34" />
                                    </div>
                                    <div class="profile-user-info w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mb-0">Kitty Allanson</h6>
                                            <a href="#">
                                                <i data-feather="heart" class="text-body font-medium-3"></i>
                                                <span class="align-middle text-muted">34</span>
                                            </a>
                                        </div>
                                        <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-1">
                                    <div class="avatar mt-25 me-75">
                                        <img src=" app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" height="34" width="34" />
                                    </div>
                                    <div class="profile-user-info w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mb-0">Jackey Potter</h6>
                                            <a href="#">
                                                <i data-feather="heart" class="profile-likes font-medium-3"></i>
                                                <span class="align-middle text-muted">61</span>
                                            </a>
                                        </div>
                                        <small>
                                            Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                                        </small>
                                    </div>
                                </div>
                                <!--/ comments -->

                                <!-- comment box -->
                                <fieldset class="mb-75">
                                    <label class="form-label" for="label-textarea">اضف تعليق </label>
                                    <textarea class="form-control font" id="label-textarea" rows="3" placeholder="اكتب هنا تعليقك"></textarea>
                                </fieldset>
                                <!--/ comment box -->
                                <button type="button" class="btn btn-sm btn-primary font"> تعليق</button>
                            </div>
                        </div>
                    @endforeach


                    <!--/ post 1 -->

                    <!-- post 2 -->

                    <!--/ post 3 -->
                </div>
                <!--/ center profile info section -->

                <!-- right profile info section -->

                <!--/ latest profile pictures -->

                <!-- suggestion -->

                <!--/ suggestion -->

                <!--/ reload button -->
            </section>
            <!--/ profile info section -->
        </div>

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src=" {{asset('Dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=" {{asset('Dashbord/app-assets/js/core/app-menu.js')}}"></script>
<script src=" {{asset('Dashbord/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src=" {{asset('Dashbord/app-assets/js/scripts/pages/page-profile.js')}}"></script>
<!-- END: Page JS-->
<script src=" {{asset('Dashbord/app-assets/js/core/custom.js')}}"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    });
    //start like and dislike with Ajax
    $(document).on('click','.unlike-post',function(e) {
        e.preventDefault();
        var post_id = $(this).data("id");
        var url = '{{route("unlike.post", ":id")}}';
        url = url.replace(':id', post_id);

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'post_id': post_id,
            },

            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("profile", ":id")}}';
                    socialMedia = socialMedia.replace(':id', "{{$id}}");
                    $("#count").load(socialMedia + " #count").fadeIn("slow");
                }
                else
                    toastr.error('There is an error');
            },

        });
    });


    $(document).on('click','.like-post',function(e) {
        e.preventDefault();
        var post_id = $(this).data("id");
        var url = '{{route("like.post", ":id")}}';
        url = url.replace(':id', post_id);

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'post_id': post_id,
            },

            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("profile", ":id")}}';
                    socialMedia = socialMedia.replace(':id', {{$id}});
                    $("#count").load(socialMedia + " #count").fadeIn("slow");
                }
                else
                    toastr.error('There is an error');
            },

        });
    });


    //start add comment
    $(document).on('click','#add-comment',function(e) {
        e.preventDefault();
        var url = '{{route("comments.store")}}';
        var post_id = $("#post_id").val();
        var body = $("#label-textarea").val();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'body' : body,
                'post_id': post_id,
            },

            beforeSend: function () {
                $('#add-comment').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("profile", ":id")}}';
                    socialMedia = socialMedia.replace(':id', "{{$id}}");
                    $(".call-load").load(socialMedia + " .call-load").fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },

            error: function (data) {

                if (data.status === 422) {
                    $('#add-comment').html('<span style="margin-left: 4px;"> تعليق</span>').attr('disabled', false);
                    // var errors = $.parseJSON(data.responseText);
                    // $.each(errors, function (key, value) {
                    //     if ($.isPlainObject(value)) {
                    //         $.each(value, function (key, value) {
                    //             toastr.error(value, key);
                    //         });
                    //     }
                    // });
                }
            }

        });
    });


    //start add follow for users
    $(document).on('click','#addFlow',function(e) {
        e.preventDefault();
        var url = '{{route("socialmedia.follow.user")}}';
        var following_id = $("#following_id").val();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'following_id': following_id,
            },

            beforeSend: function () {
                $('#addFlow').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {
                var socialMedia = '{{route("profile", ":id")}}';
                if (data.status == 200){

                    socialMedia = socialMedia.replace(':id', following_id);
                    $(".flow-now").load(socialMedia + " .flow-now").fadeIn("slow");
                    $(".followers-loaded").load(socialMedia + " .followers-loaded").fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },


        });
    });


    //start un follow for users
    $(document).on('click','#unFlow',function(e) {
        e.preventDefault();
        var url = '{{route("socialmedia.unFollow.user")}}';
        var following_id = $("#following_id").val();

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{csrf_token()}}",
                'following_id': following_id,
            },

            beforeSend: function () {
                $('#unFlow').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("profile", ":id")}}';
                    socialMedia = socialMedia.replace(':id', following_id);
                    $(".flow-now").load(socialMedia + " .flow-now").fadeIn("slow");
                    $(".followers-loaded").load(socialMedia + " .followers-loaded").fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },


        });
    });
</script>
</body>
<!-- END: Body-->

</html>


