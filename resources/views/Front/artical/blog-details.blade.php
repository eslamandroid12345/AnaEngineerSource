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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lms/')}}assets/images/favicon.png">
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
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css?ver=0.0.0.7')}}">

</head>

<body class="sticky-header">

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


    <!--=====================================-->
    <!--=       Blog Details Area Start     =-->
    <!--=====================================-->
    <div class="blog-details-area section-gap-equal">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="entry-content">
                            <h3 class="title">{{$article->title}}</h3>
                            <ul class="blog-meta">
                            </ul>
                            <div class="thumbnail">
                                <img src="{{ asset('articles/' . $article->img) }}" alt="Blog Image" width="10" height="10">
                            </div>
                        </div>
                        <div>
                            {!! $article->description !!}
                        </div>

                        <div class="blog-share-area">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="blog-tags">
                                        <h6 class="title">العلامات:</h6>
                                        <div class="tag-list">
                                            <a href="#">{{$article->tag1}}</a>
                                            <a href="#">{{$article->tag2}}</a>
                                            <a href="#">{{$article->tag3}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="blog-share">
                                        <h6 class="title">مشاركه فى:</h6>
                                        <ul class="social-share icon-transparent">
                                            <li>
                                                <a href="#"><i class="icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-author">

                    </div>

                    <div class="blog-pagination">
                        <div class="row g-5">
                            <div class="col-lg-6">
                                @if($lastArticle)
                                <div class="blog-pagination-list prev-post">
                                    <a href="{{route('show.artical',$lastArticle->slug)}}">
                                        <i class="icon-east"></i>
                                        <span>{{$lastArticle->title}}</span>
                                    </a>
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                @if($nextArticle)
                                <div class="blog-pagination-list next-post">
                                    <a href="{{route('show.artical',$nextArticle->slug)}}">
                                        <span>{{$nextArticle->title}}</span>
                                        <i class="icon-west"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <!-- Start Comment Area  -->



                </div>
                <div class="col-lg-4">
                    <div class="edu-blog-sidebar">
                        <!-- Start Single Widget  -->

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
                                                    <img src="{{ asset('articles/' . $lastArticle->img) }}" alt="Blog Images" width="90" height="90">
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
                                            <li><a href="{{route('articles.index',['category' => $category->id])}}">{{$category->name}} </a></li>
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
    </div>
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
                            <h2 class="title">من خلال  <span class="color-secondary">شهادة انا مهندس</span> احصل على مهارات الجودة الخاصة بك</h2>
                            <a href="{{route('allcourses')}}" class="edu-btn"> شهادة نبدأ الآن <i class="icon-west"></i></a>
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
    <!--=        Footer Area Start       	=-->
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
<script src="{{asset('lms/assets/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/paralax.min.js')}}"></script>
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


</html>
