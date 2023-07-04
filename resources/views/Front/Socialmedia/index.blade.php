

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ujs/1.2.2/jquery-ujs.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>انا مهندس - المجتمع</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <lifood websitenk rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/bootstrap.css?ver=0.0.0.4')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/themes/bordered-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/themes/semi-dark-layout.css')}}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/font.css')}}">
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/page-profile.css')}}">
        <!-- END: Page CSS-->
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
        <!-- END: Custom CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        .delete-post{
            background-color: transparent;
            border: 0;

        }
    </style>
        </head>
        <!-- END: Head-->

        <!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                                                                 data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                                                                                         data-feather="moon"></i></a></li>


            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                                                           id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{$profile->name}}
                    </div><span class="avatar">

                        @if (auth()->check() && auth()->user()->google_id)
                            <img src="{{ auth()->user()->image }}" alt="" class="round" alt="avatar" height="30" width="40">
                        @elseif (auth()->user()->image)
                            <img src="{{ asset('profile_photo/'. auth()->user()->image) }}" class="round" alt="avatar" height="30" width="40">
                        @else
                            <img src="{{ asset('default_image/y.jpg') }}" class="round" alt="avatar" height="30" width="40">
                        @endif
                        <span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                        class="dropdown-item fontSize  " href="{{route('profile',auth()->user()->id)}}"><i class="me-50 " data-feather="user"></i> الصفحه الشخصيه</a>


                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize" href="{{route('auth.logout')}}"><i class="me-50 " data-feather="log-out"
                            ></i> تسجيل الخروج</a> </div>

                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0"> Kareem Elbhrawy</p><small class="text-muted">UI
                        designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75"
                                                            data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('Front.layout.RightSideForSocial')
