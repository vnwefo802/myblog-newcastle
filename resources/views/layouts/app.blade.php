<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="the Website of the newcastle fondation charity"> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="/images/newcastlefoundationlogo_icon.ico">
    {{-- <link rel="icon" type="image/png" href="{{ asset('storage/'.$home->favicon) }}"> --}}


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('links')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- font-awesome --}}
    <script src="https://kit.fontawesome.com/c6b703c269.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Mukta:wght@500&display=swap" rel="stylesheet">
</head>
<body class="{{Request::routeIs('blog.index') ? 'bg-gray-300' : 'bg-white'}} ">


{{-- kyle start --}}


<header>
<div class="hidden py-1 text-base text-center text-white bg-black md:block">
    <p class="inline-block"><a href="tel:07847583948"><i class="mx-2 fa-solid fa-phone"></i>07723817654</a></p> <p class="inline-block"><a href="mailto:$allcontact->email "><i class="mx-2 fa-solid fa-envelope"></i>newcastlefoundation@gmail.com</a></p>
</div>
</header>


  <!-- ========================================= -->
  <!--              Navbar goes here             -->
  <!-- ========================================= -->
<nav class="sticky top-0 z-50 bg-white shadow-lg">
    <div class="px-2 mx-auto lg:px-4">
        <div class="flex justify-between max-h-[60px]">
            <div class="flex space-x-7">
                <div>
                    <!-- ============================================ -->
                    <!--                 Website Logo                 -->
                    <!-- ============================================ -->
                    <a href="/" class="flex items-center" aria-label="NewcastleFoundationLogo">
                        <img src="{{ asset('images/NewcastleFoundationLogo.jpg') }}" width="250" alt="Newcastle logo" aria-label="Newcastle logo" >
                        {{-- <img src="{{ asset('storage/'.$home->logo) }}" class="w-20 h-12 mr-2 sm:h-20 sm:w-32" alt="Newcastle logo" aria-label="Newcastle logo" > --}}


                    </a>
                </div>
                <!-- ============================================ -->
                <!--             Primary Navbar Items             -->
                <!-- ============================================ -->

            </div>
            <!-- ============================================ -->
            <!--            Secondary Navbar Items            -->
            <!-- ============================================ -->
            {{-- Dividers --}}
            {{-- Main Content --}}
            <div class="items-center hidden float-right space-x-1 md:flex">
                {{-- Home --}}
                <div class="items-center hidden space-x-1 md:flex md:sticky">
                    <a href="/" class=" {request()->is('Home')} py-4 px-2 text-gray-500 md:text-sm text-base lg:text-lg font-semibold " id="homehl"  aria-label="Home">Home</a>
                    {{--About  --}}
                    <a href="{{ route('about') }}" class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-blue-500" id="abouthl" aria-label="About">About</a>
                    {{-- Blog --}}
                    <a href="{{ route('blog') }}"><button type="button" class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500" id="bloghl" aria-label="Blog">Blog</button></a>
                    {{-- Contact Us --}}
                    <a href="{{route('contact.create')}}" class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500" id="contacthl" aria-label="contact" >Contact Us</a>
                    <script>
                        function drpdwnFunction() {
                        var element = document.getElementById("blogdrpdwnmenu");
                        element.classList.toggle("hidden");
                        }
                    </script>
                </div>

                    {{-- Log In --}}
                @guest
                @if (Route::has('login'))
                <a  href="{{ route('login') }}" class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 lg:pl-4 md:text-sm lg:text-base hover:text-blue-500" id="loginhl" aria-label="Log In">{{ __('Login') }}</a>

                @endif
                {{-- Sign Up --}}

                @if (Route::has('register'))
                <a class="py-4 text-base font-semibold text-gray-500 transition duration-300 lg:px-4 md:text-sm lg:text-base hover:text-blue-500" id="registerhl" aria-label="Sign Up" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                @else

                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a> --}}

                {{-- Logout --}}
                <a class="px-1 py-4 text-base font-semibold text-gray-500 transition duration-300 border-blue-500 md:text-sm lg:text-base hover:text-blue-500" id="registerhl" aria-label="Log Out" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                @endguest

                {{-- Volunteer --}}
                <a href="{{route('volunteer.create')}}" class="inline-flex items-center justify-center w-full h-12 text-base font-semibold text-white transition duration-200 bg-blue-400 border-2 border-blue-400 rounded md:px-1 lg:px-6 hover:border-blue-500 md:w-auto hover:bg-blue-500 focus:shadow-outline focus:outline-none dark:focus:ring-blue-500 md:text-sm lg:text-base" aria-label="Volunteer">
                    Volunteer
                </a>

                <!-- Divider -->
                <div class="mx-5"></div>

                {{-- Donate --}}
                <a href="{{route('donate')}}" class="inline-flex items-center justify-center w-full h-12 text-base font-semibold text-white transition duration-200 bg-green-600 border-2 border-green-600 rounded md:px-1 lg:px-6 hover:border-green-700 md:w-auto hover:bg-green-700 focus:shadow-outline focus:outline-none dark:focus:ring-green-700 md:text-sm lg:text-base" aria-label="Donate">
                    Donate
                </a>
            </div>
            <!-- ============================================ -->
            <!--               Mobile Menu Button             -->
            <!-- ============================================ -->
            <div class="flex items-center md:hidden">
                {{-- phone icon --}}
                <a href="tel:07847583948"><i class="mx-2 fa-solid fa-phone"></i></a>
                {{-- email icon --}}
                <a class="m-2" href="mailto:example@example.com"><i class="mx-2 fa-solid fa-envelope"></i></a>
                {{-- login icon --}}
                <a class="m-2" href="{{ route('login') }}" aria-label="login button"  alt="login button" title="login"><i class="fa-solid fa-user"></i></a>
                {{-- Sign Up --}}
                <a aria-label="Sign Up" href="{{ route('register') }}" class="inline-flex items-center justify-center w-full h-12 p-1 px-3 m-2 text-base font-semibold text-white transition duration-200 bg-indigo-800 border-2 border-indigo-800 rounded-full md:px-1 lg:px-6 hover:border-indigo-500 md:w-auto hover:bg-indigo-500 focus:shadow-outline focus:outline-none dark:focus:ring-indigo-500 md:text-sm lg:text-base " aria-label="Sign Up">
                    Sign Up
                </a>
                <button class="outline-none mobile-menu-button"  aria-label="Toggle Button">
                    <svg class="w-6 h-6 m-1 text-gray-500 hover:text-indigo-500"alt="Toggle Button"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- ============================================ -->
    <!--                  Mobile Menu                 -->
    <!-- ============================================ -->
    <div class="hidden mobile-menu">
        <ul class="pl-3">
            {{-- Home --}}
            <li class="active"><a  href="{{route('home')}}" class="block px-2 py-4 text-sm transition duration-300 border-indigo-500 hover:text-indigo-500" aria-label="Home" id="homehlm">Home</a></li>
            {{-- About --}}
            <li><a  href="{{route('about')}}" class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500" aria-label="About" id="abouthlm">About</a></li>
            {{-- Contact us --}}
            <li><a href="{{route('contact.create')}}" class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500" aria-label="Contact"  id="contacthlm">Contact us</a></li>
            {{-- Blog --}}
            <li><a href="{{route('blog')}}" class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500" aria-label="Blog" id="bloghlm">Blog</a></li>
            {{-- volunteer --}}
            <li><a href="{{route('volunteer.create')}}" class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500" aria-label="Volunteer" id="volunteerhlm">Volunteer</a></li>
            {{-- Blog --}}
            <li><a href="{{route('donate')}}" class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500" aria-label="Donate" id="donatehlm">Donate</a></li>
        </ul>
    </div>
    <script>
    //<!-- ============================================ -->
    //<!--                  nav mobile                  -->
    //<!-- ============================================ -->
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/'));
    console.log(sPage);
    //homepage highlight script
    if(sPage == "/"){
        document.getElementById("homehl").classList.remove('text-gray-500');
        document.getElementById("homehl").classList.add('text-blue-500');
        document.getElementById("homehlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //about page highlight script
    if(sPage == "/about"){
        document.getElementById("abouthl").classList.remove('text-gray-500');
        document.getElementById("abouthl").classList.add('text-blue-500');
        document.getElementById("abouthlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //blog page highlight script
    if(sPage == "/blog"){
        document.getElementById("bloghl").classList.remove('text-gray-500');
        document.getElementById("bloghl").classList.add('text-blue-500');
        document.getElementById("bloghlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //contact page highlight script
    if(sPage == "/contact"){
        document.getElementById("contacthl").classList.remove('text-gray-500');
        document.getElementById("contacthl").classList.add('text-blue-500');
        document.getElementById("contacthlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //volunteer page highlight script
    if(sPage == "/volunteer"){
        document.getElementById("volunteerhlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //donate page highlight script
    if(sPage == "/donate"){
        document.getElementById("donatehlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
    }
    //login page highlight script
    if(sPage == "/login"){
        document.getElementById("loginhl").classList.remove('text-gray-500');
        document.getElementById("loginhl").classList.add('text-blue-500');
    }
    //register page highlight script
    if(sPage == "/register"){
        document.getElementById("registerhl").classList.remove('text-gray-500');
        document.getElementById("registerhl").classList.add('text-blue-500');
    }
    </script>
</nav>

{{-- kyle ed --}}

<script src="{{ asset('js/functions.js') }}"></script>


<main>
    @yield('content')
</main>



<div class="relative flex justify-start md:justify-center md:items-end ">
    <img class="absolute z-0 object-cover w-full h-full dark:hidden top-10 xl:mt-10" loading="lazy" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_5_marketing_background.png" alt="background">
    <div class="relative z-10 flex flex-col items-start justify-start px-4 pt-36 md:pt-32 lg:pt-40 xl:pt-96 md:px-6 xl:px-20 md:justify-center md:items-center">
        <div class="flex flex-col justify-center">
            <div class="flex items-center justify-start space-x-4 ">
                <div class="cursor-pointer mb-8 border rounded shadow">
                    <a href="/">
                        <img class="w-[163px] h-[55px] hover:scale-[1.1]" loading="lazy" src="{{ asset('images/NewcastleFoundationLogo.jpg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="justify-center grid w-full grid-cols-1 mt-12 xl:mt-0 sm:grid-cols-4 gap-y-12 sm:gap-y-0 md:w-auto sm:gap-x-20 md:gap-x-28 xl:gap-8">
                <div class="cursor-pointer mb-8 border rounded shadow">
                    <a href="/">
                        <img class="w-[163px] h-[55px] hover:scale-[1.1]" loading="lazy" src="{{ asset('images/NewcastleFoundationLogo.jpg') }}" alt="logo">
                    </a>
                </div>
                <div class="flex flex-col items-start justify-start space-y-6 sm:w-40 md:w-auto xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">COMMUNITY</h2>
                    <a href="  {!! $footer->community_section !!}">
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->community_section !!}
                    </button>
                    </a>

                    {{-- <a href=" $allfooter->community_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                            $allfooter->community2
                    </button></a>
                    <a href=" $allfooter->community_link_3 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                            $allfooter->community3
                    </button></a>
                    <a href=" $allfooter->community_link_4 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $allfooter->community4
                    </button></a> --}}
                </div>

                {{-- ROLE 2 --}}
                <div class="flex flex-col items-start justify-start space-y-6 sm:w-40 md:w-auto xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">BLOG</h2>
                    <a href=" {!! $footer->blog_section !!} ">
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->blog_section !!}
                    </button>
                </a>

                    {{-- <a href=" $allfooter->blog_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $allfooter->blog2
                    </button></a>
                    <a href=" $allfooter->blog_link_3 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                            $allfooter->blog3
                    </button></a>
                    <a href=" $allfooter->blog_link_4 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $allfooter->blog4
                    </button></a>
                    <a href="#"><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $hpp->blog5
                    </button></a> --}}
                </div>


                <div class="flex flex-col items-start justify-start space-y-6 xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">CONTACT US</h2>
                    <a href=" {!! $footer->contact_us_section !!} ">
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->contact_us_section !!}
                    </button></a>

                    {{-- <a href="{{ $allfooter->contact_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $allfooter->contact2
                    </button></a>
                    <a href=" $allfooter->contact_link_3 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                            $allfooter->contact3
                    </button></a>
                    <a href=" $allfooter->contact_link_4 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                            $allfooter->contact4
                    </button></a>
                    <a href=" $allfooter->contact_link_5 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        $allfooter->contact5
                    </button></a> --}}
                </div>
            </div>


            <div class="flex flex-col-reverse justify-center w-full mt-16  xl:flex-row xl:items-start ">
                <div class="flex flex-col items-start justify-start w-full mt-10 space-y-4 md:mt-12 xl:mt-0 md:flex-row md:justify-center md:w-auto md:space-y-0 md:items-center md:space-x-4 xl:space-x-6 mr-7">
                    <button class="text-base leading-none text-white hover:text-gray-300">
                        <a href="tel:07847583948"><p class="inline-block"><i class="mx-2 fa-solid fa-phone"></i>  $allcontact->Phone_number </p>
                    </button>
                    <button class="text-base leading-none text-white hover:text-gray-300">
                    <a href="mailto: $allcontact->email "><p class="inline-block"><i class="mx-2 fa-solid fa-envelope"></i>  $allcontact->email </p></a>
                    </button>
                </div>
                <div class="flex items-start justify-start w-full space-x-6 md:justify-end md:w-auto md:items-center ">                    
                    <!-- twitter -->
                    <a href=" {{ $footer->twitter }} "><button class="w-6 text-white hover:text-gray-200">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="link to twiter">
                            <path d="M23.25 5.13282C22.406 5.49955 21.513 5.74116 20.5992 5.85001C21.5595 5.28769 22.2817 4.39434 22.6303 3.33751C21.7224 3.86841 20.7307 4.24092 19.6978 4.43907C19.2629 3.98322 18.7397 3.62059 18.1603 3.3732C17.5808 3.12581 16.9571 2.99884 16.327 3.00001C13.7761 3.00001 11.7117 5.03438 11.7117 7.5422C11.7099 7.89102 11.7499 8.23881 11.8308 8.57813C10.0016 8.49238 8.2104 8.02575 6.57187 7.2081C4.93333 6.39044 3.48351 5.23977 2.31516 3.8297C1.90527 4.52069 1.6885 5.30909 1.6875 6.11251C1.6875 7.68751 2.50922 9.0797 3.75 9.89532C3.01487 9.87787 2.29481 9.68331 1.65094 9.32813V9.38438C1.65094 11.5875 3.24469 13.4203 5.35406 13.8375C4.9574 13.9433 4.54864 13.9968 4.13812 13.9969C3.84683 13.9974 3.5562 13.9691 3.27047 13.9125C3.85687 15.7172 5.56359 17.0297 7.58531 17.0672C5.94252 18.3333 3.9256 19.0175 1.85156 19.0125C1.48341 19.012 1.11561 18.99 0.75 18.9469C2.85993 20.2942 5.31255 21.0068 7.81594 21C16.3172 21 20.9616 14.0766 20.9616 8.07188C20.9616 7.87501 20.9564 7.67813 20.947 7.48595C21.8485 6.84472 22.6283 6.04787 23.25 5.13282V5.13282Z" fill="currentColor"/>
                            </svg>
                    </button></a>
                    <!-- facebook -->
                    <a href=" {{ $footer->facebook }} "><button class="w-6 text-white hover:text-gray-200">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="link to facebook">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 12.0645C22.5 6.26602 17.7984 1.56445 12 1.56445C6.20156 1.56445 1.5 6.26602 1.5 12.0645C1.5 17.3051 5.33906 21.649 10.3594 22.4374V15.1005H7.69266V12.0645H10.3594V9.75117C10.3594 7.12008 11.9273 5.66555 14.3255 5.66555C15.4744 5.66555 16.6763 5.87086 16.6763 5.87086V8.45508H15.3516C14.048 8.45508 13.6402 9.26414 13.6402 10.0957V12.0645H16.552L16.087 15.1005H13.6406V22.4384C18.6609 21.6504 22.5 17.3065 22.5 12.0645Z" fill="currentColor"/>
                            </svg>
                    </button></a>
                    <!-- youtube -->
                    <a href=" {{ $footer->youtube }} "><button class="w-6 text-white hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path class="fill-white" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                        </svg>
                    </button></a>
                    <!-- instagram -->
                    <a href=" {{ $footer->instagram }} "><button class="w-6 text-white hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[21px]">
                            <path class="fill-white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </button></a>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-center w-full mt-16 lg:flex-row">
                <p class="mt-10 text-sm leading-none text-white md:mt-12 " >  &copy; <?php echo date('Y'); ?> {{ config('app.name', 'NewCastle-Founodation') }}. All Rights Reserved</p>
            </div>
        </div>

    </div>


    <script src="{{ asset('js/functions.js') }}"></script>
    @yield('custom_js')
</body>
</html>
