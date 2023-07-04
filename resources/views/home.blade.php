<!DOCTYPE html>
<html lang="en">

<head>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92989991, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92989991" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>انا مهندس l منصة المهندس العربي</title>

    <!-- open links -->
    <!-- <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/all.min.css" /> -->


    <link rel="stylesheet" href="{{asset('css_o/engineer.css?ver=0.0.0.7')}}" />
    <link rel="stylesheet" href="{{asset('css_o/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css_o/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css_o/all.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- end Links -->
    <link rel="stylesheet" href="{{asset('css_o/swiper-bundle.min.css?ver=0.0.0.2')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <link rel="icon" type="imag/Logo.png" href="{{asset('images/MainLogo.png')}}" />
</head>

<body>
@if (Session::has('success'))
    <div class="alert alert-success text-center message-success">
        <span class="close" data-dismiss="alert" aria-label="close">×</span>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
<!-- Start Header -->
@include('Front.layout.HeaderHome')
<!-- End Header -->

<!-- Start  Section one -->

<div class="section-one-holder">
    <div class="text-area">
        <div class="textword">
            <h1>تـــخــــيّــــل  </h1>
            <section class="wrapper1">

                <h1>
                    المـسـتـقـبـل
                    <div class="orbit orbit-1"></div>
                    <div class="orbit orbit-2"></div>
                    <div class="orbit orbit-3"></div>
                    <div class="orbit orbit-4"></div>
                    <div class="orbit orbit-5"></div>
                    <div class="orbit orbit-6"></div>
                    <div class="orbit orbit-7"></div>
                    <div class="orbit orbit-8"></div>
                    <div class="orbit orbit-9"></div>
                    <div class="orbit orbit-10"></div>
                    <div class="orbit orbit-11"></div>
                    <div class="orbit orbit-12"></div>
                    <div class="orbit orbit-13"></div>
                    <div class="orbit orbit-14"></div>
                    <div class="orbit orbit-15"></div>
                    <div class="orbit orbit-16"></div>
                    <div class="orbit orbit-17"></div>
                    <div class="orbit orbit-18"></div>
                    <div class="orbit orbit-19"></div>
                    <div class="orbit orbit-20"></div>
                </h1>
            </section>
            <h1>الـآن</h1>
        </div>
        <p>تعلم الهندسة من البداية إلى المستوى المتقدم من خلال المسارات التعليمية،
            باشتراكات مدفوعة </p>
        <button><a href="{{route('plans_page')}}">اشترك الان</a></button>
    </div>
    <div class="media-area">
        <div class="main-img">
            <img src="{{asset('images/ENG1homepage1.png')}}" alt="">
            <div class="card-image">
                <img class="card-img" src="{{asset('images/Cardhomepage.png')}}" alt="">

            </div>
            <div class="icons">
                <img class="icon1" src="{{asset('images/icon1.png')}}" alt="">
                <img class="icon2" src="{{asset('images/dronee.png')}}" alt="">
                <img class="icon3" src="{{asset('images/icon3.png')}}" alt="">
            </div>
        </div>
    </div>
</div>