<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">


    </div>
    <div class="content-body">
        <div id="user-profile">
            <!-- profile header -->


            <!--/ profile header -->

            <!-- profile info section -->
            <section id="profile-info">
                <div class="row font">
                    <!-- left profile info section -->
                    <div class="col-lg-3 col-12 order-1 order-lg-1 order-sm-1">
                        <!-- about -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-75 fontSize"><i class="fa-solid fa-user"></i>
                                    معلومات عن</h5>
                                <p class="card-text">
                                    {{$profile->job}} </p>

                                <div class="mt-2">
                                    <h5 class="mb-75 "><i class="fa-solid fa-location-dot"></i>
                                        يقيم في:
                                    </h5>
                                    <p class="card-text fontSize">{{$profile->city}}</p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75"><i class="fa-solid fa-envelope"></i>
                                        البريد الالكتروني:</h5>
                                    <p class="py-2 card-text fontSize">{{$profile->email}}</p>
                                </div>
                                <h5 class="mb-75 followers-loaded">عدد المتابعين {{$followers->count()}}</h5>
                                <a href="{{$profile->facebook}}"><button type="button" class="btn btn-outline-primary"><i data-feather="facebook"></i></button></a>
                                <a href="{{$profile->twitter}}"><button type="button" class="btn btn-outline-primary"><i data-feather="twitter"></i></button></a>
                                <a href="{{$profile->linkedin}}"><button type="button" class="btn btn-outline-primary"><i data-feather="linkedin"></i></button></a>


                            </div>

                        </div>
                        <!--/ about -->

                        <!-- suggestion pages -->

                        <!--/ suggestion pages -->


                        <!--/ twitter feed card -->
                    </div>

                    <!--/ left profile info section -->

                    <!-- center profile info section -->


                    {{--start posts--}}
                    <div class="col-lg-6 col-12 order-3 order-lg-2">

                        <!-- post 2 -->
                        @foreach($posts as $post)

                            <div class="card">
                                <div class="card-body  call-load-{{$post->id}}">
                                    <div class="d-flex justify-content-start align-items-center mb-1">
                                        <!-- avatar -->
                                        <a href="{{route('profile',$post->user->id)}}">
                                            <div class="avatar me-1">
                                            <img src="{{ $post->user->image != null ? asset('profile_photo/'. $post->user->image) : asset('default_image/u.jpg')}}"
                                                 alt="avatar img" height="50" width="50" />
                                            </div>
                                        </a>
                                        <!--/ avatar -->
                                        <div class="profile-user-info">
                                            <h6 class="mb-0">{{$post->user->name}}</h6>
                                            <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
                                        </div>
                                        <div class="Deleticonn">
                                            @if (Auth::id() === $post->user_id)
                                                <form action="{{ route('delete.post',$post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-post"><i class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="card-text font">
                                        {{$post->body}}
                                    </p>
                                    <!-- post img -->
                                    @if($post->photo != null)
                                        <img class="img-fluid rounded mb-75" src="{{ asset('posts/'.$post->photo) }} " width="400" height="250">
                                    @endif
                                    <!--/ post img -->

                                    <!-- like share -->
                                    <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
                                        <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2 like-heart-check-{{$post->id}}">


                                            {{--start add like and add dislike--}}

                                            @if(DB::table('likeable_likes')->where('likeable_id','=',$post->id)->where('user_id','=',auth()->id())->count() == 0)


                                                <form action="" method="POST">
                                                    @csrf

                                                    <button type="button" class="btn rounded-pill btn-icon btn-label-secondary waves-effect like-post" data-id="{{$post->id}}" style="color:#00000">

                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-body font-medium-3 me-50">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>

                                                </span>
                                                        <span id="count"> {{ $post->likeCount }}</span>
                                                    </button>
                                                </form>


                                            @else
                                                <form action="" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn rounded-pill btn-icon btn-label-secondary waves-effect unlike-post" style="color:#058f00" data-id="{{$post->id}}">

                                                <span>
                                               <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3 me-50">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg>


                                                </span>
                                                        <span id="count"> {{ $post->likeCount }}</span>

                                                    </button>
                                                </form>

                                            @endif
                                            {{--end add like and dislike--}}


                                            <!-- avatar group with tooltip -->
                                            {{--eslam people--}}
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-group ms-1">

                                                </div>
                                            </div>
                                            <!-- avatar group with tooltip -->
                                        </div>

                                        <!-- share and like count and icons -->
                                        <div
                                                class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                                        </div>
                                        <!-- share and like count and icons -->
                                    </div>
                                    <!-- like share -->

                                    <!-- comments -->
                                    @foreach($post->comments as $comment)
                                        <div class="d-flex align-items-start mb-1">
                                            <a href="{{route('profile',$comment->user->id)}}"><div class="avatar mt-25 me-75">
                                                <img src="{{$comment->user->image != null ?asset('profile_photo/'. $comment->user->image) : asset('default_image/u.jpg')}}" alt="Avatar"
                                                     height="34" width="34" />
                                                </div></a>
                                            <div class="profile-user-info w-100">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0">{{$comment->user->name}}</h6>

                                                </div>
                                                <small>{{$comment->body}}</small>
                                                @if($comment->user_id == auth()->id())
                                                <small><button style="float: left;font-size: 12px" type="button" id="delete-comment-{{$comment->id}}" class="btn delete-comment" data-id="{{$comment->id}}" data-post="{{$comment->post_id}}"><i class="fa fa-trash"></i></button> </small>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach


                                    <!--/ comments -->
                                    <!-- comment box -->
                                    <!-- comment box -->
                                    <form method="post" action="">
                                        <fieldset class="mb-75">
                                            <label class="form-label" for="label-textarea">اضف تعليق </label>
                                            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                                            <textarea class="form-control font" id="label-textarea-{{$post->id}}" rows="3"
                                                      placeholder="اكتب هنا تعليقك"></textarea>
                                        </fieldset>
                                        <!--/comment box-->
                                        <button type="button" id="comment-{{$post->id}}" class="btn btn-sm btn-primary font add-comment" data-id="{{$post->id}}"> تعليق</button>
                                    </form>
                                </div>
                            </div>

                        @endforeach
                        <!--/ post 3 -->
                    </div>
                    {{--end of posts--}}
                    <!--/ center profile info section -->

                    <!-- right profile info section -->

                    <!--/ latest profile pictures -->

                    <!-- suggestion -->

                    <!--/ suggestion -->




                    <!-- reload button -->

                    <!--/ reload button -->

                    <div class="col-lg-3 col-12 order-2 order-lg-3 order-sm-1 ">
                        <!-- about -->

                        <div class="card ">
                            <div class="card-body ">
                                <h3><i class="fa-solid fa-users"></i>
                                    اشخاص قد تعرفها</h3>


                                @foreach($users as $user)
                                    <div class="user-cardd">
                                        <a href="{{route('profile',$user->id)}}">
                                            @if ($user->image && file_exists(public_path('profile_photo/'.$user->image)))
                                                <img src="{{ asset('profile_photo/'.$user->image) }}" alt="">
                                            @elseif($user->image)
                                                <img src="{{ asset($user->image) }}" alt="">
                                            @else
                                                <img src="{{ asset('default_image/u.jpg') }}" alt="">
                                            @endif
                                        </a>
                                        <div class="usser-info">
                                            <h4>{{$user->name}}</h4>
                                            <h3>{{$user->job}}</h3>
                                        </div>
                                    </div>
                                @endforeach




                            </div>

                        </div>
                        <div class="card ">
                            <div class="card-body ">
                                <h3><i class="fa-solid fa-bullhorn"></i> اعلان</h3>
                                <img src="{{asset('lms/assets/images/maqalat2.png')}}" alt="">
                            </div>

                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <h3><i class="fa-solid fa-newspaper"></i>
                                    مواضيع قد تهمك</h3>

                                @foreach($articles as $article)
                                    <a href="">
                                        <div class="Sub-card">
                                            <a href="{{route('show.artical',$article->slug)}}">
                                                <img src="{{asset('articles/'. $article->img)}}" alt="">
                                            </a>
                                            <div class="sub-info">
                                                <h3><a href="{{route('show.artical',$article->slug)}}">{{$article->title}}</a></h3>
                                                <h4>{{$article->min_description}}</h4>
                                            </div>

                                        </div>
                                    </a>
                                @endforeach





                            </div>

                        </div>

                        <!--/ about -->

                        <!-- suggestion pages -->

                        <!--/ suggestion pages -->


                        <!--/ twitter feed card -->
                    </div>
                </div></section>
            <!--/ profile info section -->
        </div>

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/page-profile.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    });

    //start like and dislike with Ajax
    $(document).on('click','.unlike-post',function(e) {
        e.preventDefault();
        var post_id = $(this).data("id");
        var url = '{{route("unlike.post", ":id")}}';
        url = url.replace(':id', post_id);

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'post_id': post_id,
            },

            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("social.home")}}';
                    $(".like-heart-check-"+post_id).load(socialMedia + " .like-heart-check-"+post_id).fadeIn("slow");
                }
                else
                    toastr.error('There is an error');
            },

        });
    });


    $(document).on('click','.like-post',function(e) {
        e.preventDefault();
        var post_id = $(this).data("id");
        var url = '{{route("like.post", ":id")}}';
        url = url.replace(':id', post_id);

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'post_id': post_id,
            },

            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("social.home")}}';
                    $(".like-heart-check-"+post_id).load(socialMedia + " .like-heart-check-"+post_id).fadeIn("slow");
                }
                else
                    toastr.error('There is an error');
            },

        });
    });




    //start add comment
    $(document).on('click','.add-comment',function(e) {
        e.preventDefault();
        var url = '{{route("comments.store")}}';
        var post_id = $(this).data("id");
        var body = $("#label-textarea-"+post_id).val();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'body' : body,
                'post_id': post_id,
            },

            beforeSend: function () {
                $('#comment-'+post_id).html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("social.home")}}';
                    $(".call-load-"+post_id).load(socialMedia + " .call-load-"+post_id).fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },

            error: function (data) {

                if (data.status === 422) {
                    $('#comment-'+post_id).html('<span style="margin-left: 4px;"> تعليق</span>').attr('disabled', false);
                    // var errors = $.parseJSON(data.responseText);
                    // $.each(errors, function (key, value) {
                    //     if ($.isPlainObject(value)) {
                    //         $.each(value, function (key, value) {
                    //             toastr.error(value, key);
                    //         });
                    //     }
                    // });
                }
            }//

        });
    });


    //start delete comment ------------------------------------------------------------------
    $(document).on('click','.delete-comment',function(e) {
        e.preventDefault();
        var url = '{{route("comment.delete")}}';
        var id = $(this).data("id");
        var post_id = $(this).data("post");

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'id': id,
            },

            beforeSend: function () {
                $('#delete-comment-'+id).html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">جاري الحذف</span>').attr('disabled', true);
            },
            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("social.home")}}';
                    $(".call-load-"+post_id).load(socialMedia + " .call-load-"+post_id).fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },

            error: function (data) {

                if (data.status === 422) {
                    $('#delete-comment-'+post_id).html('<span style="margin-left: 4px;"> تعليق</span>').attr('disabled', false);
                    // var errors = $.parseJSON(data.responseText);
                    // $.each(errors, function (key, value) {
                    //     if ($.isPlainObject(value)) {
                    //         $.each(value, function (key, value) {
                    //             toastr.error(value, key);
                    //         });
                    //     }
                    // });
                }
            }//

        });
    });


    //start add follow for users
    $(document).on('click','#addFlow',function(e) {
        e.preventDefault();
        var url = '{{route("socialmedia.follow.user")}}';
        var following_id = $("#following_id").val();

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                '_token': "{{csrf_token()}}",
                'following_id': following_id,
            },

            beforeSend: function () {
                $('#addFlow').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {
                var socialMedia = '{{route("social.home")}}';
                if (data.status == 200){
                    $(".flow-now").load(socialMedia + " .flow-now").fadeIn("slow");
                    $(".followers-loaded").load(socialMedia + " .followers-loaded").fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },


        });
    });


    //start un follow for users
    $(document).on('click','#unFlow',function(e) {
        e.preventDefault();
        var url = '{{route("socialmedia.unFollow.user")}}';
        var following_id = $("#following_id").val();

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                '_token': "{{csrf_token()}}",
                'following_id': following_id,
            },

            beforeSend: function () {
                $('#unFlow').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">working</span>').attr('disabled', true);
            },
            success: function (data) {

                if (data.status == 200){
                    var socialMedia = '{{route("social.home")}}';
                    $(".flow-now").load(socialMedia + " .flow-now").fadeIn("slow");
                    $(".followers-loaded").load(socialMedia + " .followers-loaded").fadeIn("slow");
                    toastr.success(data.message);
                }
                else
                    toastr.error('There is an error');
            },


        });
    });
</script>
</body>
<!-- END: Body-->

</html>
