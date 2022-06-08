<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('blog_template/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('/blog_template/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blog_template/css/owl.theme.default.min.css') }}">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('blog_template/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('blog_template/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('blog_template/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    @yield('custom_css')

    </head>
    <body>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">

            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="{{ route('home') }}">Blog</a></div>
                        </div>
                        <div class="text-right col-md-10 menu-1">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('categories.index') }}">Categories</a>
                                    <ul class="dropdown">
                                        @foreach($navbar_categories as $category)
                                        <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact.create') }}">Contact</a></li>
                                <li><a href="{{ route('volunteer.create') }}">Volunteer</a></li>
                                <li ><a href="{{ route('donate') }}">Donate</a></li>

                                @guest
                                <li class="btn-cta"><a href="{{ route('login') }}"><span>Sign in</span></a></li>
                                @endguest

                                @auth

                                <li class="has-dropdown">
                                    <a href="#">{{ auth()->user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown">
                                        <li>
                                            <a
                                            onclick="event.preventDefault();
                                            document.getElementById('nav-logout-form').submit()"
                                            href="#">Logout</a>

                                            <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>

                                        </li>
                                    </ul>
                                </li>
                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">

                </ul>
            </div>
        </aside>

        @yield('content')




        <div class="relative flex justify-start md:justify-center md:items-end ">
            <img class="absolute z-0 object-cover w-full h-full dark:hidden top-10 xl:mt-10" loading="lazy" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_5_marketing_background.png" alt="background">
            <div class="relative z-10 flex flex-col items-start justify-start px-4 pt-36 md:pt-32 lg:pt-40 xl:pt-96 md:px-6 xl:px-20 md:justify-center md:items-center">
                <div class="flex flex-col items-start justify-start xl:justify-center xl:space-x-8 xl:flex-row">
                    <div class="flex items-center justify-start space-x-4">
                        <div class="w-12 cursor-pointer">
                            <img class="w-12" height="47px" loading="lazy" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_5_marketing_svg1.svg" alt="logo">
                        </div>
                        {{-- display comapy name --}}
                        <a class="text-xl font-semibold leading-normal text-white w-60 xl:text-2xl" href="{{ url('/') }}">
                            {{ config('app.name', 'NewCastle-Founodation') }}
                        </a>
                    </div>
                        <div class="grid w-full grid-cols-1 mt-12 xl:mt-0 sm:grid-cols-3 gap-y-12 sm:gap-y-0 md:w-auto sm:gap-x-20 md:gap-x-28 xl:gap-8">
                            <div class="flex flex-col items-start justify-start space-y-6 sm:w-40 md:w-auto xl:w-72">
                                <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">COMMUNITY</h2>
                                <a href=" $allfooter->community_link_1 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->community1
                                </button></a>
                                <a href=" $allfooter->community_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->community2
                                </button></a>
                                <a href=" $allfooter->community_link_3 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->community3
                                </button></a>
                                <a href=" $allfooter->community_link_4 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                    $allfooter->community4
                                </button></a>
                            </div>

                            {{-- ROLE 2 --}}
                            <div class="flex flex-col items-start justify-start space-y-6 sm:w-40 md:w-auto xl:w-72">
                                <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">BLOG</h2>
                                <a href=" $allfooter->blog_link_1 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->blog1
                                </button></a>
                                <a href=" $allfooter->blog_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                    $allfooter->blog2
                                </button></a>
                                <a href=" $allfooter->blog_link_3 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->blog3
                                </button></a>
                                <a href=" $allfooter->blog_link_4 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                    $allfooter->blog4
                                </button></a>
                                <a href=" $allfooter->blog_link_5 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->blog5
                                </button></a>
                            </div>
                            <div class="flex flex-col items-start justify-start space-y-6 xl:w-72">
                                <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">CONTACT US</h2>
                                <a href=" $allfooter->contact_link_1 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                                     $allfooter->contact1
                                </button></a>
                                <a href="{{ $allfooter->contact_link_2 "><button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
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
                                </button></a>
                            </div>
                        </div>


                    <div class="flex flex-col-reverse items-center w-full mt-12 xl:justify-between xl:flex-row xl:items-start ">
                        <p class="mt-10 text-sm leading-none text-white md:mt-12 xl:mt-0" >  &copy; <?php echo date('Y'); ?> {{ config('app.name', 'NewCastle-Founodation') }}. All Rights Reserved</p>
                        <div class="flex flex-col items-start justify-start w-full mt-10 space-y-4 md:mt-12 xl:mt-0 md:flex-row md:justify-center md:w-auto md:space-y-0 md:items-center md:space-x-4 xl:space-x-6">
                            <button class="text-base leading-none text-white hover:text-gray-300">
                                <a href="tel:07847583948"><p class="inline-block"><i class="mx-2 fa-solid fa-phone"></i>  $allcontact->Phone_number </p>
                            </button>
                            <button class="text-base leading-none text-white hover:text-gray-300">
                            <a href="mailto: $allcontact->email "><p class="inline-block"><i class="mx-2 fa-solid fa-envelope"></i>  $allcontact->email </p></a>
                            </button>
                        </div>
                         <div class="flex items-start justify-start w-full space-x-6 md:justify-end md:w-auto md:items-center ">
                            <!-- twitter -->
                            <a href=" $allfooter->twitter "><button class="w-6 text-white hover:text-gray-200">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="link to twiter">
                                    <path d="M23.25 5.13282C22.406 5.49955 21.513 5.74116 20.5992 5.85001C21.5595 5.28769 22.2817 4.39434 22.6303 3.33751C21.7224 3.86841 20.7307 4.24092 19.6978 4.43907C19.2629 3.98322 18.7397 3.62059 18.1603 3.3732C17.5808 3.12581 16.9571 2.99884 16.327 3.00001C13.7761 3.00001 11.7117 5.03438 11.7117 7.5422C11.7099 7.89102 11.7499 8.23881 11.8308 8.57813C10.0016 8.49238 8.2104 8.02575 6.57187 7.2081C4.93333 6.39044 3.48351 5.23977 2.31516 3.8297C1.90527 4.52069 1.6885 5.30909 1.6875 6.11251C1.6875 7.68751 2.50922 9.0797 3.75 9.89532C3.01487 9.87787 2.29481 9.68331 1.65094 9.32813V9.38438C1.65094 11.5875 3.24469 13.4203 5.35406 13.8375C4.9574 13.9433 4.54864 13.9968 4.13812 13.9969C3.84683 13.9974 3.5562 13.9691 3.27047 13.9125C3.85687 15.7172 5.56359 17.0297 7.58531 17.0672C5.94252 18.3333 3.9256 19.0175 1.85156 19.0125C1.48341 19.012 1.11561 18.99 0.75 18.9469C2.85993 20.2942 5.31255 21.0068 7.81594 21C16.3172 21 20.9616 14.0766 20.9616 8.07188C20.9616 7.87501 20.9564 7.67813 20.947 7.48595C21.8485 6.84472 22.6283 6.04787 23.25 5.13282V5.13282Z" fill="currentColor"/>
                                    </svg>
                            </button></a>
                            <!-- facebook -->
                            <a href=" $allfooter->facebook "><button class="w-6 text-white hover:text-gray-200">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="link to facebook">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 12.0645C22.5 6.26602 17.7984 1.56445 12 1.56445C6.20156 1.56445 1.5 6.26602 1.5 12.0645C1.5 17.3051 5.33906 21.649 10.3594 22.4374V15.1005H7.69266V12.0645H10.3594V9.75117C10.3594 7.12008 11.9273 5.66555 14.3255 5.66555C15.4744 5.66555 16.6763 5.87086 16.6763 5.87086V8.45508H15.3516C14.048 8.45508 13.6402 9.26414 13.6402 10.0957V12.0645H16.552L16.087 15.1005H13.6406V22.4384C18.6609 21.6504 22.5 17.3065 22.5 12.0645Z" fill="currentColor"/>
                                    </svg>
                            </button></a>
                            <!-- youtube -->
                            <a href=" $allfooter->youtube "><button class="w-6 text-white hover:text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path class="fill-white" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                                </svg>
                            </button></a>
                            <!-- instagram -->
                            <a href=" $allfooter->instagram "><button class="w-6 text-white hover:text-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[21px]">
                                    <path class="fill-white" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                </svg>
                            </button></a>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('blog_template/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('blog_template/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('blog_template/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('blog_template/js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('blog_template/js/jquery.stellar.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('blog_template/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('blog_template/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('blog_template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('blog_template/js/magnific-popup-options.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('blog_template/js/jquery.countTo.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('blog_template/js/main.js') }}"></script>



    </body>
</html>
