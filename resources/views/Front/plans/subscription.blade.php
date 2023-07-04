

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>انا مهندس l منصة المهندس العربي</title>

    <!-- open links -->
    <!-- <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/all.min.css" /> -->


    <link rel="stylesheet" href="{{asset('assets/css/paymenttt.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/engineer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- end Links -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <link rel="icon" type="imag/Logo.png" href="images/MainLogo.png" />
</head>

<body>
<!-- Start Header -->
<header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
                <a href="#"><img src="images/HeaderLogo.png" alt=""></a>
            </div>
            <button type="button" class="nav-toggler">
                <span></span>
            </button>

            <nav class="nav">
                <ul>
                    <div class="ttt">
                        <div class="user-pic-img">

                            <a href="#">    <h2>تسجيل الدخول</h2></a>
                            <!-- <a href="#">   <h2>تسجيل خروج</h2> </a> -->

                        </div>
                        <a href="">  <img class="prff" src="images/avatar111.png" alt=""></a>

                    </div>

                    <li><a href="index.html" class="active">الرئيسية</a></li>
                    <li><a href="courses.html">دورات</a></li>
                    <li><a href="maqalat.html">المقالات</a></li>
                    <li><a href="magalla.html">المجلة</a></li>
                    <li><a href="Comuni.html">المجتمع</a></li>
                    <li><a href="handasa.html">خطط الاسعار</a></li>
                    <!-- <li> <a href="#">
                        <div class="search-container">
                          <form action="/action_page.php">
                            <input type="text" placeholder="ابحث.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </a> </li> -->

                </ul>
            </nav>
            <div class="ttt">
                <div class="user-pic-img-out">

                    <a href=""> <h2>تسجيل الدخول</h2></a>
                    <!-- <a href=""> <h2>تسجيل خروج</h2></a> -->

                </div>
                <a href="">  <img class="prfff" src="images/avatar111.png" alt=""></a>

            </div>
        </div>
    </div>
</header>
<!-- End Header -->
<div class="paymenthhall">
    <div class="paymentway">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="card-errors" role="alert"></div>

        <div class="paymentformm">
            <div class="paymenttitle">
                <h1>سعداء بـ اشتراكك</h1>
            </div>
            <div class="checkout">
                <div class="credit-card-box">
                    <div class="flip">
                        <div class="front">
                            <div class="chip"></div>
                            <div class="logo">
                                <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                        <g>
                                            <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="number"></div>
                            <div class="card-holder">
                                <label>Card holder</label>
                                <div></div>
                            </div>
                            <div class="card-expiration-date">
                                <label>Expires</label>
                                <div></div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="strip"></div>
                            <div class="logo">
                                <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                        <g>
                                            <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <div class="ccv">
                                <label>CCV</label>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="form" id="payment-form" action="{{ route('subscription.create') }}" method="POST" autocomplete="off" novalidate>
                    @csrf
                    <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                    <fieldset>
                        <label for="card-number">Card Number</label>
                        <input type="num" id="card-number" class="input-cart-number" maxlength="16" />

                    </fieldset>
                    <fieldset>
                        <label for="card-holder">Card holder</label>
                        <input type="text" id="card-holder" />
                    </fieldset>
                    <fieldset class="fieldset-expiration">
                        <label for="card-expiration-month">Expiration date</label>
                        <div class="select">
                            <select id="card-expiration-month">
                                <option></option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="select">
                            <select id="card-expiration-year">
                                <option></option>
                                <option> 2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                                <option>2031</option>
                                <option>2032</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset-ccv">
                        <label for="card-ccv">CCV</label>
                        <input type="text" id="card-ccv" maxlength="3" />
                    </fieldset>
                    <button class="btn" type="submit" data-secret="{{ $intent->client_secret }}><i class="fa fa-lock"></i> submit</button>
                </form>
                {{--                <p class="marfod"> للأسف البطاقه مرفوضه </p>--}}

            </div>

            <div class="paymentitems">
                <div class="col">
                    <div class="title1">
                        <i class="fa-solid fa-money-bill-wave"></i>
                        <div class="title">
                            <h1>100%</h1>
                            <h2>ضمان ذهبي</h2>
                        </div>
                    </div>
                    <p>٧ ايام ضمان لاسترداد كامل المبلغ اذ لم تكن راضي عن الخدمة
                    </p>
                </div>
                <div class="col">
                    <div class="title1">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div class="title">
                            <h1>100%</h1>
                            <h2>دفع بأمان
                            </h2>
                        </div>
                    </div>
                    <p>الدفع بأمان وسهولة عبر منصة انا مهندس بواسطة أحدث طرق الحماية
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- <div class="paymentformleft">
  <img src="/images/payment.svg" alt="">
