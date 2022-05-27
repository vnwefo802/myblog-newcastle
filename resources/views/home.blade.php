@extends('main_layouts.master')

@section('title', 'Home')

@section('content')

<header class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
    <div class="relative z-40 flex flex-col items-center justify-center max-w-2xl py-10 md:py-32">
        <h1 class="text-2xl font-semibold leading-8 text-center text-white lg:text-6xl md:text-lg lg:leading-tight md:leading-10 text-shadow-xl">Filling the gaps in education and health for communities less fortunate</h1>
        <p class="mt-6 text-sm leading-6 text-center text-white lg:text-base drop-shadow-2xl text-shadow-xl">Our goal is to make sure that everyone has access to health services and educational material. We are committed to making it easier for communities in need and would appreciate any support that you would like to give.</p>
        <!-- donate and volunteer buttons -->
       <div class="flex flex-row">
            <a href="/volunteer" class="inline-block"><button class="flex items-center py-4 mt-12 text-sm bg-blue-700 rounded-md mr-7 px-7 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">Volunteer</p>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z" fill="white" />
                </svg>
                </button>
            </a>
            <a href="/donate" class="inline-block">
                <button class="flex items-center py-4 mt-12 text-sm bg-blue-700 rounded-md ml-7 px-7 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                    <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">Donate</p>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z" fill="white" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
    <video
      autoplay
      loop
      muted
      class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
    >
      <source
        src="{{asset('images/kids runnig.mp4')}}"
        type="video/mp4"
      />
      Your browser does not support the video tag.
    </video>
  </header>

{{-- kid stop --}}



<!-- boxes -->
<div class="w-full h-full">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:py-20">
        <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <!-- first box -->
            <div class="flex flex-col justify-between p-5 ">
                <div>
                    <h2 class="mb-2 text-lg font-semibold leading-5">Join</h2>
                    <p class="mb-3 text-lg text-gray-900">Rem dicta accusantium quaerat maiores aperiam, nostrum quae ducimus recusandae at maiores aperiam, nostrum quae
                    </p>
                </div>
            </div>
            <!-- second box -->
            <div class="flex flex-col justify-between p-5 ">
                <div>
                    <h3 class="mb-2 text-lg font-semibold leading-5">Explore</h3>
                    <p class="mb-3 text-lg text-gray-900">Our training courses also provide an enhancement your current career path opportunity for progression.
                    </p>
                </div>
            </div>
            <!-- third box -->
            <div class="flex flex-col justify-between p-5 ">
                <div class="m-1">
                    <h3 class="mb-2 text-lg font-semibold leading-5">Get a taste of something new:</h3>
                    <p class="mb-3 text-lg text-gray-900">If you're feeling unfulfilled in your current role, our training courses provide the perfect opportunity for you.
                    </p>
                </div>
            </div>
            <!-- fouth box -->
            <div class="flex flex-col justify-between p-5 ">
                <div>
                    <h3 class="mb-2 text-lg font-semibold leading-5">Give your hobbies more weight:</h3>
                    <p class="mb-3 text-lg text-gray-900">including your hobbies can add a lot of value, so why not improve the quality of your hobby by taking our course in it?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- One of our projects -->
<div class="w-full h-full pb-10">
    <div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:pb-20">
        <h2 class="mb-12 text-2xl font-bold text-center text-gray-800">One of our projects</h2>
        <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-2">
            <!-- project image -->
            <div class="w-full h-full">
                <video
                controls
                class="object-cover object-center w-full h-72 rounded-t-md" alt="video explaning what the project is a"
              >
                <source
                  src="{{asset('images/video of the project.mp4')}}"
                  type="video/mp4"
                />
                Your browser does not support the video tag.
              </video>
                {{-- <img src="" class="object-cover object-center w-full h-72 rounded-t-md" alt="Image goes here"> --}}
            </div>
            <!-- informatio about the project -->
            <div class="m-2">
                <div>
                    <h3 class="text-lg font-semibold">The Agudele Project</h3>
                    <p class="text-lg my-9">In the community at Agudene in Udenu LGA of Nsukka, Enugu State, we provided over 50 plus classroom desks. Used text books, exercise books, including school drum set, school bags, uniforms for both junior and senior primary.  We included a scholarship fund for the girl child. These motivated the villagers and the other villages in the locality to release their girls and wards to come to school.</p>
                    <a href="/donate">
                        <button class="text-white border-2 rounded bg-gradient-to-r from-blue-600 to-green-600 hover:from-blue-800 hover:to-green-800 h-14 w-44 m-9 drop-shadow-md hover:drop-shadow-xl hover:bg-blue-500">Find Out More →</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MAKE A Difference-->
