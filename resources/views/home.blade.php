@extends('layouts.app')

<head>
    <meta name="description" content="Home ofc trying to make a difference.">
</head>

@section('title', 'Home')
@section('content')


    <header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
        <div class="relative z-40 flex flex-col items-center justify-center max-w-2xl py-10 md:py-32">
            <h1
                class="text-2xl font-semibold leading-8 text-center text-white lg:text-6xl md:text-lg lg:leading-tight md:leading-10 text-shadow-xl">
                {!! $allhome->title !!}</h1>
            {{-- <p class="mt-6 text-sm leading-6 text-center text-white lg:text-base drop-shadow-2xl text-shadow-xl">Our goal is to make sure that everyone has access to health services and educational material. We are committed to making it easier for communities in need and would appreciate any support that you would like to give.</p> --}}
            <!-- donate and volunteer buttons -->
            <div class="flex flex-row w-full justify-evenly md:justify-between">
                <a href="/volunteer"
                    class="flex text-white py-2 md:py-4 mt-12 text-sm bg-blue-700 rounded-md px-5 md:px-20 lg:py-5 lg:text-xl md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700 ml-8 mr-2 md:mr-20 md:ml-20 font-medium">{!! $allhome->button_1 !!}
                    <svg width="24" class="pl-2 mt-1" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z"
                            fill="white" />
                    </svg></a>
                <a href="/donate"
                    class="flex text-white py-2 md:py-4 mt-12 text-sm bg-blue-700 rounded-md px-5 md:px-20 lg:py-5 lg:text-xl md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700 ml-8 mr-2 md:mr-20 md:ml-20 font-medium">{!! $allhome->button_2 !!}
                    <svg width="24" class="pl-2 mt-1" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z"
                            fill="white" />
                    </svg></a>
            </div>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none opacity-99">
            <source src="{{ asset('images/kids runnig.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.


        </video>

        <div class="absolute z-20 w-auto min-w-full min-h-full bg-black opacity-50 max-w-none"></div>
    </header>

    {{-- kid stop --}}





    <!-- boxes -->
    <div class="w-full">
        <div class="py-16 mx-auto my-8 border-b-4 sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:py-20 border-zinc-300">
            <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <!-- first box -->
                <div class="flex flex-col justify-between p-5 border rounded shadow-md shadow-zinc-300">
                    <div>
                        {!! $allhome->box_title_1 !!}
                    </div>
                </div>
                <!-- second box -->
                <div class="flex flex-col justify-between p-5 border shadow-md shadow-zinc-300">
                    <div>
                        {!! $allhome->box_title_2 !!}
                    </div>
                </div>
                <!-- third box -->
                <div class="flex flex-col justify-between p-5 border shadow-md shadow-zinc-300">
                    <div class="m-1">
                        {!! $allhome->box_title_3 !!}
                    </div>
                </div>
                <!-- fouth box -->
                <div class="flex flex-col justify-between p-5 border shadow-md shadow-zinc-300">
                    <div>
                        <h3 class="mb-2 text-lg font-semibold leading-5">{!! $allhome->box_title_4 !!}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- One of our projects -->

    <!-- Brandons Version -->

    <div class="w-full py-12 my-12">
        <div class="mx-auto lg:max-w-screen-xl">
            <h1 class="pb-12 mb-12 text-6xl font-medium text-center uppercase text-zinc-700">One of our projects</h1>
            <div class="grid gap-6 lg:grid-cols-2">
                <!-- project video -->
                <div class="w-full">
                    <video controls alt="video explaning what the project is about">
                        <source src="{{ asset('images/video of the project.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                    {{-- <img src="" class="object-cover object-center w-full h-72 rounded-t-md" alt="Image goes here"> --}}
                </div>

                <div class="px-4 py-4">
                    <div class="flex flex-col">
                        <h2 class="text-3xl font-medium">The Agudele Project</h2>
                        <p class="mt-10">In the community at Agudene in Udenu LGA of Nsukka, Enugu State, we
                            provided over 50 plus classroom
                            desks. Used text books, exercise books, including school drum set, school bags, uniforms for
                            both
                            junior and senior primary. We included a scholarship fund for the girl child. These motivated
                            the
                            villagers and the other villages in the locality to release their girls and wards to come to
                            school.
                        </p>

                        <button
                            class="self-start px-4 py-2 mt-8 text-white rounded from-blue-500 to-green-400 bg-gradient-to-tl hover:from-blue-600 hover:to-green-500">Find
                            out more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="w-full h-full pb-10">
        <div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:pb-20">
            <h2 class="mb-12 text-2xl font-bold text-center text-gray-800">{!! $allhome->project_title !!}</h2>
            <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-2">
                <!-- project image -->
                <div class="w-full h-full">
                    <video controls class="object-cover object-center w-full h-72 rounded-t-md"
                        alt="video explaning what the project is a">
                        <source src="{{ asset('images/video of the project.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                    <img src="" class="object-cover object-center w-full h-72 rounded-t-md" alt="Image goes here">
                </div>
                <!-- informatio about the project -->
                <div class="m-2">
                    <div>
                        <h3 class="text-lg font-semibold">{!! $allhome->project_short_title !!}</h3>
                        <a href="/donate">
                            <button
                                class="text-white border-2 rounded bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-800 hover:to-green-800 drop-shadow-md hover:drop-shadow-xl hover:bg-blue-500">{!! $allhome->project_button !!}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <!-- blog -->
    {{-- <div class="relative pt-16">
    <div class="absolute z-0 w-full mt-4 bg-gray-100 h-72 dark:bg-gray-900"></div>
    <h2 role="heading" class="relative z-20 flex justify-center px-4 py-12 text-2xl font-semibold leading-6 text-gray-800 dark:text-white 2xl:px-20 md:px-6">OUR WEEKLY <span class="pl-2 font-bold">BLOG.</span></h2>
    <div class="relative z-40 flex flex-col items-center justify-center w-full px-8 pt-6 md:flex-row sm:flex-col sm:justify-between">
        <!-- blog post one -->
        @if (!$recentPosts->isEmpty())
        @foreach ($recentPosts as $recent_post)
        <div class="pb-8 2xl:w-auto xl:w-96 lg:w-72 md:w-56 sm:w-64 w-80 sm:pb-0 max-w-[380px]">
            <!-- post image -->
            <div class="relative w-full">

                {{-- <div class="absolute bottom-0 left-0 py-4 text-base font-medium leading-6 text-gray-800 bg-white px-7 dark:text-white">{{  $category->name }}</div> --}}

    {{-- this is the code --}}
    {{-- <img class="w-full max-w-[500px]" src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="image of a person"  width="500" height="600"> --}}
    {{-- <img class="w-full" src="https://i.ibb.co/6W2Yvdj/muzik.png" alt="music keyboard" /> --}}
    {{-- </div> --}}
    <!-- post content -->
    {{-- <p class="pt-4 text-base font-semibold leading-normal text-gray-800 lg:w-72 dark:text-white"> <a href="{{ route('posts.show', $recent_post) }}">
                {{ \Str::limit( $recent_post->title, 20) }}
                </a></p> --}}
    <!-- read more buton -->
    {{-- <a href="/blog/single-blog-post"><button class="flex items-center p-2 pt-4 text-base font-medium leading-4 text-indigo-700 xl:pt-7 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:text-indigo-600 focus:outline-none">
                Read more
                <img class="ml-3" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-2-svg1.svg" alt="arrow"/>
            </button></a> --}}
    <!-- acount of poster -->
    {{-- <div class="flex items-center pt-4">
                <img class="w-6 h-6 rounded-full shadow" src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_2.png" />
                <p class="ml-2 text-xs leading-3 text-gray-800 dark:text-white">Jennifer Wright</p>
            </div>
        </div>
        @endforeach
        @else
            <h1>No weekly posts available</h1>
        @endif
    </div> --}}
    <!-- more posts -->
    {{-- <div class="flex items-center justify-center w-full mt-12">
        <a href="/blog"><button class="px-6 py-3 font-semibold text-white bg-indigo-700 rounded hover:opacity-90 lg:text-2xl lg:px-12 lg:py-6">More Blog Posts →</button></a>
    </div>
</div> --}}

    <!-- MAKE A Difference-->
    <div>
        <div class="lg:flex">
            <!-- contant of make a difference including the buttons -->
            <div class="w-full px-3 py-10 text-white bg-indigo-600 lg:w-2/5 xl:py-24 xl:px-8">
                <h2 class="text-3xl font-semibold lg:w-10/12">{!! $allhome->difference_title !!}</h2>
                <div class="flex items-center">
                    <a href="/volunteer" class="inline-block">
                        <button
                            class="flex items-center py-4 mt-12 text-sm rounded-md bg-slate-800  px-5 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                            <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">
                                {!! $allhome->difference_button_1 !!}</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </a>
                    <a href="/donate" class="inline-block">
                        <button
                            class="flex items-center py-4 mt-12 text-sm rounded-md bg-slate-800 ml-7 px-7 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                            <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">
                                {!! $allhome->difference_button_2 !!}</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <!-- make a difference image -->
            <div class="relative w-full lg:w-3/5">
                <img class="inset-0 object-cover object-center w-full h-full lg:absolute" loading="lazy"
                    src="/{{ $allhome->difference_image }}" alt="Senator of America Jessica Geller" role="img" />
            </div>
        </div>
    </div>
@endsection