</div> -->
<!-- <div class="paymentitems">
  <div class="col">
   <div class="title1">
    <i class="fa-solid fa-user-shield"></i>
    <div class="title">
      <h1>100%</h1>
      <h2>ضمان ذهبي</h2>
    </div>
   </div>
    <p>٧ ايام ضمان لاسترداد كامل المبلغ اذ لم تكن راضي عن الخدمة
    </p>
  </div>
  <div class="col">
    <div class="title1">
     <i class="fa-solid fa-user-shield"></i>
     <div class="title">
       <h1>100%</h1>
       <h2>ضمان ذهبي</h2>
     </div>
    </div>
     <p>٧ ايام ضمان لاسترداد كامل المبلغ اذ لم تكن راضي عن الخدمة
     </p>
   </div>
</div> -->
</div>
</div>

<div class="footer">
    <div class="row-foter">
        <div class="col-foter">
            <img src="images/whitelogo.png" alt="">
            <h1>أول منصة للمهندس العربي
            </h1>
            <p>شركة ناشئة خاصة تعمل من مدينة دبي وميونخ، تختص بإلهام ومساعدة المهندسين على الإلتحاق بسوق العمل وتقدم دورات
                تدريبية عالية المستوى. ومنذ عام 2014 أنجزت العديد من المشاريع النوعية التي ساهمت بتغيير الواقع العربي الهندسي.
                وتساهم يومياً في إثراء المحتوى العربي الرقمي في مجالات الهندسة كافة</p>
        </div>
        <div class="col-foter">
            <a href="">
                <h1>تابع</h1>
            </a>
            <a href="">
                <h2>سياسة الخصوصية</h2>
            </a>
            <a href="">
                <h2>الشروط والاحكام</h2>
            </a>
            <a href="">
                <h2>الأسئلة الشائعة</h2>
            </a>
            <a href="">
                <h2>تطوع معنا</h2>
            </a>
        </div>
        <div class="col-foter">
            <a href="">
                <h1>تصفح</h1>
            </a>
            <a href="">
                <h2>سياسة الخصوصية</h2>
            </a>
            <a href="">
                <h2>الشروط والاحكام</h2>
            </a>
            <a href="">
                <h2>الأسئلة الشائعة</h2>
            </a>
            <a href="">
                <h2>التحقق من صحة الشهادة</h2>
            </a>
        </div>
        <div class="col-foter">

            <h1>أول منصة للمهندس العربي</h1>
            <img src="images/footermap.png" alt="">
        </div>
    </div>

    <div class="bottom-row">

        <h3>جميع الحقوق محفوظة © 2014 - 2022 منصة أنا مهندس</h3>

    </div>
</div>
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js'></script>
<script src="{{asset('assets/js/gallery.js')}}"></script>
<script src="{{asset('assets/js/scriptVideoyot.js')}}"></script>

<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/scriptPayment.js')}}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}')

    const elements = stripe.elements()
    const cardElement = elements.create('card')

    cardElement.mount('#card-element')

    const cardErrors = document.getElementById('card-errors');
    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')

    form.addEventListener('submit', async (e) => {
        e.preventDefault()

        cardBtn.disabled = true
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }
        )

        if(error) {
            cardBtn.disabled = false;

            // update the error element with the error message
            cardErrors.textContent = error.message;
        } else {
            let token = document.createElement('input')
            token.setAttribute('type', 'hidden')
            token.setAttribute('name', 'token')
            token.setAttribute('value', setupIntent.payment_method)
            form.appendChild(token)
            form.submit();
        }
    })
</script>

</html>