<div>
    <div class="lg:flex lg:mt-6 xl:-mt-6">
        <!-- contant of make a difference including the buttons -->
        <div class="w-full px-6 py-10 text-white bg-indigo-800 lg:w-2/5 xl:py-24 xl:px-8">
            <h2 class="text-3xl font-semibold lg:w-10/12">Make a Difference</h2>
            <p class="py-6 text-lg">If you're looking for random facts, you've arrived at the correct webpage. The Random Fact Generator has thousands of facts ready to be revealed with a simple click of a mouse.</p>
            <div class="flex items-center">
                <a href="/volunteer" class="inline-block">
                    <button class="flex items-center py-4 mt-12 text-sm bg-blue-700 rounded-md mr-7 px-7 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                        <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">Volunteer</p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z" fill="white" />
                        </svg>
                    </button>
                </a>
                <a href="/donate" class="inline-block">
                    <button class="flex items-center py-4 mt-12 text-sm bg-blue-700 rounded-md ml-7 px-7 lg:py-5 lg:text-lg md:text-base hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-4 focus:ring-blue-700">
                        <p class="mr-3 text-sm font-medium leading-none text-white lg:text-lg md:text-base">Donate</p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.767 4.4545C12.2063 4.01517 12.9187 4.01517 13.358 4.4545L20.108 11.2045C20.5473 11.6438 20.5473 12.3562 20.108 12.7955L13.358 19.5455C12.9187 19.9848 12.2063 19.9848 11.767 19.5455C11.3277 19.1062 11.3277 18.3938 11.767 17.9545L17.7215 12L11.767 6.0455C11.3277 5.60616 11.3277 4.89384 11.767 4.4545Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5625 12C3.5625 11.3787 4.06618 10.875 4.6875 10.875H18.375C18.9963 10.875 19.5 11.3787 19.5 12C19.5 12.6213 18.9963 13.125 18.375 13.125H4.6875C4.06618 13.125 3.5625 12.6213 3.5625 12Z" fill="white" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <!-- make a difference image -->
        <div class="relative w-full lg:w-3/5">
            <img class="inset-0 object-cover object-center w-full h-full lg:absolute" loading="lazy" src="https://cdn.tuk.dev/assets/components/111220/Hero9/header.png" alt="Senator of America Jessica Geller" role="img" />
        </div>
    </div>
</div>


