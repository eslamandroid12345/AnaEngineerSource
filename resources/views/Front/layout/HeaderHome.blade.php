

<!-- partial:index.partial.html -->
<header>
    <div class='container'>
        <div class='mobile_nav'>
            <button class='burger' title='Open and close menu'>
                <span class='mobile_nav__label'>Open and close menu</span>
                <div class='top stripe'></div>
                <div class='middle stripe'></div>
                <div class='bottom stripe'></div>
            </button>
        </div>
        <div class='mobile_menu'>
            <nav>
                <ul>
                    <li class='visited'>
                        <a href='{{url('/')}}'>الرئيسية</a>
                    </li>
                    <li><a href="{{route('home_elms')}}">الكورسات</a></li>
                    <li class='dropdown'>
                        <a href='#'>الهندسات</a>
                        <div class='dropdown-content'>
                            @foreach($categories as $category)
                                <a href='{{route('articles.index',['category' => $category->id])}}'>{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>

                    <li><a href="{{route('all.magazines')}}">المجلة</a></li>
                    <li><a href="{{route('all.artical')}}">المقالات</a></li>
                    <li><a href="{{route('social.home')}}">المجتمع</a></li>
                    <li class=""><a href="{{route('plans_page')}}">خطط الاشتراك</a></li>

                </ul>
            </nav>
        </div>
        <div class='logo'>
            <img src="{{asset('lms/assets/images/HeaderLogo.png')}}" alt="">
        </div>
        <nav class='head_nav'>
            <ul>
                <li>
                    <a href='{{url('/')}}'>الرئيسية</a>
                </li>
                <li><a href="{{route('home_elms')}}">الكورسات</a></li>
                <li class='dropdown'>
                    <a href='#'>الهندسات</a>
                    <div class='dropdown-content'>
                        @foreach($categories as $category)
                            <a href='{{route('articles.index',['category' => $category->id])}}'>{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li><a href="{{route('all.magazines')}}">المجلة</a></li>
                <li><a href="{{route('all.artical')}}">المقالات</a></li>
                <li><a href="{{route('social.home')}}">المجتمع</a></li>
                <li class=""><a href="{{route('plans_page')}}">خطط الاشتراك</a></li>

            </ul>
        </nav>
        <div class='icons'>
            <div class='block'>
                <!-- <a class='notification' href='#' title='Notifications'>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                </a> -->

            </div>

            @auth
                <a href="{{route('auth.logout')}}"> <h2>تسجيل الخروج</h2></a>
            @else
                <a href="{{route('auth.login')}}"> <h2>تسجيل الدخول</h2></a>
            @endauth
            <div class='block'>
                @auth
                    <a class='user_profile' href='{{ url('socialmedia/'. auth()->id()) }}' title='User profile'>
                        @if (auth()->check() && auth()->user()->google_id)
                            <img src="{{ auth()->user()->image }}" alt="">
                        @elseif (auth()->user()->image)
                            <img src="{{ asset('profile_photo/'. auth()->user()->image) }}" alt="">
                        @else
                            <img src="{{ asset('default_image/y.jpg') }}" alt="">
                        @endif
                    </a>
                @else
                    <a class='user_profile' href='#' title='User profile'>
                        <img src="{{ asset('default_image/u.jpg') }}">
                    </a>
                @endauth


            </div>
        </div>
    </div>
</header>
<main></main>
<!-- partial -->
