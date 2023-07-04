<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>دورات منصه انا مهندس</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lms/assets/images/favicon.png')}}">
    <!-- CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('lms/assets/css/vendor/tipped.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto&display=swap" rel="stylesheet">


    <style>
        #headerPopup{
            width:75%;
            margin:0 auto;
        }

        #headerPopup iframe{
            width:100%;
            margin:0 auto;
        }
    </style>

    <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            display: none;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
        .star-rating-complete{
            color: #c59b08;
        }
        .rating-container .form-control:hover, .rating-container .form-control:focus{
            background: #fff;
            border: 1px solid #ced4da;
        }
        .rating-container textarea:focus, .rating-container input:focus {
            color: #000;
        }         .rated {
                      float: left;
                      height: 46px;
                      padding: 0 10px;
                  }
        .rated:not(:checked) > input {
            position:absolute;
            display: none;
        }
        .rated:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ffc700;
        }
        .rated:not(:checked) > label:before {
            content: '★ ';
        }
        .rated > input:checked ~ label {
            color: #ffc700;
        }
        .rated:not(:checked) > label:hover,
        .rated:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rated > input:checked + label:hover,
        .rated > input:checked + label:hover ~ label,
        .rated > input:checked ~ label:hover,
        .rated > input:checked ~ label:hover ~ label,
        .rated > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css')}}">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

</head>

