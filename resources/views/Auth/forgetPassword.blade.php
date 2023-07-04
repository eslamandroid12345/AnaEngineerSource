<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعادة تعين كلمة السر</title>
    <link rel="stylesheet" type="text/css" href="{{asset('auth-last/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth-last/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth-last/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth-last/css/iofrm-theme8.css')}}">
</head>
<body>
<div class="form-body">
    <div class="containercir">
        @if (Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('message') }}
            </div>

        @endif
        <div class="shape">
        </div>
    </div>
    <div class="website-logo">
        <a href="">
            <div class="logo">
                <img class="logo-size" src="{{asset('auth-last/images/whitelogo.png')}}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h3>لا تقلق!</h3>
                <p>لا تقلق عند عدم تذكر كلمة السر ف يمكنك استرجاعها في اي وقت</p>
                <img src="{{asset('auth-last/images/forget.png')}}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                        <a href="">
                            <div class="logo">
                                <a href="{{url('/')}}">


                                <img class="logo-size" src="{{asset('auth-last/images/whitelogo.png')}}" alt="">
                                </a>
                            </div>
                        </a>
                    </div>
                    <h3>اعادة كلمة السر</h3>
                    <p>لأعادة كلمة السر الخاصة بك قم بأدخال البريد الالكتراوني و تلقي الكود عليه</p>
                    <form class="auth-login-form mt-2" action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        <input class="form-control" type="email" name="email" placeholder="البردي الألكتروني" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="form-button full-width">
                            <button id="submit" type="submit" class="ibtn btn-forget">اعادة كلمة السر</button>
                        </div>
                    </form>
                </div>
                <div class="form-sent">
                    <div class="website-logo-inside">
                        <a href="">
                            <div class="logo">
                                <img class="logo-size" src="{{asset('auth-last/images/whitelogo.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="tick-holder">
                        <div class="tick-icon"></div>
                    </div>
                    <h3>Password link sent</h3>
                    <p>Please check your inbox iofrm@iofrmtemplate.io</p>
                    <div class="info-holder">
                        <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('auth-last/js/jquery.min.js')}}"></script>
<script src="{{asset('auth-last/js/popper.min.js')}}"></script>
<script src="{{asset('auth-last/js/bootstrap.min.js')}}"></script>
<script src="{{asset('auth-last/js/main.js')}}"></script>
</body>
</html>
