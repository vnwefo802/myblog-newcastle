@extends("admin_dashboard.layouts.app")

@section('title', 'Admin - Dashboard')
@section("style")
    <link href="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
@endsection
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@section("wrapper")
<a id="navbarDropdown" class="text-base leading-4 text-white cursor-pointer" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}<br> Alexis Enache
</a>


<div class="page-wrapper">
    <div class="page-content">
        <div class="container mx-auto ">
            <div>
                <div class="py-16 bg-indigo-500 rounded-tl rounded-tr xl:rounded-bl xl:rounded-tr-none">
                    <div class="grid grid-cols-2 grid-rows-4 gap-1 px-8 mx-auto xl:w-5/6 xl:px-0">
                        <!-- total posts -->
                        <div class="relative p-6 bg-green-100 rounded shadow-lg ">
                            <a href="{{ route('admin.posts.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="float-left w-12 h-12 mt-4 mr-2">
                                    <path d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Total Posts</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold" >{{ $post->count() }}</h2>
                                </div>
                            </button></a>
                        </div>
                        <!-- tags -->
                        <div class="relative p-6 bg-pink-100 rounded shadow-lg">
                            <a href="{{ route('admin.tags.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="float-left w-12 h-12 mt-4 mr-2">
                                    <path d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Tags</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold">{{ $tag->count() }}</h2>
                                </div>
                            </button></a>
                        </div>
                        <!-- total comments -->
                        <div class="relative p-6 bg-purple-100 rounded shadow-lg">
                            <a href="{{ route('admin.comments.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="float-left w-12 h-12 mt-4 mr-2">
                                    <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Total Comments</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold">{{ $comment->count() }}</h2>
                                </div>
                            </button></a>
                        </div>
                        <!-- roles -->
                        <div class="relative p-6 bg-orange-100 rounded shadow-lg">
                            <a href="{{ route('admin.roles.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="float-left w-12 h-12 mt-4 mr-2">
                                    <path d="M496 224c-79.63 0-144 64.38-144 144s64.38 144 144 144s144-64.38 144-144S575.6 224 496 224zM544 384h-54.25C484.4 384 480 379.6 480 374.3V304c0-8.836 7.164-16 16-16c8.838 0 16 7.164 16 16v48h32c8.838 0 16 7.164 16 15.1S552.8 384 544 384zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM320 368c0-19.3 3.221-37.82 8.961-55.2C311.9 307.2 293.6 304 274.7 304H173.3C77.61 304 0 381.7 0 477.4C0 496.5 15.52 512 34.66 512H395C349.7 480.2 320 427.6 320 368z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Roles</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold">{{$role->count()}}</h2>
                                </div>
                            </button></a>
                        </div>
                        <!-- pending posts -->
                        <!-- <div class="relative p-6 bg-teal-100 rounded shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class='float-left w-12 h-12 mt-4 mr-2'>
                                <path d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z"/>
                            </svg>
                            <h1 class="pt-4 font-bold leading-none text-gray-800 ">
                            Contacts</h1>
                        </div> -->
                        <!-- categories -->
                        <div class="relative p-6 rounded shadow-lg bg-slate-100">
                            <a href="{{ route('admin.categories.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="float-left w-10 h-10 mt-4 mr-1">
                                    <path d="M472.8 168.4C525.1 221.4 525.1 306.6 472.8 359.6L360.8 472.9C351.5 482.3 336.3 482.4 326.9 473.1C317.4 463.8 317.4 448.6 326.7 439.1L438.6 325.9C472.5 291.6 472.5 236.4 438.6 202.1L310.9 72.87C301.5 63.44 301.6 48.25 311.1 38.93C320.5 29.61 335.7 29.7 344.1 39.13L472.8 168.4zM.0003 229.5V80C.0003 53.49 21.49 32 48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L410.7 218.7C435.7 243.7 435.7 284.3 410.7 309.3L277.3 442.7C252.3 467.7 211.7 467.7 186.7 442.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5L.0003 229.5zM112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Categories</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold" >{{ $Categories->count() }}</h2>
                                </div>
                            </button></a>
                        </div>
                        <!-- user count -->
                        <div class="relative p-6 rounded shadow-lg bg-slate-100">
                            <a href="{{ route('admin.users.index') }}"><button class="flex flex-row w-full h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="float-left w-12 h-12 mt-4 mr-2">
                                    <path d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"/>
                                </svg>
                                <div>
                                    <h1 class="pt-4 font-bold leading-none text-gray-800 ">Users</h1>
                                    <h2 class="m-2 ml-5 text-lg font-semibold">{{$user->count()}}</h2>
                                </div>
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/js/index.js') }}"></script>
@endsection