<body class="sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div id="edublink-preloader">
    <div class="loading-spinner">
        <div class="preloader-spin-1"></div>
        <div class="preloader-spin-2"></div>
    </div>
    <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
    </div>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="edu-header header-style-1 header-fullwidth no-topbar">
        <div id="edu-sticky-placeholder"></div>
        <div class="header-mainmenu">
            <div class="container-fluid">
                <div class="header-navbar">
                    <div class="header-brand">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="header-category">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a href="#">الاقسام<i class="icon-1"></i></a>
                                        <ul class="submenu">
                                            @foreach($categories as $Category)
                                                <li><a href="">{{ $Category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class=""><a href="{{route('home')}}">الرئيسيه</a></li>
                                <li class=""><a href="{{route('home_elms')}}">الدورات</a></li>
                                <li class=""><a href="{{route('all.artical')}}">المقالات</a></li>
                                <li class=""><a href="{{route('plans_page')}}">خطط الاسعار</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <ul class="header-action">
                            <li class="header-btn">
                                @guest
                                    <a href="contact-us.html" class="edu-btn btn-medium"> تسجيل الدخول <i class="icon-west"></i></a>
                                @endguest
                                @auth
                                    <nav class="mainmenu-nav">
                                        <ul class="mainmenu">
                                            <li class="has-droupdown">
                                                <a href="courses.html">{{Auth::user()->name}}</a>
                                                <ul class="submenu">
                                                    <li ><a href="{{route('auth.logout')}}">تسجيل الخروج</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                            @endauth

                            <li class="mobile-menu-bar d-block d-xl-none">
                                <button class="hamberger-button">
                                    <i class="icon-54"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="icon-73"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="content-wrap">
                <div class="site-logo">
                    <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                </div>
                <div class="close-button">
                    <button class="close-trigger"><i class="icon-73"></i></button>
                </div>
                <div class="inner">
                    <form class="search-form" action="#">
                        <button class="submit-button"><i class="icon-2"></i></button>
                        <input type="text" class="edublink-search-popup-field" placeholder="ابحث هنا...">
                    </form>
                </div>
            </div>
        </div>
        <!-- End Search Popup  -->
    </header>
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->


    <div class="edu-breadcrumb-area breadcrumb-style-3">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="edu-breadcrumb">

                    <li class="breadcrumb-item"><a href="%c3%98%c2%af%c3%99%c2%88%c3%98%c2%b1%c3%98%c2%a9%20%c3%99%c2%88%c3%98%c2%a7%c3%98%c2%ad%c3%98%c2%af%c3%98%c2%a9.html">الدورات</a></li>
                    <li class="separator"><i class="icon-angle-left"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">تفاصيل الدورة</li>
                </ul>
                <div class="page-title">
                    <h1 class="title">{{$courses->name}}</h1>
                </div>

            </div>
        </div>

        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="{{asset('lms/assets/images/about/shape-15.png')}}" alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="{{asset('lms/assets/images/about/shape-07.png')}}" alt="shape"></li>
        </ul>
    </div>
    @if (session('flash_message'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        </div>
    @endif
    <!--=====================================-->
    <!--=     Courses Details Area Start    =-->
    <!--=====================================-->
    <section class="edu-section-gap course-details-area">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="course-details-content course-details-2">
                        <div class="course-overview">
                            <h3 class="heading-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">حول هذه الدورة</h3>
                            <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{!! $courses->description !!}</p>
                            <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"></p>



                        </div>


                        <div class="course-curriculam mb--90">
                            <div class="accordion edu-accordion" id="accordionExample" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                                @foreach($courses->sections as $index => $section)
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading{{$index}}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}"  aria-expanded="true" aria-controls="collapse{{$index}}">
                                                {{$section->name}}
                                            </button>
                                        </h3>
                                        <div id="collapse{{$index}}" class="accordion-collapse collapse" aria-labelledby="heading{{$index}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @if ($enroll == true && Auth::user())
                                                    <div class="course-lesson">
                                                        <ul>
                                                            @foreach($section->videos as $video)
                                                                <li>
                                                                    <div class="text"><i class="icon-65"></i> {{$video->name}}</div>
                                                                    <div class="icon">
                                                                        <i class="icon-68"></i>
                                                                        <a href="{{asset('videos/'.$video->url)}}" class="btn btn-outline-danger popup-modal" data-mfp-type="iframe">Watch</a>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @else
                                                    <p>يجب الاشتراك في الكورس اولا</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-sidebar-3">
                        <div class="edu-course-widget widget-course-summery">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{asset('/courses/'.$courses->photo)}}" alt="Courses">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">الدورة تشمل: </h4>
                                    <ul class="course-item">
                                        <li>
                                            <span class="label"><i class="icon-60"></i>:الباقه الاولي: حضور في المقر</span>
                                            <span class="value price">{{$courses->price_offline}}$</span>
                                        </li>
                                        <li>
                                            <span class="label"><i class="icon-60"></i>:الباقه الثانيه : حضور اونلاين</span>
                                            <span class="value price">{{$courses->price_online}}$</span>
                                        </li>
                                        <li>
                                            <span class="label"><i class="icon-60"></i>:الباقه الثالثه : حضور علي المنصه</span>
                                            <span class="value price">{{$courses->price}}$</span>
                                        </li>



                                        <li>
                                            <span class="label"><i class="icon-64"></i>شهادة:</span>
                                            <span class="value">نعم</span>
                                        </li>
                                    </ul>
                                    <div class="read-more-btn">
                                        @if ($enroll == true && Auth::user())
                                            <a class="edu-btn">تم الاشتراك   <i class="icon-west"></i></a>
                                        @else
                                            <a href="{{$courses->payment_link_offline}}" class="edu-btn">اشترك في الباقه الاولي  <i class="icon-west"></i></a>
                                            <a href="{{$courses->payment_link_online}}" class="edu-btn">اشترك في الباقه الثانيه <i class="icon-west"></i></a>
                                            <a href="{{$courses->payment_link_price}}" class="edu-btn">اشترك في الباقه الثالثه <i class="icon-west"></i></a>
                                        @endif



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="course-review sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <br>
                    <br>
                    <br>

                    <h3 class="heading-title">تقيمات الطلاب</h3>
                    <br>
                    <div class="border-box">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-4">

                            </div>

                        </div>
                        <!-- Start Comment Area  -->
                        <div class="comment-area">
                            <div class="comment-list-wrapper">
                                <!-- Start Single Comment  -->

                                @if ($courses->reviews->count() > 0)
                                    @foreach ($courses->reviews->sortByDesc('created_at')->take(4) as $review)
                                        <div class="comment">
                                            <div class="comment-content">
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $review->value)
                                                            <i class="icon-23"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <h5 class="title">{{ $review->user->name }}</h5>
                                                <span class="date">{{ $review->created_at}}</span>
                                                <p>{{ $review->body }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>      لا توجد تقيمات</p>
                                @endif

                                <!-- End Single Comment  -->
                            </div>
                        </div>
                        <!-- End Comment Area  -->
                    </div>
                    <br>
                    <h2>ارسل لنا تقيمك</h2>
                    <form method="POST" action="{{ route('reviews.store') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $courses->id }}">
                <div>
                    <label for="body">تعليقك</label>
                    <textarea name="body" id="body" required>{{ old('body') }}</textarea>
                    @error('body')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div >
                    <label for="value">التقيم</label>
                    <select  name="value" id="value" required>
                        <option value="" disabled selected>اختر تقيمك</option>
                        <option value="1" {{ old('value') == 1 ? 'selected' : '' }}> سئ </option>
                        <option value="2" {{ old('value') == 2 ? 'selected' : '' }}>مقبول</option>
                        <option value="3" {{ old('value') == 3 ? 'selected' : '' }}>جيد </option>
                        <option value="4" {{ old('value') == 4 ? 'selected' : '' }}>جيد جدا</option>
                        <option value="5" {{ old('value') == 5 ? 'selected' : '' }}>ممتاز   </option>
                    </select>
                    @error('value')
                    <div>{{ $message }}</div>
                    @enderror
                </div>



                <div>
                    <br>
                    <br>



                    <button type="submit" class="edu-btn">تقيم <i class="icon-west"></i></button>

                </div>
                </form>



            </div>

        </div>
</div>


</section>
<!--=====================================-->
<!--=        Footer Area Start          =-->
<!--=====================================-->
<!-- Start Footer Area  -->
<footer class="edu-footer footer-lighten bg-image footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="edu-footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                        <p class="description">شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي. وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة.</p>
                        <div class="widget-information">
                            <ul class="information-list">
                                <li><span>مكالمة: </span><a href="tel:00971544022482"> +971544022482 </a></li>
                                <li><span>البريد: </span><a href="mailto:contact@anaengineer.com">contact@anaengineer.com</a></li>
                                <li><span>للتعاون التجاري: </span><a href="mailto:marketing@anaengineer.com">marketing@anaengineer.com</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-footer-widget explore-widget">
                        <h4 class="widget-title">معلومات عنا</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="privacy-policy.html">سياسه الخصوصيه</a></li>
                                <li><a href="TermsandConditions.html">الشروط والاحكام</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="edu-footer-widget quick-link-widget">
                        <h4 class="widget-title">خدمات</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="{{route('home_elms')}}">الدورات</a></li>
                                <li><a href="{{route('social.home')}}">التواصل الاجتماعي </a></li>
                                <li><a href="{{route('all.magazines')}}">المجله</a></li>
                                <li><a href="{{route('all.artical')}}">المقالات</a></li>
                                <li><a href="#">تواصل معنا </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="edu-footer-widget">
                        <h4 class="widget-title">جهات الاتصال</h4>
                        <div class="inner">
                            <p class="description">أدخل عنوان بريدك الإلكتروني للتسجيل في الاشتراك في النشرة الإخبارية</p>
                            <div class="input-group footer-subscription-form">
                                <input type="email" class="form-control" placeholder="بريدك الالكتروني">
                                <button class="edu-btn btn-medium" type="button"><i class="icon-west"></i> الإشتراك</button>
                            </div>
                            <ul class="social-share icon-transparent">
                                <li><a href="https://www.facebook.com/ana.muhands" class="color-fb"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/anaengineer/?originalSubdomain=ae" class="color-linkd"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="https://www.instagram.com/ana_muhands17/" class="color-ig"><i class="icon-instagram"></i></a></li>
                                <li><a href="https://twitter.com/ana_muhands17" class="color-twitter"><i class="icon-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCkIC9ANdmaSh8BiSQ7GU8vg" class="color-yt"><i class="icon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>حقوق الطبع والنشر ٢٠٢٢ <a >anaengineer</a> صمم بواسطة <a> anaengineer </a>. كل الحقوق محفوظة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area  -->


</div>

<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script>
    $(document).ready(function() {
        $('#headerVideoLink').magnificPopup({
            type:'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
    });

</script>
<script src="{{asset('lms/assets/js/vendor/modernizr.min.js')}}"></script>
<!-- Jquery Js -->
<script src="{{asset('lms/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/sal.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/backtotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/magnifypopup.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/odometer.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/imageloaded.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/svg-inject.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/vivus.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/tipped.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isInViewport.jquery.min.js')}}"></script>


<!-- Site Scripts -->
<script src="{{asset('lms/assets/js/app.js')}}"></script>
</body>


</html>