<!-- End  Section one -->
<div class="container">
    <div id="particles-js"></div>
    <!-- START  Section three -->



    <div class="newsec1">
        <p>الخدمات</p>
        <h2>نُقدم في منصة أنا مهندس خدمات هندسيةعالية المستوى، تشمل:</h2>
        <div class="colholderr">
            <div class="col">
                <img src="{{asset('images/ezgif-1-4722ccec39.png')}}" alt="">
                <h1>الـتـدريـب الـهـندسـي</h1>
                <p>نقدم دورات تدريبية هندسية عالية المستوى على يد نخبة من الكوادر التدريبية تمكن المهندسين من الدخول إلى سوق العمل</p>
                <div class="smallicons">
                    <h2><i class="fa-solid fa-book-open"></i> أكثر من 18 دورة هندسية احترافية مختلفة</h2>
                    <h2><i class="fa-solid fa-tv"></i>   التدريب بنظام التعليم عن بُعد والحضوري      </h2>
                    <h2><i class="fa-solid fa-earth-americas"></i>  وفق الإعتمادات الدولية والإوروبية والمحلية      </h2>
                </div>
            </div>
            <div class="col">
                <img src="{{asset('images/ezgif-1-a81ec1c127.jpg')}}" alt="">
                <h1>الـمـحـتـوى الـهـنـدسـي</h1>
                <p>مع التسارع التقني الحاصل في مجالات الهندسة حول العالم لابد أن يبقى المهندس العربي مواكب لكل التطورات</p>
                <div class="smallicons">
                    <h2><i class="fa-solid fa-book"></i> مجلة هندسية عصرية موجهة للمهندس العربي</h2>
                    <h2><i class="fa-solid fa-helmet-safety"></i> محتوى هندسي مؤثر يُمكن قراءته ومشاهدته      </h2>
                    <h2><i class="fa-solid fa-user-group"></i> معارض ومؤتمرات وشخصيات هندسية مُلهمة      </h2>
                </div>
            </div>
        </div>
    </div>



    <svg id="curve-shape1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1403 192.32"><path class="cls-1" d="M-1,150s82,16,291,35,260,1,500-54,612,15,612,15V0H-1Z" transform="translate(1)"/>
    </svg>
    <div class="section3holder">

        <div class="section-three-holder">
            <div class="text-area-sec3">

                <h1>تسعة سنوات من العمل المستمر على رفع كفاءة المهندس العربي.</h1>
                <p>على مدى عقد من الزمن تقريباً وبفريق هندسي من 17 دولة عربية ساهمت منصة أنا مهندس برفع كفاءة ومعرفة المهندسين العرب من المحيط إلى الخليج، لتصبح اليوم المنصة الهندسية الأولى متابعةً في العالم العربي بمعدل مليون مهندس ومهتم بمجالات الهندسة</p>
                <div class="col-down-container">
                    <div class="col">
                        <i class="fa-regular fa-handshake"></i>
                        <h1>رؤيــة مـسـتـدامـة            </h1>
                        <p>آلاف المواضيع والمعلومات والورش الهندسية التي عززت ثقافة جيل كامل من المهندسين الشباب العرب

                        </p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-users-gear"></i>
                        <h1>ثـقـافـة مـتـبـادلـة            </h1>
                        <p>من المحيط إلى الخليج اجتماع مئات الآلاف من المهندسين الشباب على حب التعلم والمعرفة وتطوير الذات

                        </p>
                    </div>
                </div>
            </div>
            <div class="media-area-sec3">
                <img src="images/sectionthreeeng.png" alt="">
            </div>
        </div>

    </div>
    <svg id="curve-shape" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1403 192.32"><path class="cls-1" d="M-1,150s82,16,291,35,260,1,500-54,612,15,612,15V0H-1Z" transform="translate(1)"/>
    </svg>



    <!-- End  Section three -->


    <!-- start  Section five -->
    <div class="home-slide">
        <div class="section-five-holder">
            <h3>دورات تدريبيه احترافيه للمهندس العربي</h3>

            <div class="sec5-content-top">

                <div class="text-sect">
                <i class="fa-solid fa-angles-left"></i><i class="fa-solid fa-angles-left"></i>
                </div>
                <button><a href="{{route('home_elms')}}">مشاهدة الكل</a></button>
            </div>
            <div class="container swiper">
                <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">

                        @foreach ($courses  as $course)

                            <div class="card swiper-slide">
                                <div class="image-box">
                                    <img src="{{asset('courses/'.$course->photo)}}" alt="" />
                                </div>
                                <div class="profile-details">
                                    <div class="name-job">
                                        <h3 class="name">{{$course->name}}</h3>
                                        <h4 class="job">{!! Str::limit($course->min_description, 70) !!}</h4>
                                    </div>
                                    <div class="bottomsliderinfo">

                                        <button><a href="{{route('show.course',$course->slug)}}">استكشف</a></button>
                                        <div class="time">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- end  Section five -->



    <!-- START  Section two -->
    <div class="section-two-holder">
        <div class="media-adrea-sec2">
            <img src="{{asset('images/ENGsection22.png')}}" alt="">
            <!-- <div class="cards-sec2">
            <img class="card1-sec2" src="images/section2card1.png" alt="">
            <img class="card2-sec2" src="images/section2card2.png" alt="">
          </div> -->
        </div>
        <div class="text-area-sec2">

            <h1>أول مـجـلـة هندسية للمهندس العربي.</h1>
            <p>مجلة أنا مهندس هي المجلة الأولى عربياً الموجهة للمهندس العربي والتي يشارك بإعداد كل عدد منها ما يقارب 30 مهندس ومهندسة من 12 دولة على فترة زمنية تستغرقت ثلاثة أشهر، وتتضمن عشرات المعلومات الهندسية الجوهرية.

            </p>
            <div class="text-col-holder-sec2">
                <div class="col1">
                    <img src="{{asset('images/award.png')}}" alt="">
                    <h1>عددل كل ثلاثة أشهر</h1>

                </div>
                <div class="col2">
                    <img src="{{asset('images/codesandbox.png')}}" alt="">
                    <h1>مشاريع وابتكارات عربيه</h1>

                </div>
                <div class="col3">
                    <img src="{{asset('images/pen-tool.png')}}" alt="">
                    <h1>تصميم عصري وجذاب</h1>

                </div>
                <div class="col4">
                    <img src="{{asset('images/user.png')}}" alt="">
                    <h1>شخصيات هندسية مؤثرة</h1>

                </div>
                <a href="{{route('all.magazines')}}">
                <button>تصفح مجله انا مهندس</button>
                </a>

            </div>

        </div>

    </div>
    <!-- End  Section two -->








    <!-- partial:index.partial.html -->
    <div class="youtvid">
        <h1>احدث فيديوهاتنا</h1>
        <div class="container">
            <div class="digital-lab-slider">
                <div class="digital-lab-slide-wrapper">

                    <div class="navigation">
                        <i class="js-navigate js-right ">></i>
                        <div class="digital-lab-slide-progress"><svg viewBox="-10 -10 220 220"><g fill="none" stroke-width="6" transform="translate(100,100)"><path d="M 0,-100 A 100,100 0 0,1 86.6,-50"></path><path d="M 86.6,-50 A 100,100 0 0,1 86.6,50"></path><path d="M 86.6,50 A 100,100 0 0,1 0,100"></path><path d="M 0,100 A 100,100 0 0,1 -86.6,50"></path><path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50"></path><path d="M -86.6,-50 A 100,100 0 0,1 0,-100"></path></g></svg><svg viewBox="-10 -10 220 220"><path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="629"></path></svg></div></div>

                    <div class="slide-counter-wrapper">
                        <span class="slide-count-active">01</span>
                        /
                        <span class="slide-count-total">03</span>
                    </div>

                    <div class="digital-lab-slide-image" style="background-color: rgb(36, 227, 144);">



                        <div class="digital-lab-slide active">
                            <div class="digital-lab-slide-background" style="background-color:#79edd2;"></div>
                        </div>


                        <div class="digital-lab-slide">
                            <div class="digital-lab-slide-background" style="background-color:#79edd2;"></div>
                        </div>


                        <div class="digital-lab-slide">
                            <div class="digital-lab-slide-background" style="background-color:#79edd2;"></div>
                        </div>


                        <div class="digital-lab-slide digital-lab-slide-texts active">
                            <div class="slide-texts">
                                <h4>ماهي أفضل التخصصات الهندسية المناسبة للفتيات ؟
                                </h4>


                            </div>
                        </div>



                        <div class="digital-lab-slide digital-lab-slide-texts">
                            <div class="slide-texts">
                                <h4>الهندسة الكهربائية المهنة التي تجعل اصحابها من الأثرياء !
                                </h4>


                            </div>
                        </div>



                        <div class="digital-lab-slide digital-lab-slide-texts">
                            <div class="slide-texts">
                                <h4>سبعة تخصصات هندسية تعتبر من الوظائف الأعلى أجراً في مدينة دبي</h4>
                                <div class="cormorant"><p></p>
                                    <p> </p>
                                    <p></p></div>

                            </div>
                        </div>




                        <div class="digital-lab-slide-content" style="background-color: #df2a49;">


                            <div class="digital-lab-slide blue active">
                                <div id="my-video" class="digital-lab-inner">
                                    <iframe width="1903" height="760" src="https://www.youtube.com/embed/0QjF_ykx89Q" title="ماهي أفضل التخصصات الهندسية المناسبة للفتيات والتي ستكون من أفضل المجالات المستقبلية؟" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>




                            <div class="digital-lab-slide  blue ">
                                <div id="my-video" class="digital-lab-inner">
                                    <iframe width="1903" height="760" src="https://www.youtube.com/embed/_u91Jh5NIb8" title="الهندسة الكهربائية المهنة التي تجعل اصحابها من الأثرياء !" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>


                            <div class="digital-lab-slide  blue ">
                                <div id="my-video" class="digital-lab-inner">
                                    <iframe width="1903" height="760" src="https://www.youtube.com/embed/b_LHyZKIcpI" title="سبعة تخصصات هندسية تعتبر من الوظائف الأعلى أجراً في مدينة دبي" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>              </div>
                            </div>





                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="featured">
    <h1>احدث المقالات</h1>
    <div class="cards">
        @foreach ($articals  as $key => $artical)
            <a href="{{route('show.artical',$artical->slug)}}" class="card card-{{$key+1}}">
                <article>
                    <img src="{{asset('articles/'.$artical->img)}}" alt="Food" >
                    <div class="tag-1">{{$artical->created_at->format('Y-m-d')}}</div>
                    <div class="comments">
                        <span class="far fa-comment"></span>
                        42
                    </div>
                    <h2>{{$artical->title }}</h2>
                </article>
            </a>

        @endforeach

    </div>
