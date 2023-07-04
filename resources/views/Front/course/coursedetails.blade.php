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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_c/images/favicon.png')}}">
    <!-- CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/vendor/tipped.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Roboto&display=swap" rel="stylesheet">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets_c/css/app.css?ver=0.0.0.4')}}">
    <link rel="stylesheet" href="{{asset('assets_c/css/header.css')}}">
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
            display:none;
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
            display:block;
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


    <div class="edu-breadcrumb-area breadcrumb-style-3">
        <div class="container">
            <div class="breadcrumb-inner">

                <ul class="edu-breadcrumb">

                    <li class="breadcrumb-item"><a href="%c3%98%c2%af%c3%99%c2%88%c3%98%c2%b1%c3%98%c2%a9%20%c3%99%c2%88%c3%98%c2%a7%c3%98%c2%ad%c3%98%c2%af%c3%98%c2%a9.html">الدورات</a></li>
                    <li class="separator"><i class="icon-angle-left"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">تفاصيل الدورة</li>
                </ul>
                <div class="page-title">
                    <h1 class="title" >{{$courses->name}}</h1>
                </div>
                <ul class="course-meta">

                    <li class="course-rating">
                        <div class="rating">
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                            <i class="icon-23"></i>
                        </div>
                        <span class="rating-count">(27 تقييم)</span>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="shape-group" >
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
    @include('alerts')
    <section class="edu-section-gap course-details-area">
        <div class="container">
            <div class="row row--30">
                <div class="col-lg-8">
                    <div class="course-details-content course-details-2">
                        @if ($enroll == true && Auth::user())
                            <div class="videocont">
                                <div>
                                    <video autoplay id="mp4" preload="auto" class="video-player">
                                        <source id="sourc"  src="https://youtu.be/U8AFVAZliho" type="video/mp4" >

                                        <track kind="subtitles" src="https://www.omao.noaa.gov/sites/default/files/vtt/big-buck-bunny.vtt">
                                    </video>
                                </div>
                            </div>

                        @else
                            <div class="videocont">
                                <div>
                                    <video autoplay preload="auto" class="video-player">
                                        <source  src="blob:https://www.youtube.com/fdf49044-5897-4bc0-b876-e21f3a100e4d" type="video/mp4">
                                        <track kind="subtitles" src="https://www.omao.noaa.gov/sites/default/files/vtt/big-buck-bunny.vtt">
                                    </video>
                                </div>
                            </div>
                        @endif

                        <div class="course-overview">
                            <h3 class="heading-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">حول هذه الدورة</h3>


                            <p data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{!! $courses->description !!}</p>
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
                                                <div class="course-lesson">
                                                    <ul>
                                                        @foreach($section->videos as $video)
                                                            @if ($enroll == true && Auth::user())
                                                                <li  id="open-video">
                                                                    <div class="text">
                                                                        <input type="hidden" value="{{asset('videos/'.$video->url)}}" id="link-opened">
                                                                        <i class="icon-18"></i>
                                                                        {{$video->name}}
                                                                    </div>
                                                                    <div class="icon">
                                                                        <i class="icon-4"></i>
                                                                    </div>

                                                                </li>

                                                            @else
                                                                <li data-popup-trigger="artical" class="popup-trigger">
                                                                    <div class="text">
                                                                        <input type="hidden" value="{{asset('videos/'.$video->url)}}" id="link-opened">
                                                                        <i class="icon-65"></i>
                                                                        {{$video->name}}
                                                                    </div>
                                                                    <div class="icon">
                                                                        <i class="icon-68"></i>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>
                        <div class="course-review" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h3 class="heading-title">ملاحظات الطلاب</h3>
                            <p>5.00 تصنيف متوسط ​​على أساس 7 تصنيف</p>
                            <div class="border-box">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-4">
                                        <div class="rating-box">
                                            <div class="rating-number">5.0</div>
                                            <div class="rating">
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                                <i class="icon-23"></i>
                                            </div>
                                            <span>(7 إعادة النظر)</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="review-wrapper">

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    5 <i class="icon-23"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value"></span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-23"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">٠</span>
                                            </div>



                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-23"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">٠</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-23"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">٠</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    4 <i class="icon-23"></i>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="rating-value">٠</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <!-- Start Comment Area  -->
                                <div class="comment-area">
                                    <div class="comment-list-wrapper">
                                        <!-- Start Single Comment  -->

                                        @if ($courses->reviews->count() > 0)
                                            @foreach ($courses->reviews->sortByDesc('created_at')->take(4) as $review)
                                                <div class="comment">
                                                    <div class="thumbnail">
                                                        <img src="{{asset('profile_photo/'.$review->user->image)}}">
                                                    </div>
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
                        </div>
                    </div>

                    <form method="POST" action="{{ route('reviews.store') }}">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $courses->id }}">
                        <div>
                            <label for="body">تعليقك</label>
                            <textarea style="border: 1px solid #ccc" name="body" id="body" required>{{ old('body') }}</textarea>
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


                <div class="col-lg-4">
                    <div class="course-sidebar-3">
                        <div class="edu-course-widget widget-course-summery">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{asset('assets_c/images/course/course-46.jpg')}}" alt="Courses">
                                    <a href="https://youtu.be/U8AFVAZliho" class="play-btn video-popup-activation"><i class="icon-18"></i></a>
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
                                    <div class="share-area">
                                        <h4 class="title">مشاركه فى:</h4>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edu-blog-widget widget-categories">
                            <div class="inner">
                                <h4 class="widget-title">فئات الدورة</h4>
                                <div class="content">
                                    <ul class="category-list">
                                        @foreach($courses->sections as $section)
                                            <li>{{$section->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
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
<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('assets_c/js/vendor/modernizr.min.js')}}"></script>
<!-- Jquery Js -->
<script src="{{asset('assets_c/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/sal.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/backtotop.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/magnifypopup.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/odometer.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/isotop.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/imageloaded.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/lightbox.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/paralax.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/paralax-scroll.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/svg-inject.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/vivus.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/tipped.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{asset('assets_c/js/vendor/isInViewport.jquery.min.js')}}"></script>

<!-- Site Scripts -->
<script src="{{asset('assets_c/js/app.js')}}"></script>
<script src="{{asset('assets_c/js/script.js')}}"></script>
<script>

    $(".open-video").click(function(e){
        e.preventDefault();
        var id = $(this).data("id");
        var input =  $("#link-opened-"+id).val();
        // alert(input);
        document.getElementById('sourc').src = input;
        $('#mp4').load();
        $('html, body').animate({
            scrollTop: $('html, body').offset().top,
        });

    });
</script>




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
<script src="{{asset('lms/assets/js/mobile.js')}}"></script>

</body>


</html>
