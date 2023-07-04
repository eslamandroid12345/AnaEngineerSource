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
    <link rel="icon" type="image/x-icon" href="{{asset('lms/assets/images/favicon.png')}}">
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

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css?ver=0.0.0.3')}}">
    <style>

        @media (max-width: 767px) {
            /* Styles for screens with a maximum width of 767px, which corresponds to mobile devices */
            .header-mainmenu {
                flex-direction: column;
                align-items: stretch;
            }
            .header-category {
                order: 3;
                margin-top: 20px;
            }
            .header-mainnav {
                order: 2;
                margin-top: 20px;
            }
        }
    </style>


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
    @include('Front.layout.HeaderHome')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->


    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title"> الدورات </h1>
                </div>

            </div>
        </div>
        <ul class="shape-group">'
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

    <!--=====================================-->
    <!--=        Courses Area Start         =-->
    <!--=====================================-->
    <div class="edu-course-area course-area-1 section-gap-equal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="edu-course-sidebar">
                        <div class="edu-course-widget widget-category">
                            <div class="inner">
                                <h5 class="widget-title">تصفية حسب الفئات</h5>
                            </div>
                        </div>


                        <form id="price-sort-form" method="GET">
                            <div class="edu-course-widget widget-price">
                                <div class="inner">
                                    <h5 class="widget-title widget-toggle">Price</h5>
                                    <div class="content">
                                        <div class="edu-form-check">
                                            <input type="checkbox" name="price" id="price-check1" value="all" {{ request('price') == 'all' ? 'checked' : '' }}>
                                            <label for="price-check1">All prices</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" name="price" id="price-check2" value="free" {{ request('price') == 'free' ? 'checked' : '' }}>
                                            <label for="price-check2">Free</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" name="price" id="price-check3" value="low-to-high" {{ request('price') == 'low-to-high' ? 'checked' : '' }}>
                                            <label for="price-check3">Low to high</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" name="price" id="price-check4" value="high-to-low" {{ request('price') == 'high-to-low' ? 'checked' : '' }}>
                                            <label for="price-check4">High to low</label>
                                        </div>
                                        <div class="edu-form-check">
                                            <input type="checkbox" name="price" id="price-check5" value="paid" {{ request('price') == 'paid' ? 'checked' : '' }}>
                                            <label for="price-check5">Paid</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-9 col-pl--35">


                    <div class="edu-sorting-area">
                        <div class="sorting-left">
                            <h6 class="showing-text">وجدنا <span>{{count($courses)}}</span> الدورات المتاحة لك</h6>
                        </div>
                    </div>
                    @foreach($courses as $course)

                        <div class="edu-course course-style-4 course-style-8">

                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('show.course',$course->slug)}}">
                                        <img src="{{ asset('/courses/'.$course->photo)}}" alt="Blog Images" style="
                                        height: 200px;
                                        width : 250px">
                                    </a>

                                </div>
                                <div class="content">
                                    <h6 class="title">
                                        <a href="{{route('show.course',$course->slug)}}"> {{$course->name}}</a>
                                    </h6>

                                    <div class="course-price">{{$course->price}}$</div>

                                    <p>{!! Str::limit($course->min_description, 70) !!}</p>
                                    <div class="button-group">
                                        <a href="{{route('show.course',$course->slug)}}" class="edu-btn btn-medium"> الذهاب الي الكورس </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



            <ul class="edu-pagination ">
                @if ($courses->lastPage() >= 1)
                    <li class="{{ ($courses->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $courses->previousPageUrl() }}" aria-label="Previous">
                            <i class="icon-east"></i>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $courses->lastPage(); $i++)
                        <li class="{{ ($courses->currentPage() == $i) ? ' active' : '' }}">
                            <a href="{{ $courses->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="{{ ($courses->currentPage() == $courses->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $courses->nextPageUrl() }}" aria-label="Next">
                            <i class="icon-west"></i>
                        </a>
                    </li>
                @endif
            </ul>

        </div>
    </div>


    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
		============================================ -->
    <!-- Modernizer JS -->
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
    <script src="{{asset('lms/assets/js/mobile.js')}}"></script>

    <script src="{{asset('lms/assets/js/app.js')}}"></script>
    <script>
        // get the form element and all checkboxes
        const form = document.querySelector('#price-sort-form');
        const checkboxes = form.querySelectorAll('input[type=checkbox]');

        // listen for changes in any of the checkboxes
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // submit the form when a checkbox is changed
                form.submit();
            });
        });
    </script>

</body>


<!-- Mirrored from edublink.html.rtl.devsblink.com/index-modern-schooling.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 02:18:39 GMT -->
</html>
