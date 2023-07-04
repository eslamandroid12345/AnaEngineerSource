<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مدونه منصه انا مهندس</title>
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

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css?ver=0.0.0.10')}}">

    <style>

        .test{
            font-size: 13px;
            color : #c3c3c3
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
                    <h1 class="title"> الهندسات</h1>
                </div>
                <ul class="edu-breadcrumb">

                </ul>
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

    <!--=====================================-->
    <!--=        Blog Area Start            =-->
    <!--=====================================-->
    <section class="section-gap-equal">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    @foreach($articles as $article)
                        <div class="edu-blog blog-style-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('show.artical',$article->slug)}}">
                                        <img src="{{ asset('articles/'.$article->img)}}" alt="Blog Images"  >
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{route('show.artical',$article->slug)}}">{{$article->title}}</a></h5>
                                    <ul class="blog-meta">
                                        <li>{{ strftime('%Y-%m-%d', strtotime($article->created_at)) }}<i class="icon-27"></i></li>
                                    </ul>
                                    {{--                                <p>{!! Str::limit($article->min_description,250) !!}</p>--}}
                                    <h5 class="test">{{$article->min_description}}</h5>

                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-border btn-medium" href="{{route('show.artical',$article->slug)}}">اطلاع <i class="icon-west"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                        <ul class="edu-pagination top-space-30 justify-content-start">
                            @if ($articles->lastPage() >= 1)
                                <li class="{{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a href="{{ $articles->withQueryString()->previousPageUrl() }}" aria-label="Previous">
                                        <i class="icon-east"></i>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                                    <li class="{{ ($articles->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $articles->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="{{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
                                    <a href="{{ $articles->nextPageUrl() }}" aria-label="Next">
                                        <i class="icon-west"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>




                </div>
                <div class="col-lg-4">
                    <div class="edu-blog-sidebar">
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-search">
                            <div class="inner">
                                <h4 class="widget-title">بحث</h4>
                                <div class="content">
                                    <form method="GET" action="{{ route('category_search') }}">
                                        <div class="input-group mb-3">
                                            <input
                                                type="text"
                                                name="search"
                                                value="{{ request()->get('search') }}"
                                                class="form-control"
                                                placeholder="ابحث.."
                                                aria-label="بحث"
                                                aria-describedby="button-addon2">
                                                <input type="hidden"
                                                name="category"
                                                value="{{ request()->get('category') }}" />
                                            <button class="btn btn-success" type="submit" id="button-addon2">ابحث</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-latest-post">
                            <div class="inner">
                                <h4 class="widget-title">احدث الاخبار</h4>
                                <div class="content latest-post-list">
                                    @foreach($lastArticles as $lastArticle)
                                        <div class="latest-post">
                                        <div class="post-content">
                                                <h6 class="title"><a href="{{route('show.artical',$lastArticle->slug)}}">{{$lastArticle->title}}</a></h6>

                                            </div>
                                            <div class="thumbnail">
                                                <a href="{{route('show.artical',$lastArticle->slug)}}">
                                                    <img src="{{ asset('/articles/' . $lastArticle->img) }}" alt="Blog Images" width="90" height="90">
                                                </a>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-categories">
                            <div class="inner">
                                <h4 class="widget-title">فئات</h4>
                                <div class="content">
                                    <ul class="category-list">
                                        @foreach($categories as $category)
                                            <li><a href="{{route('articles.index',['category' => $category->id])}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <div class="edu-blog-widget widget-action">
                            <div class="inner">
                                <h4 class="title">احصل على دورات عبر الإنترنت من <span>انا مهندس</span></h4>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>تساعدك على الالتحاق بسوق العمل بكل احترافية</p>
                                <a href="{{route('allcourses')}}" class="edu-btn btn-medium">ابدأ الآن <i class="icon-west"></i></a>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->

                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
                        <!-- End Single Widget  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        CTA  Area Start            =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="edu-cta-banner-area home-one-cta-wrapper bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title">من خلال انا مهندس <span class="color-secondary">شهادة</span> احصل على مهارات الجودة الخاصة بك</h2>
                            <a href="{{route('allcourses')}}" class="edu-btn"> ابدأ الآن <i class="icon-west"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-01 scene">
                        <img data-depth="2.5" src="{{asset('lms/assets/images/cta/shape-10.png')}}" alt="shape">
                    </li>
                    <li class="shape-02 scene">
                        <img data-depth="-2.5" src="{{asset('lms/assets/images/cta/shape-09.png')}}" alt="shape">
                    </li>
                    <li class="shape-03 scene">
                        <img data-depth="-2" src="{{asset('lms/assets/images/cta/shape-08.png')}}" alt="shape">
                    </li>
                    <li class="shape-04 scene">
                        <img data-depth="2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
    <!--=====================================-->
    <!--=        Footer Area Start          =-->
    <!--=====================================-->
    <!-- Start Footer Area  -->
    @include('Front.layout.Footer')
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
<script src="{{asset('lms/assets/js/mobile.js')}}"></script>

</body>


<!-- Mirrored from edublink.html.rtl.devsblink.com/index-modern-schooling.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 02:18:39 GMT -->
</html>
