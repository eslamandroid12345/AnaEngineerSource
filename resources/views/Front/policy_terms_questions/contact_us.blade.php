<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تواصل معنا</title>

    <!-- open links -->
    <link rel="stylesheet" href="{{asset('css_o/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('css_o/css/all.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css_o/engineer.css?ver=0.0.0.2')}}" />

    <link rel="stylesheet" href="{{asset('css_o/css/engineer.css')}}" />
    <link rel="stylesheet" href="{{asset('css_o/css/fontawesome-all.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{asset('css_o/css/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <link rel="icon" type="imag/Logo.png" href="{{asset('imags/MainLogo.png')}}" />
</head>


<body>
<!-- Start Header -->
<div class="hol-container-last1">
    <!-- Start Header -->
    @include('Front.layout.HeaderHome')
    <!-- End Header -->
    <!-- START privacy Page  -->
    <div class="top-title">
        <h1>تواصل معنا</h1>
    </div>
    <div class="last-continer-orher">
        <h1>تحية طيبة</h1>
        <p> شكراً لاهتمامك بالتواصل مع شركة أنا مهندس.</p>
        <h1>إذا كنت ترغب في الاتصال بنا لأي سبب، يمكنك استخدام الطرق التالية:</h1>





        <section>
            <div class="container">
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="contactForm">
                    <h2>للتواصل السريع</h2>
                    <form method="post" action="{{route('contact.store')}}">
                    @csrf
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="name" required>
                            <span>الاسم كامل</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="country" required>
                            <span>البلد</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="email" required>
                            <span>البريد الألكتروني</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="phone" required>
                            <span>رقم الهاتف</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message" required></textarea>
                            <span>اترك لنا سبب اتصالك بنا...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="ارسال">
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </section>

        <h2>يمكنك استخدام طرق التواصل التالية المختلفة حسب اهتماماتك مع ذكر تفصيلياً سبب التواصل</h2>
        <ul>
            <li>البريد الإلكتروني للاستفسارات العامة: contact@anaengineer.com</li>
            <li>البريد الإلكتروني للمعلومات: info@anaengineer.com</li>
            <li>البريد الإلكتروني للدعم الفني:support@anaengineer.com </li>
            <li>البريد الإلكتروني للمبيعات:sales@anaengineer.com </li>
            <li>البريد الإلكتروني للإعلانات: marketing@anaengineer.com</li>

        </ul>



        <h3>نحن نقدر اتصالكم بنا وسنقوم بالرد على استفسارك في أسرع وقت ممكن. شكرا لكم</h3>
        <h5>[أنا مهندس للاستشارات والتدريب الهندسي] <br>
            العنوان: دبي – الإمارات العربية المتحدة
        </h5>


    </div>



</div>
@include('Front/layout/FooterHome')


<!-- END privacy Page  -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{asset('js_o/js/main.js')}}"></script>
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

</body>
</html>
