{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}

{{--                    <div class="card-body">--}}

{{--                        <div class="alert alert-success">--}}
{{--                            Subscription purchase successfully!--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>اهلا بك!</title>
    <link rel="stylesheet" href="{{asset('assets/css/stylemodal.css')}}">
    <link rel="icon" type="imag/Logo.png" href="{{asset('images/MainLogo.png')}}" />

</head>
<body>
<!-- partial:index.partial.html -->
<div class="modal">
    <div class="close-modal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 6.0.0-alpha1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M335 177C329 171 319 171 313 177L256 233L199 177C193 171 183 171 177 177C171 183 171 193 177 199L233 256L177 313C171 319 171 329 177 335C183 341 193 341 199 335L256 279L313 335C319 341 329 341 335 335C341 329 341 319 335 313L279 256L335 199C341 193 341 183 335 177ZM256 16C123 16 16 123 16 256S123 496 256 496S496 389 496 256S389 16 256 16ZM256 464C141 464 48 371 48 256S141 48 256 48S464 141 464 256S371 464 256 464Z"/></svg>
    </div>
    <div class="hand-area">
        <div class="hand">
            <img src="{{asset('assets/Paymetnsuc.svg')}}" alt="">
        </div>
    </div>
    <div class="content">
        <div>
            <h2>انت رائع!</h2>
            <p class="sub">تهانينا على انضمامك إلى عائلة <span> انا مهندس</span> , ونتطلع إلى مشاركتك معنا , أنت الآن جاهز لتصفح الموقع بالكامل بالأضافه الي جميع المميزات اهلا بك!</p>
            <a class="button main" href="{{url('/')}}" target="_blank">اذهب الي الموقع <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 6.0.0-alpha1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M400 320H368C359 320 352 327 352 336V448H64V160H176C185 160 192 153 192 144V112C192 103 185 96 176 96H48C22 96 0 118 0 144V464C0 490 22 512 48 512H368C394 512 416 490 416 464V336C416 327 409 320 400 320ZM503 9C497 4 489 0 480 0H352C334 0 320 14 320 32V32C320 50 334 64 352 64H403L176 291C164 303 164 323 176 336L176 336C189 349 209 349 221 336L448 109V160C448 178 462 192 480 192H480C498 192 512 178 512 160V32C512 23 508 15 503 9Z"/></svg></a>

        </div>
    </div>
</div>
<!-- partial -->
<script type="module" src="{{asset('assets/js/scriptmodal.js')}}"></script>

</body>
</html>

