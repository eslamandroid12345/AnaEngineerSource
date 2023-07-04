<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
                                            href="{{url('/')}}"><span class="brand-logo">
                            <img src="{{asset('app-assets/images/logo/logosm.svg')}}" height="40" viewbox="0 0 139 95" version="1.1"
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

                    <li class=""><a class="d-flex align-items-center "
                                    href="{{url('/')}}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="eCommerce">الصفحه الرئيسيه</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font"> الجميع
                    </span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="app-email.html"><i
                        data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الجميع</span></a>
                <ul class="menu-content">
                    <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('home_elms')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="eCommerce">الدورات</span></a>
                    </li>

                    <li><a class="d-flex align-items-center fontSize" href="{{route('all.artical')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="Shop">المقالات</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('all.magazines')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">
                                    المجلات</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font"> حول الموقع </span><i
                    data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i
                        data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="User"> حول
                            الموقع</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('term.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">الشروط والاحكام </span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('policy.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                                                data-i18n="List">سياسه الخصوصيه </span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('question.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    الاسئله الشائعة</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('contact.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    تواصل معنا</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('aboutus.index')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    حول</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('plans_page')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                    خطط الاسعار</span></a>
                    </li>


                </ul>
            </li>



    </div>
</div>
