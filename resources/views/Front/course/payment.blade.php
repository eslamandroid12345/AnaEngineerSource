<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl" style="background-color:powderblue;" >
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> الاشتراك </title>
    <link rel="apple-touch-icon" href="{{asset('Dashbord/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Dashbord/app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/bootstrap.css?ver=0.0.0.3')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('Dashbord/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashbord/app-assets/css-rtl/font.css')}}">


    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static font " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class ="brand-logo" href="index.html">
                            <img src="{{asset('Dashbord/app-assets/images/logo/logo.png')}}" >
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src=" {{asset('Dashbord/app-assets/images/pages/payment.svg')}}" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 font"> سعداء ب اشتراكك  </h2>
                                <p class="card-text mb-2 font">بياناتك مؤمنه بشكل كامل لدينا </p>
                                <form class="auth-login-form mt-2" action="{{ route('subscription.create') }}" method="POST" >
                                @csrf
                                    <div class="mb-1">
                                        <input class="form-control font" id="login-email" type="hidden" name="plan" aria-describedby="login-email" autofocus="" tabindex="1" value="{{ $plan->id }} />
                                    </div>


                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between color font">
                                            <label class="form-label" for="login-password color">بيانات البطاقه البنكيه  </label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="text" name="name" value="" placeholder="رقم البطاقه البنكيه الخاصه بك" aria-describedby="login-password" tabindex="2" />
                                        </div>

                                        <div id="card-element"></div>

                                    </div>


                                    <button class="btn btn-primary w-100"  data-secret="{{ $intent->client_secret }}" tabindex="4" >  ادفع الان</button>
                                </form>



                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src=" {{asset('Dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src=" {{asset('Dashbord/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src=" {{asset('Dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src=" {{asset('Dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src=" {{asset('Dashbord/app-assets/js/scripts/pages/auth-login.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script src="https://js.stripe.com/v3/"></script>

    <script>

        const stripe = Stripe('{{ env('STRIPE_KEY') }}')



        const elements = stripe.elements()

        const cardElement = elements.create('card')



        cardElement.mount('#card-element')



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

                cardBtn.disable = false

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
</body>
<!-- END: Body-->

</html>
