<header class="edu-header header-style-1 header-fullwidth no-topbar">
    <div id="edu-sticky-placeholder"></div>
    <div class="header-mainmenu">
        <div class="container-fluid">
            <div class="header-navbar">
                <div class="header-brand">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="header-category">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="has-droupdown">
                                    <a href="#">الهندسات<i class="icon-1"></i></a>
                                    <ul class="submenu">
                                        @foreach($categories as $Category)
                                            <li><a href="{{route('articles.index',['category' => $Category->id])}}">{{$Category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-mainnav">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class=""><a href="{{url('/')}}">الرئيسية</a></li>
                            <li class="has-droupdown"><a href="{{route('home_elms')}}">الكورسات</a>
                                <ul class="submenu">
                                    <li><a href="{{route('certificate')}}">الشهادات</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{route('all.artical')}}">المقالات</a></li>
                            <li class=""><a href="{{route('all.magazines')}}">المجلة</a></li>
                            <li class=""><a href="{{route('social.home')}}">المجتمع</a></li>

                            <li class=""><a href="{{route('plans_page')}}">خطط الاشتراك</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="header-action">
                        <li class="header-btn">
                            @guest
                                <a href="{{route('auth.login')}}" class="edu-btn btn-medium"> تسجيل الدخول <i class="icon-west"></i></a>
                            @endguest
                            @auth
                                <nav class="mainmenu-nav">
                                    <ul class="mainmenu">
                                        <li class="has-droupdown">
                                            <a href="{{url('socialmedia/'. auth()->id())}}">{{Auth::user()->name}}</a>
                                            <ul class="submenu">
                                                <li ><a href="{{route('auth.logout')}}">تسجيل الخروج</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                        @endauth

                        <li class="mobile-menu-bar d-block d-xl-none">
                            <button class="hamberger-button">
                                <i class="icon-54"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                        <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="icon-73"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Search Popup  -->
    <div class="edu-search-popup">
        <div class="content-wrap">
            <div class="site-logo">
                <img class="logo-light" src="{{asset('lms/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                <img class="logo-dark" src="{{asset('lms/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
            </div>
            <div class="close-button">
                <button class="close-trigger"><i class="icon-73"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <button class="submit-button"><i class="icon-2"></i></button>
                    <input type="text" class="edublink-search-popup-field" placeholder="ابحث هنا...">
                </form>
            </div>
        </div>
    </div>
    <!-- End Search Popup  -->
</header>