</section>


<!-- end  Section six -->
<div class="section-sev-holder">
    <h1>ارسل لنا بريدك الالكتروني ل الاشتراك</h1>
    <h2> سنرسل لك كل مقالاتنا و تطورتنا</h2>
    <div class="subscribe-form">
        <input type="email" class="textbox" placeholder="البريد الالكتروني الخاص بك" />
        <button class="subscribe-button" type="button" disabled>
            <span class="button-text">ارسال</span>
            <span class="button-icon"><svg width="24" height="24" viewBox="0 0 24 24">
      <path fill="#FFF" d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4M12,11L20,6H4L12,11M4,18H20V8.37L12,13.36L4,8.37V18Z"></path>
          </svg></span>
        </button>
    </div>
    <span class="to-expand">
      <svg width="0" height="0" viewBox="0 0 24 24">
      <path fill="#FFF" d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4M12,11L20,6H4L12,11M4,18H20V8.37L12,13.36L4,8.37V18Z"></path>
          </svg></span>
    </span>
    <span class="to-fade-in">
      تم الارسال
    </span>
</div>
{{--front--}}
@include('Front.layout.FooterHome')
</body>
<!-- partial -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js'></script>
<script src="{{asset('js_o/gallery.js')}}"></script>
<script src="{{asset('js_o/scriptVideoyot.js')}}"></script>

<script src="{{asset('js_o/particles.min.js')}}"></script>
<script src="{{asset('js_o/main.js')}}"></script>
<script src="{{asset('js_o/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js_o/script.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

<script>
  $(".close").click(function(){

      $(".message-success").hide();
  });
</script>
<script>
    $(".mobile_nav").click(function() {

        var mm = $(".mobile_menu"),
            mn = $(".mobile_nav"),
            a = "active";

        if (mm.hasClass(a) && mn.hasClass(a)) {
            mm.removeClass(a).fadeOut(200);
            mn.removeClass(a);
            $('.mobile_menu li').each(function(){
                $(this).removeClass('slide');
            });
        } else {
            mm.addClass(a).fadeIn(200);
            mn.addClass(a);
            $('.mobile_menu li').each(function(i){
                var t = $(this);
                setTimeout(function(){ t.addClass('slide'); }, (i+1) * 100);
            });
        }

    });

</script>

</html>
