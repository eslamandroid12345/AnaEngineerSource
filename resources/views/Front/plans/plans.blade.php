<!DOCTYPE html>
<html class="no-js " dir="rtl" lang="zxx" >


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>خطط اشتراكات منصه انا مهندس</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
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
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css?ver=0.0.0.1')}}">
    <style>
        .body-blackout {
            position: absolute;
            z-index: 1010;
            left: 0;
            top: 0;
            width: 100%;
            height: 800vh;
            background-color: rgba(0, 0, 0, 0.65);
            display: block;
            overflow: hidden;
        }

        .body-blackout.is-blacked-out {
            display: none;
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
            opacity: 1;
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
            opacity: 0;
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
                    <h1 class="title">خطط العضوية</h1>
                </div>
                <ul class="edu-breadcrumb">

{{--                    <li class="breadcrumb-item active" aria-current="page">التسعير</li>--}}
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
      <h3 class="Plantitle" style="font-size:17px; margin-right:20px; ">إحظى بتجربة إستخدام مميزة تتيح لك الوصول إلى أفضل محتوى هندسي عربي في العالم ينمي مواهبك ويجعلك على إطلاع على أخر لتطورات في عالم الهندسة ويمكنك من الإلتحاق بسوق العمل.</h3>
      <h3 style="font-size:15px; margin-right:20px; ">من خلال إشتراكك المدفوع 20% من قيمة المبلغ الذي تقوم بدفعه يذهب لبرنامج دعم الكفاءات العربية الهندسية </h3>
      <h3 style="font-size:15px; margin-right:20px; ">يمكنك إلغاء الإشتراك في أي وقت</h3>
   
   
      <!--=====================================-->
    <!--=        Event Area Start         =-->
    <!--=====================================-->
    <div class="edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">جدول التسعير</span>
                <h2 class="title">خطة عضوية رائعة</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                @foreach($plans as $plan)
                    <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h6 class="title">{{ $plan->name }}</h6>
                                <div class="price-wrap">
                                    <span class="amount">${{ $plan->price }}</span>
                                </div>
                            </div>
                            {!! $plan->description!!}

                            <div class="pricing-btn">
{{--                                <a class="edu-btn btn-border btn-medium" href="{{$plan->stripe_plan}}"> اختر خطة <i class="icon-west"></i></a>--}}
                                @if(!$palnUserSubscription)
                                <a class="edu-btn btn-border btn-medium" href="{{route('stripe.get',$plan->id)}}"> اختر خطة <i class="icon-west"></i></a>
                                @else
                                    <a class="edu-btn btn-border btn-medium" href=""> انت مشترك بالفعل <i class="icon-west"></i></a>

                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
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

{{--@if(session()->get('subscribe'))--}}

@if(!$palnUserSubscription)
    <div class="body-blackout"></div>
    <div
            class="popup-modal shadow"
            data-popup-modal="artical">
        <i class="fas fa-2x fa-times text-white   p-3 popup-modal__close"></i>
        <img src="{{asset('assets_c/images/alert.jfif')}}" alt="">
        <h1>للأسف, يرجي الاشتراك </h1>
        <h2>يمكنك الاشتراك من هنا لمشاهدة كل المحتوي</h2>

    </div>
    @endif

{{--@endif--}}
<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('assets/js/vendor/modernizr.min.js')}}"></script>
<!-- Jquery Js -->
<script src="{{asset('lms/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/sal.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/backtotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/odometer.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/magnifypopup.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/isotop.min.js')}}"></script>
<script src="{{asset('lms/assets/js/vendor/jquery.countdown.min.js')}}"></script>
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

<script>

    $('.popup-modal__close').click(function (){
        $('.shadow').hide();
        $('.body-blackout').hide();


    });
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
</body>


</html>
