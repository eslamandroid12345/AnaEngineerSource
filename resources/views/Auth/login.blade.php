<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('auth-last/css/login.css')}}">
    <title>تسجيل الدخول</title>

    <link rel="icon" type="imag/Logo.png" href="{{asset('auth-last/imags/MainLogo.png')}}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet" />
    <!-- End Google Fonts -->
    <!-- open links -->
    <link rel='stylesheet' href='https://cdn.jsd elivr.net/foundation/6.1.1/foundation.min.css'>
    <link rel="stylesheet" href="{{asset('auth-last/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('auth-last/css/all.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- end Links -->
</head>

<body>
<div class="container">

    <!-- <div class="mai">
          <ul>
         <li><a class="active" href="#">الرئيسية</a></li>
         <li><a href="#">مشاريع</a></li>
         <li><a href="#">كورسات</a></li>
         <li><a href="#">تخصصات</a></li>
         <li><a href="#">كورسات</a></li>
         <li><a href="#">مشاريع</a></li>
         <li><a href="#">الرئيسية</a></li>
        </ul>
         </div> -->


    <div class="forms-container">
        <div class="signin-signup">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{route('auth.handleLogin')}}" class="sign-in-form" method="post" autocomplete="off">
                @csrf
                <h2 class="title">تسجيل الدخول</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="البريد الالكتروني" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="كلمةالسر" />
                </div>

                <input type="submit" value="تسجيل الدخول" class="btn solid" />
                <a href="{{route('forget.password.get')}}">

                    <p class="social-text">هل نسيت كلمه السر ؟</p>

                </a>
                <p class="social-text">او استخدام وسائل التواصل للدخول</p>
                <div class="social-media">

                    <a href="{{ route('login.google')}}" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="{{ route('login.facebook')}}" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </form>



            <form action="{{route('auth.handleRegister')}}" class="sign-up-form" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <h2 class="title">انشاء حساب</h2>
                <div class="input-field">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" name="name" placeholder="اسم المستخدم" />
                </div>
                <div class="input-field">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="البريد الالكتروني" />
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <input type="tel" name="phone" placeholder="رقم الهاتف" />
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-fingerprint"></i>
                    <input type="password" name="password" placeholder="كلمة السر" />
                </div>
{{--                <div class="input-field">--}}
{{--                    <i class="fa-solid fa-fingerprint"></i>--}}
{{--                    <input type="password" placeholder="تأكيد كلمة السر" />--}}
{{--                </div>--}}
                <div class="imagesinb">
                    <!--
                            <label for="file1" class="file-input-label">Choose Image 1:</label>
                            <input type="file" name="file1" id="file1" class="file-input" onchange="previewFiles('preview1', this)" multiple>
                            <div id="preview1" class="preview-container"></div>

                            <label for="file2" class="file-input-label">Choose Image 2:</label>
                            <input type="file" name="file2" id="file2" class="file-input" onchange="previewFiles('preview2', this)" multiple>
                            <div id="preview2" class="preview-container"></div>
                         -->


                    <div class="small-12 large-4 columns">
                        <div class="containers">
                            <div class="imageWrapper">
                                <img class="image" src="{{asset('auth-last/images/avatar111.png')}}">
                            </div>
                        </div>
                        <button class="file-upload">
                            <input type="file" class="file-input" name="image">الصوره الشخصيه
                        </button>
                    </div>

                    <div class="small-12 large-4 columns">
                        <div class="containers">
                            <div class="imageWrapper1">
                                <img class="image" src="{{asset('auth-last/images/Coverrrr.png')}}">
                            </div>
                        </div>
                        <button class="file-upload">
                            <input type="file" class="file-input" name="profile_cover">صوره الغلاف
                        </button>
                    </div>


                </div>

                <input type="submit" class="btn" value="انشاء الحساب" />
                <p class="social-text">انشاء حساب عبر</p>
                <div class="social-media">



                    <a href="{{ route('login.google')}}" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="{{ route('login.facebook')}}" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>هل انت جديد ؟</h3>
                <p>
                    تعالي سجل معنا و انضم الي مجتمعنا من هنا حتي تستفيد ب العديد من المميزات
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    انشاء حساب
                </button>
                <a href="{{url('/')}}">  <button class="btn transparent" id="sign-up-btn">
                    <i class="fa-solid fa-house"></i>

                </button></a>

            </div>
            <img src="{{asset('auth-last/images/log3.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>هل لديك حساب بالفعل ؟</h3>
                <p>
                    تعالي سجل معنا و انضم الي مجتمعنا من هنا حتي تستفيد ب العديد من المميزات
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    تسجيل الدخول
                </button>
                <a href="{{url('/')}}">  <button class="btn transparent" id="sign-up-btn">
                    <i class="fa-solid fa-house"></i>

                </button></a>
            </div>
            <img src="{{asset('auth-last/images/log4.svg')}}" class="image" alt="" />
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('auth-last/js/app.js')}}"></script>
<script src="{{asset('auth-last/js/script1111.js')}}"></script>

</body>

</html>
