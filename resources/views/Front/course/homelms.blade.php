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
    <link rel="stylesheet" href="{{asset('lms/assets/css/app.css?ver=0.0.0.7')}}">

    <style>
        .course-meta li {
            margin-right: 22px !important;
        }
        .edu-course .thumbnail a:after {
            background: none !important;

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
    <!--=       Hero Banner Area Start      =-->
    <!--=====================================-->
    <div class="hero-banner hero-style-8">
        <div class="container edublink-animated-shape">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">ابحث عن أفضل ما لديك <br> دورات ل <span class="color-secondary">تطوير </span> <br> مهاراتك في مجال الهندسه</h1>
                        <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">لكن عزيزي الراغب في تعلم ودراسه مجال الهندسه ف انت ب الطبع في الطريق الصعب نحن معك لنسهل لك هذا الطريق</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                            <img src="{{asset('lms/assets/images/banner/home8-rtl-vactor-bg.png')}}" alt="vactor Image">
                        </div>
                        <div class="instructor-info" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
                            <div class="inner">
                                <h5 class="title">مهندس</h5>
                                <div class="media">
                                    <div class="thumb">
                                        <img src="{{asset('lms/assets/images/banner/author-1.png')}}" alt="Images">
                                    </div>
                                    <div class="content">
                                        <span>٠٠٢+</span> مهندس
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="1.5" src="{{asset('lms/assets/images/others/shape-30.png')}}" alt="Shape">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="2" src="{{asset('lms/assets/images/others/shape-31.png')}}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-light" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{asset('lms/assets/images/faq/shape-09.png')}}" alt="Shape">
                            </li>
                            <li class="shape-3 scene shape-dark" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{asset('lms/assets/images/faq/dark-shape-09.png')}}" alt="Shape">
                            </li>
                            <li class="shape-4 scene shape-light" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{asset('lms/assets/images/faq/shape-13.png')}}" alt="Shape">
                            </li>
                            <li class="shape-4 scene shape-dark" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                                <img data-depth="-2" src="{{asset('lms/assets/images/faq/dark-shape-13.png')}}" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <span></span>
                </li>
                <li class="shape-6 scene" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="1.2" src="{{asset('lms/assets/images/others/shape-32-rtl.png')}}" alt="Shape">
                </li>
            </ul>
        </div>
    </div>

    <!--=====================================-->
    <!--=       Categories Area Start      =-->
    <!--=====================================-->
    <!-- Start Categories Area  -->
    <div class="edu-categorie-area categorie-area-4 edu-section-gap">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">أعلى الفئات</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
                <p>دعنا نعرض لك الفئات المتاحه للتعلم لدينا</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4 color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            {{--                                <a href="#">--}}
                            <h5 class="title">الهندسه المدينه</h5>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4  color-extra01-style">
                        <div class="icon">
                            <i class="icon-11 personal-development"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">الهندسه الطبيه </h5>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4 color-extra03-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">الهندسه الكهربائيه
                                </h5>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4  color-extra04-style">
                        <div class="icon">
                            <i class="icon-15"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">الهندسه الميكانيكية
                                </h5>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4  color-extra05-style">
                        <div class="icon">
                            <i class="icon-16 computer-science"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">الهندسه المعماريه
                                </h5>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-4  color-extra06-style">
                        <div class="icon">
                            <i class="icon-17 video-photography"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">فيديو وتصوير</h5>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories Area  -->
    <!--=====================================-->
    <!--=       Course Area Start      		=-->
    <!--=====================================-->

    <div class="home-eight-course edu-course-area course-area-8 gap-tb-text bg-image">
        <div class="container edublink-animated-shape">
            <ul>
                <li>
                    <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">الدورات الاكثر طلبا</span>
                        <h2 class="title">لكن لا بد من اختيار دورة لتبدا رحله التعلم</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                </li>
                <li>
                    <div class="course-view-all" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                        <a href="{{route('allcourses')}}" class="edu-btn">تصفح المزيد من الدورات <i class="icon-west"></i></a>
                    </div>
                </li>
            </ul>

            <div class="row g-5">
                <!-- Start Single Course  -->
                @foreach($allCourses as $allCourse)
                    <div class="col-xl-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-4">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('show.course',$allCourse->slug)}}">
                                        <img style="width: 200px;height: 200px" src="{{asset('courses/'.$allCourse->photo)}}" alt="Courses">
                                    </a>
                                    {{--                                    <div class="time-top">--}}
                                    {{--                                        <span class="duration"><i class="icon-61"></i> ٤ أسابيع</span>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="content">
                                    <div class="course-price">{{$allCourse->price}}$</div>
                                    <h6 class="title">
                                        <a href="{{route('show.course',$allCourse->slug)}}">{{$allCourse->name}}</a>
                                    </h6>
                                    <div class="course-rating">
                                        <div class="rating">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <span class="rating-count">( 8/ 9.4 تقييم)</span>
                                    </div>
                                    <ul class="course-meta">
                                        <li><i class="icon-21"></i> 12 الدروس</li>
                                        <li><i class="icon-25"></i> 29 الطلاب</li>
                                        <li><i class="icon-24"></i> 6 أسابيع</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                @endforeach

            </div>
            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="Shape">
                </li>
                <li class="shape-2">
                    <span></span>
                </li>
                <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-2" src="{{asset('lms/assets/images/about/shape-13.png')}}" alt="Shape">
                </li>
                <li class="shape-4 sal-animate" data-sal-delay="1000" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="-1" src="{{asset('lms/assets/images/counterup/shape-02.png')}}" alt="Shape">
                </li>
            </ul>
        </div>
    </div>
    <!-- End Course Area -->
    {{--end ==============================================================================-------------------------------------------------------------}}



    <!--=====================================-->
    <!--=       FAQ Area Start      		=-->
    <!--=====================================-->
    <div class="edu-faq-area faq-style-5 section-gap-equal">
        <div class="container">
            <div class="row g-5 row--45">
                <div class="col-lg-6">
                    <div class="edu-faq-gallery">
                        <div class="faq-thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <img src="{{asset('lms/assets/images/others/faq-5.png')}}" alt="Faq Images">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{asset('lms/assets/images/faq/shape-35.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{asset('lms/assets/images/faq/shape-36.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-3">
                                <img src="{{asset('lms/assets/images/faq/shape-rtl-34.png')}}" alt="Shape Images">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-faq-content">
                        <div class="section-title section-left">
                            <span class="pre-title">الأسئلة الشائعة</span>
                            <h2 class="title"> تطوير <span class="color-secondary">بعيد <br> مهارة</span>  أكثر من ١٠ سنوات في الهندسه
                            </h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                        </div>
                        <div class="faq-accordion" id="faq-accordion">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                            كيف يمكنني الاتصال ب منصه انا مهندس مباشرة؟
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>نوفر لك خدمات الاتصال ب منصه انا مهندس عن طريق الضغط علي زر الدردشه اسفل الصفحه وبدء المحادثه مع احد ممثلي خدمات العملاء</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                            ماذا عن خصوصية معلوماتي؟                                            </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>نحن نستخدم منصة Stripe للدفع الإلكتروني وهي منصة عالمية تستخدمها مواقع ومنصات حول العالم. يتم تخزين معلومات بطاقتك ونقلها ومعالجتها بشكل متوافق بالكامل مع معايير PCI. تتم معالجة كل معاملة بنفس مستوى التشفير الآمن عالي المستوى المستخدم في المؤسسات المصرفية. نحن لا نخزن معلومات بطاقة الائتمان الخاصة بك ولا تمر أرقام بطاقات الائتمان الخاصة بك عبر خوادمنا.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                            ما مستوى جودة التعليم في شركة أنا مهندس؟
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>تُعد منصة أنا مهندس التابعة لشركة أنا مهندس واحدة من أفضل منصات التعليم الإلكترونية المعنية بتدريب المهندسين العرب وتأهيلهم للدخول لسوق العمل بإختلاف مجالاتهم وثقافاتهم من المحيط إلى الخليج وهي مؤسسة تعليمية معتمدة من قبل هيئة المعرفة والتنمية البشرية KHDA في حكومة دبي في الإمارات العربية المتحدة برقم تصريح (630572) Ana Muhands for Professional & Management Development Training</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene shape-light" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="1.5" src="{{asset('lms/assets/images/about/shape-02.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span data-depth="-2.2"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       CounterUp Area Start      	=-->
    <!--=====================================-->
    <div class="counterup-area-3 gap-bottom-equal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-3">
                        <h2 class="counter-item count-number primary-color">
                            <span>1000</span><span></span>
                        </h2>
                        <h6 class="title">التحق الطالب</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-3">
                        <h2 class="counter-item count-number secondary-color">
                            <span>4000</span>
                        </h2>
                        <h6 class="title">اكتمل الفصل</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-3">
                        <h2 class="counter-item count-number extra02-color">
                            <span>98</span><span>%</span>
                        </h2>
                        <h6 class="title">معدل الرضا</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-counterup counterup-style-3 border-none">
                        <h2 class="counter-item count-number extra05-color">
                            <span>50</span><span>+</span>
                        </h2>
                        <h6 class="title">كبار المدربين</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Testimonial Area Start      =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->

    <!-- End Testimonial Area  -->
    <!--=====================================-->
    <!--=       CTA Banner Area Start      =-->
    <!--=====================================-->
    <!-- Start Ad Banner Area  -->
    <div class="modern-schooling-cta-wrapper edu-cta-banner-area-6 bg-image">
        <div class="container">
            <div class="edu-cta-banner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="{{asset('lms/assets/images/cta/cta-girl-bg.png')}}" alt="girl image">
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene">
                                <img data-depth="2.5" src="{{asset('lms/assets/images/cta/shape-43.png')}}" alt="shape">
                            </li>
                            <li class="shape-02">
                                <img src="{{asset('lms/assets/images/cta/shape-42.png')}}" alt="shape">
                            </li>
                            <li class="shape-03 scene">
                                <img data-depth="-2" src="{{asset('lms/assets/images/cta/shape-40.png')}}" alt="shape">
                            </li>
                            <li class="shape-04 scene">
                                <img data-depth="2" src="{{asset('lms/assets/images/cta/shape-38.png')}}" alt="shape">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title">احصل على الجودة <br> شهادة المهارات من خلال <br> انا مهندس</h2>
                            <a href="{{route('allcourses')}}" class="edu-btn btn-secondary">نبدأ الآن <i class="icon-west"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-05 scene">
                        <img data-depth="2.5" src="{{asset('lms/assets/images/cta/shape-39.png')}}" alt="shape">
                    </li>
                    <li class="shape-06">
                        <img src="{{asset('lms/assets/images/cta/cta-round-rtl.svg')}}" alt="shape">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Ad Banner Area  -->
    <!--=====================================-->
    <!--=      		Blog Area Start   		=-->
    <!--=====================================-->
    <!-- Start Blog Area  -->
    <div class="edu-blog-area blog-area-6 bg-image section-gap-equal">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">أحدث المقالات</span>
                <h2 class="title">احصل على أخبار مع انا مهندس</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Blog Grid  -->
                @foreach($allArticles as $allArticle)
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-6">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('show.artical',$allArticle->slug)}}">
                                        <img src="{{ asset('articles/'.$allArticle->img)}}" alt="Blog Images" style="
                                      ">
                                    </a>
                                    <span class="date">{{ strftime('%Y-%m-%d', strtotime($allArticle->created_at)) }}</span>
                                </div>
                                <div class="content position-top">
                                    <div class="read-more-btn">
                                        <a class="btn-icon-round" href="{{route('show.artical',$allArticle->slug)}}"><i class="icon-west"></i></a>
                                    </div>

                                    <h5 class="title"><a href="{{route('show.artical',$allArticle->slug)}}">{{$allArticle->title}}</a></h5>
                                    <p>{{$allArticle->min_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Blog Grid  -->

            </div>
        </div>
    </div>
    <!-- End Blog Area  -->
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
