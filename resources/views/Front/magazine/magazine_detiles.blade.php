<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مجلة منصه انا مهندس</title>
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
    <style>
        .body-blackout {
            position: absolute;
            z-index: 1010;
            left: 0;
            top: 0;
            width: 100%;
            height: 800vh;
            background-color: rgba(0, 0, 0, 0.65);
            display: none;
            overflow: hidden;
        }

        .body-blackout.is-blacked-out {
            display: block;
        }

        .popup-trigger {
            display: inline-block;
        }

        .popup-modal {
            height: auto;
            width: 500px;
            background-color: #fff;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            opacity: 0;
            pointer-events: none;
            transition: all 300ms ease-in-out;
            z-index: 9999999;
            justify-content: center;
            text-align: center;
            border-radius: 6px;
            border: 5px solid #23B694;
            pointer-events: auto;


        }



        .popup-modal.is--visible {
            opacity: 1;
            pointer-events: auto;
        }

        .popup-modal__close {
            position: absolute;
            font-size: 1.2rem;
            right: -20px;
            top: -20px;
            cursor: pointer;
            background-color: #23B694;
            border-radius: 3px;
            width: 40px;
            height: 45px;
        }
        .popup-modal__close::after{
            content: "X";
            font-weight: 800;
            font-size: 20px;

        }
        .popup-modal img {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }

        .popup-modal h1 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .popup-modal h2 {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .popup-modal p {
            margin: 0;
        }
        .countdownn{
            color: #23B694;
            font-weight: bold;
        }
        .popup-modal button {
            color: #fff;
            background-color: #23B694;
            border: 0;
            border-radius: 6px;
            padding: 5px 10px;
            transition: .5s;
            font-weight: bold;
        }
        .popup-modal button:hover{
            background-color: #0d8d2d;

        }

        @media screen and (max-width: 558px){

            .popup-modal{
                width: 80%;
            }


            .popup-modal h1 {
                font-size: 15px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .popup-modal h2 {
                font-size: 12px;
                font-weight: 500;
                margin-bottom: 20px;
            }

        }
    </style>


</head>

<body class="sticky-header">
<div class="body-blackout"></div>

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
                            <h3 class="title">{{$magazine->title}}</h3>
                            <ul class="blog-meta">
                            </ul>
                            <div class="thumbnail">
                                <img src="{{ asset('magazine/' . $magazine->photo) }}" alt="Blog Image">
                            </div>
                        </div>
                        <div>
                            {!! $magazine->description !!}
                        </div>
                        <iframe src="{{$magazine->link}}" style="height:500px; width:750px; border:none;" title="Iframe Example"></iframe>

                        <div class="blog-share-area">
                            <div class="row align-items-center">

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
                                @if($previous)
                                    <div class="blog-pagination-list prev-post">
                                        <a href="{{route('show.magazines',$previous->slug)}}">
                                            <i class="icon-east"></i>
                                            <span>{{$previous->title}}</span>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                @if($next)
                                    <div class="blog-pagination-list next-post">
                                        <a href="{{route('show.magazines',$next->slug)}}">
                                            <span>{{$next->title}}</span>
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
                                    @foreach($lastMagazines as $lastMagazine)
                                        <div class="latest-post">
                                        <div class="post-content">
                                                <h6 class="title"><a href="{{route('show.magazines',$lastMagazine->slug)}}">{{$lastMagazine->title}}</a></h6>

                                            </div>
                                            <div class="thumbnail">
                                                <a href="{{route('show.magazines',$lastMagazine->slug)}}">
                                                    <img src="{{ asset('magazine/' . $lastMagazine->photo) }}" alt="Blog Images" width="90" height="90">
                                                </a>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget  -->
                        <!-- Start Single Widget  -->
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


<div
    class="popup-modal shadow"
    data-popup-modal="artical">
    <i class="fas fa-2x fa-times text-white   p-3 popup-modal__close"></i>
    <img src="{{asset('assets_c/images/alert.jfif')}}" alt="">
    <h1>للأسف, يرجي الاشتراك بالدوره</h1>
    <h2>يمكنك الاشتراك من هنا للحصول علي كل محتوي الدوره</h2>
    <button>اشترك الان</button>
    <p>هذه النافذه سوف تختفي خلال  <span class="countdownn"></span> ثواني</p>

</div>

<!-- Modernizer JS -->
<script src="{{asset('lms/assets/js/vendor/modernizr.min.js')}}"></script>
<script>
    const modalTriggers = document.querySelectorAll('.popup-trigger')
    const modalCloseTrigger = document.querySelector('.popup-modal__close')
    const bodyBlackout = document.querySelector('.body-blackout')


    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const { popupTrigger } = trigger.dataset
            const popupModal = document.querySelector(`[data-popup-modal="${popupTrigger}"]`)
            const countdownElement = popupModal.querySelector('.countdownn')

            popupModal.classList.add('is--visible')
            bodyBlackout.classList.add('is-blacked-out')

            let secondsLeft = 10
            countdownElement.textContent = secondsLeft

            const countdownInterval = setInterval(() => {
                secondsLeft--
                countdownElement.textContent = secondsLeft

                if (secondsLeft === 0) {
                    clearInterval(countdownInterval)
                    popupModal.classList.remove('is--visible')
                    bodyBlackout.classList.remove('is-blacked-out')
                }
            }, 1000)

            popupModal.querySelector('.popup-modal__close').addEventListener('click', () => {
                clearInterval(countdownInterval)
                popupModal.classList.remove('is--visible')
                bodyBlackout.classList.remove('is-blacked-out')
            })

            bodyBlackout.addEventListener('click', () => {
                clearInterval(countdownInterval)
                popupModal.classList.remove('is--visible')
                bodyBlackout.classList.remove('is-blacked-out')
            })
        })
    });
</script>

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
