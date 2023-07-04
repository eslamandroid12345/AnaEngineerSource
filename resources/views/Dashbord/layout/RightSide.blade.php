<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
                                            href="#"><span class="brand-logo">
                            <img src="{{asset('dashbord/app-assets/images/logo/logosm.svg')}}" height="40" viewbox="0 0 139 95" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <h2 class="brand-text  font " style="font-size: medium; color:#058f00 ;"> انا مهندس</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">


        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item fontSize"><a class="d-flex align-items-center " href="index.html"><i
                        data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الصفحه
                            الرئيسيه</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                <ul class="menu-content">

                    <li class=" fontSize"><a class="d-flex align-items-center "
                                             href="{{route('index.admin')}}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="eCommerce">لوحه التحكم</span></a>
                    </li>
                </ul>
            </li>
            @if(Auth::user()->is_admin == 1)

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الجميع
                    </span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" ><i
                        data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الجميع</span></a>
                <ul class="menu-content">

                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('student')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الطلاب</span></a>
                    </li>
                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('course.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الدورات</span></a>
                    </li>

                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('all_admin_magazine')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">المجله</span></a>
                    </li>
                    <li><a class="d-flex align-items-center  fontSize" href="{{route('article.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">المقالات</span></a>
                    </li>
                    <li><a class="d-flex align-items-center  fontSize" href="{{route('allcertificate')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">الشهادات</span></a>
                    </li>

                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">المستخدمين</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                                                      data-i18n="User">المستخدمين</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('users.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">المستخدمين</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('users.moderator')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">المديرين</span></a>
                    </li>

                </ul>
            </li>
{{--            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">التواصل--}}
{{--                        الاجتماعي</span><i data-feather="more-horizontal"></i>--}}
{{--            </li>--}}

{{--            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i--}}
{{--                        data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="User">اعدادات--}}
{{--                            التواصل الاجتماعي</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li><a class="d-flex align-items-center" href="{{route('social.posts')}}"><i--}}
{{--                                data-feather="circle"></i><span class="menu-item text-truncate"--}}
{{--                                                                data-i18n="List">البوستات المنشوره</span></a>--}}
{{--                    </li>--}}
{{--                    --}}{{-- <li><a class="d-flex align-items-center" href="app-user-list.html"><i--}}
{{--                                data-feather="circle"></i><span class="menu-item text-truncate"--}}
{{--                                data-i18n="List">الحسابات المحظوره</span></a>--}}
{{--                    </li> --}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font"> التحكم ب
                        الموقع</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="User"> التحكم
                            ب الموقع</span></a>
                <ul class="menu-content">


                    <li><a class="d-flex align-items-center" href="{{route('plans_page')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    خطط الاسعار</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الدفع</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center fontSize" href="#"><i
                        data-feather="dollar-sign"></i><span class="menu-title text-truncate"
                                                             data-i18n="Pages">الدفع</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center fontSize" href="https://dashboard.stripe.com/products?active=true"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                    data-i18n="List">مدفوعات الكورسات</span></a>
                        </li>

                    </ul>
                </ul>

            </li>
            @endif

            @if(Auth::user()->is_admin == 2)

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" ><i
                        data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الجميع</span></a>
                <ul class="menu-content">

                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('all_admin_magazine')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">المجله</span></a>
                    </li>
                    <li><a class="d-flex align-items-center  fontSize" href="{{route('article.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">المقالات</span></a>
                    </li>
                </ul>
            </li>
            @endif

        </ul>


    </div>
</div>