<!-- MORE FROM US
<div aria-label="group of cards" class="container px-4 py-12 mx-auto focus:outline-none">
    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 lg:pb-10">
         more from us box one
        <div aria-label="card 1" class="px-6 py-6 bg-white shadow-lg focus:outline-none dark:bg-gray-800 text-color f-f-l">
            <h2 class="w-1/2 text-3xl font-bold focus:outline-none dark:text-white">Download the app</h2>
            <div aria-label="download icon" role="img" class="flex items-end justify-end w-full focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12"><path d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM303 392.1C312.4 402.3 327.6 402.3 336.1 392.1L416.1 312.1C426.3 303.6 426.3 288.4 416.1 279C407.6 269.7 392.4 269.7 383 279L344 318.1V184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184V318.1L256.1 279C247.6 269.7 232.4 269.7 223 279C213.7 288.4 213.7 303.6 223 312.1L303 392.1z"/></svg>
            </div>
        </div>
         more from us box two
        <div aria-label="card 2" class="px-6 py-6 bg-white shadow-lg focus:outline-none dark:bg-gray-800 text-color f-f-l">
            <h2 class="w-1/2 text-3xl font-bold focus:outline-none dark:text-white">Effortless onboarding</h2>
            <div aria-label="onboarding icon " role="img" class="flex items-end justify-end w-full focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12"><path d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z"/></svg>
            </div>
        </div>
         ore from us box three
        <div aria-label="card 3" class="px-6 py-6 bg-white shadow-lg focus:outline-none dark:bg-gray-800 text-color f-f-l">
            <h2 class="w-10/12 text-3xl font-bold focus:outline-none dark:text-white">Access from anywhere</h2>
            <div aria-label="responsive icon" role="img" class="flex items-end justify-end w-full focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12"><path d="M0 224C0 188.7 28.65 160 64 160H128V288C128 341 170.1 384 224 384H352V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224zM224 352C188.7 352 160 323.3 160 288V64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224z"/></svg>
            </div>
        </div>
         more form us box four
        <div aria-label="card 4" class="px-6 py-6 bg-white shadow-lg focus:outline-none dark:bg-gray-800 text-color f-f-l">
            <h2 class="w-9/12 text-3xl font-bold focus:outline-none dark:text-white">Build &amp; ship rapidly</h2>
            <div aria-label="success icon" role="img" class="flex items-end justify-end w-full focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-12 h-12"><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"/></svg>
            </div>
        </div>
    </div>
</div>
       -->
<!-- blog -->
<div class="relative pt-16">
    <div class="absolute z-0 w-full mt-4 bg-gray-100 h-72 dark:bg-gray-900"></div>
    <h2 role="heading" class="relative z-20 flex justify-center px-4 py-12 text-2xl font-semibold leading-6 text-gray-800 dark:text-white 2xl:px-20 md:px-6">OUR WEEKLY <span class="pl-2 font-bold">BLOG.</span></h2>
    <div class="relative z-40 flex flex-col items-center justify-center w-full px-8 pt-6 sm:flex-row sm:flex-wrap sm:justify-between">
        <!-- blog post one -->
        @foreach($recentPosts as $recent_post)
        <div class="pb-8 2xl:w-auto xl:w-96 lg:w-72 md:w-56 sm:w-64 w-80 sm:pb-0">
            <!-- post image -->
            <div class="relative w-full">
                <div class="absolute bottom-0 left-0 py-4 text-base font-medium leading-6 text-gray-800 bg-white px-7 dark:text-white">Music</div>
                {{-- this is the code --}}
                {{-- <img class="w-full" src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="image of a person"  width="500" height="600"> --}}
                <img class="w-full" src="https://i.ibb.co/6W2Yvdj/muzik.png" alt="music keyboard" />
            </div>
            <!-- post content -->
            <p class="pt-4 text-base font-semibold leading-normal text-gray-800 lg:w-72 dark:text-white">How playing music every morning can boost your creativity?</p>
            <!-- read more buton -->
            <a href="/blog/single-blog-post"><button class="flex items-center p-2 pt-4 text-base font-medium leading-4 text-indigo-700 xl:pt-7 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:text-indigo-600 focus:outline-none">
                Read more
                <img class="ml-3" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-2-svg1.svg" alt="arrow"/>
            </button></a>
            <!-- acount of poster -->
            <div class="flex items-center pt-4">
                <img class="w-6 h-6 rounded-full shadow" src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_2.png" />
                <p class="ml-2 text-xs leading-3 text-gray-800 dark:text-white">Jennifer Wright</p>
            </div>
        </div>
        @endforeach
        
        <!-- more posts -->
        <div class="flex items-center justify-center w-full mt-12">
            <a href="/blog"><button class="px-6 py-3 font-semibold text-white bg-indigo-700 rounded hover:opacity-90 lg:text-2xl lg:px-12 lg:py-6">More Blog Posts →</button></a>
        </div>
    </div>
</div>

@endsection
