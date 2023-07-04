<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>سياسة الخصوصيه</title>

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


    <link rel="icon" type="imag/Logo.png" href="{{asset('images/MainLogo.png')}}" />
</head>

<body>
<!-- Start Header -->
<div class="hol-container-last1">
    <!-- Start Header -->
    @include('Front.layout.HeaderHome')
    <!-- End Header -->
    <!-- START privacy Page  -->
    <div class="top-title">
        <h1>الاسئلة الشائعة</h1>
    </div>
    <div class="last-continer-orher">


        <h1 class="qusstitle">في ما يلي نجيب على أهم الأسئلة التي يطرحها المهندسين حولنا:</h1>

        <div class='d-display'>
            <div class='d-details'>
                <details class='tab-control'>
                    <summary>ما مدى أمان موقع شركة أنا مهندس؟</summary>
                    <p>أنا مهندس هي شركة إماراتية بالكامل مقرها في مدينة دبي في الإمارات العربية المتحدة
                        تعتمد مستوى عالي من الامان في تداول البيانات وحماية المعلومات بفريق آمن من المهندسين
                        المختصين بأمن المعلومات والامن السيبراني..
                    </p>
                </details>
                <details class='tab-control'>
                    <summary>ما مستوى جودة التعليم في شركة أنا مهندس؟</summary>
                    <p>تُعد منصة أنا مهندس التابعة لشركة أنا مهندس واحدة من أفضل منصات التعليم الإلكترونية المعنية بتدريب المهندسين العرب وتأهيلهم للدخول لسوق العمل بإختلاف مجالاتهم وثقافاتهم من المحيط إلى الخليج وهي مؤسسة تعليمية معتمدة من قبل هيئة المعرفة والتنمية البشرية KHDA في حكومة دبي في الإمارات العربية المتحدة برقم تصريح (630572) Ana Muhands for Professional & Management Development Training</p>
                </details>
                <details class='tab-control'>
                    <summary>ما مدى خصوصية معلوماتي في موقع أنا مهندس؟</summary>
                    <p>بالإشتراك في الخدمات الهندسية المدفوعة في منصة أنا مهندس فنحن نجمع المعلومات التي تتعلق بالمهندسين لنقدم أفضل جودة في الخدمات ويتم حفظ البيانات داخلياً وفق أنظمة الحماية العالية.</p>
                </details>

                <details class='tab-control'>
                    <summary>ما هو تطبيق أنا مهندس على الهواتف الذكية؟</summary>
                    <p>تطبيق أنا مهندس هو التطبيق الهندسي الأول للمهندس العربي يعمل على الهواتف الذكية العاملة بنظام أندرويد و IOS وهو متوفر على متجر غوغل بلاي وأبل ستور يتيح للمهندسين إنشاء حسابات احترافية وعرض إنجازاتهم والبحث عن فرص العمل والتدريب والمنح في محيطهم والإطلاع على أخر الأخبار الهندسية ويتيح واقع معزز وذكاء صنعي فائق.</p>
                </details>
                <details class='tab-control'>
                    <summary>ما هي الخدمات الإلكترونية المقدمة في منصة أنا مهندس؟</summary>
                    <p>نقدم في منصة أنا مهندس العديد من الخدمات الهندسية التي تساهم في رفع قدرات المهندسين العرب وتثقيفهم، بحيث نقدم مجموعة واسعة من الدورات التدريبية التي تُمكن المهندسين من الإلتحاق بسوق العمل ونقدم أيضاً مجلة أنا مهندس بعدد شهري تواكب التطورات الهندسية وتسلط الضوء على انجازات المهندسين العرب الموهوبين ونقدم محتوى هندسي متكامل يمكن قراءته ومشاهدته والاستماع له.</p>
                </details>
                <details class='tab-control'>
                    <summary>ما مدى أمان الدفع الإلكتروني على منصة أنا مهندس؟</summary>
                    <p>نحن نستخدم في موقع أنا مهندس منصة Stripe للدفع الإلكتروني وهي منصة عالمية، يتم تخزين معلومات بطاقتك ونقلها ومعالجتها بشكل متوافق بالكامل مع معايير PCI. تتم معالجة كل معاملة بنفس مستوى التشفير الآمن عالي المستوى المستخدم في المؤسسات المصرفية. نحن لا نخزن معلومات بطاقة الائتمان الخاصة بك ولا تمر أرقام بطاقات الائتمان الخاصة بك عبر خوادمنا.</p>
                </details>
                <details class='tab-control'>
                    <summary>كيف يمكنني إلغاء اشتراكي في موقع أنا مهندس؟</summary>
                    <p>يمكنك بسهولة إلغاء اشتراكك المدفوع في موقع أنا مهندس بأي وقت وسيظل بإمكانك استخدام حسابك حتى إنقضاء فترة الإشتراك وبعدها لن يتجدد. سيظل بإمكانك استخدام حسابك وتفعيله مرة أخرى عند رغبتك في حال لم تقم بحذفه.</p>
                </details>
                <details class='tab-control'>
                    <summary>هل يمكنني استخدام حسابي في موقع أنا مهندس على التطبيق؟</summary>
                    <p>بإمكانك أستخدام حسابك على تطبيق أنا مهندس وعلى الموقع في نفس الوقت.</p>
                </details>
                <details class='tab-control'>
                    <summary>كيف يمكنني التواصل مع منصة أنا مهندس؟</summary>
                    <p>في خانة الاتصال يمكنك التواصل مع شركة أنا مهندس ومن المهم اختيار طريقة الاتصال المناسبة حسب استفسارك وشرح استفسارك تفصيلياً،عادةً يتم الرد خلال 24 ساعة عمل.</p>
                </details>
                <details class='tab-control'>
                    <summary>ما أهمية تطبيق أنا مهندس" للمهندسين؟</summary>
                    <p>تطبيق "أنا مهندس" يساعد المهندسين على تطوير مهاراتهم وتوسيع معرفتهم في مجالات الهندسة المختلفة، ويمكنهم من خلاله التواصل والتعاون مع مهندسين آخرين في المجال ومشاركة الخبرات والأفكار والمشاريع، كما يتيح لهم الفرصة للحصول على وظائف في مجال الهندسة والتقدم في حياتهم المهنية.</p>
                </details>
                <details class='tab-control'>
                    <summary>ما هي رسوم الاشتراك في منصة أنا مهندس؟</summary>
                    <p>رسوم الإشتراك في أنا مهندس موضحة حسب الباقات وتختلف حسب كل باقة وتوجد باقات شهرية ونصف سنوية وسنوية تتيح تجربة لا مثيل لها..</p>
                </details>
                <details class='tab-control'>
                    <summary>هل توجد شهادات تأهيل للمهندسين في منصة  أنا مهندس؟</summary>
                    <p> نعم، توفر منصة "أنا مهندس" شهادات تأهيل معتمدة ودولية في مجالات الهندسة المختلفة تثبت قدرة المهندسين وتمكنهم من الإلتحاق بسوق العمل.</p>
                </details>
                <details class='tab-control'>
                    <summary>هل يمكن الحصول على وظائف من خلال منصة أنا مهندس؟</summary>
                    <p>نعم، يمكن للمهندسين البحث عن وظائف في مجال الهندسة وتقديم طلبات التوظيف حسب الإعلانات المعلن عنها.</p>
                </details>
                <details class='tab-control'>
                    <summary>هل يمكن استفادة غير المهندسين من منصة أنا مهندس؟</summary>
                    <p>نعم، يمكن لأي شخص الاستفادة من المحتوى التعليمي المتاح على منصة "أنا مهندس"، ولكن الفائدة الأكبر للمهندسين والأشخاص المهتمين بمجال الهندسة.</p>
                </details>
                <details class='tab-control'>
                    <summary>ما هب مجالات الهندسة التي تغطيها منصة أنا مهندس؟</summary>
                    <p> تغطي منصة "أنا مهندس" مجالات الهندسة المختلفة، مثل الهندسة الميكانيكية، والهندسة الكهربائية، والهندسة المدنية، والهندسة الصناعية، وغيرها.</p>
                </details>
            </div>

            <div class='d-imgs'>
                <div class='imgs'></div>
            </div>
        </div>



    </div>



</div>

@include('Front.layout.FooterHome')
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
