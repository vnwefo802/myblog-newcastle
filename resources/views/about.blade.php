@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="flex flex-col items-center justify-center pb-12 bg-gray-200 px-14">
    <div class="m-5">
        <h3 class="py-10 ml-4 text-4xl font-bold leading-6 text-gray-900">About Us</h3>
        <p class="px-4 mt-6 font-semibold leading-6 text-gray-700 text-l">
 {!! $setting->about_text !!}
        </p>
    </div>
</div>

<div class="py-10 bg-gradient-to-b from-gray-200 to-white mb-10"></div>

<div class="mx-20">


    <h1 class="text-5xl font-semibold leading-10 text-center text-gray-800 dark:text-white">Meet our team</h1>
    <div class="flex flex-wrap items-stretch justify-center gap-4 mt-16 xl:justify-between xl:gap-6">
        <div class="grid grid-cols-2 gap-5">
            <div class="grid grid-cols-2 grid-rows-5 gap-4 ">
                <div class="w-[275px]">
                    <img src="{{ asset('storage/' . $setting->about_first_image) }}" class="object-cover object-center w-full h-72 rounded-t-md" alt="woman smiling"/>
                    <div class="py-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{{$setting->about_first_member_name}}</p>
                        <p class="mt-2 text-base leading-6 text-gray-800 dark:text-white"><setting->{{$setting->about_first_member_role}}</setting-></p>
                    </div>
                </div>
                <div class="w-[275px]">
                    <img src="{{ asset('storage/' . $setting->about_second_image) }}" class="object-cover object-center w-full h-72 rounded-t-md" alt="woman in black dress" />
                    <div class="py-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{{$setting->about_second_member_name}}</p>
                        <p class="mt-2 text-base leading-6 text-gray-800 dark:text-white">{{$setting->about_second_member_role}}</p>
                    </div>
                </div>
                <div class="w-[275px]">
                    <img src="{{ asset('storage/' . $setting->about_third_image) }}" class="object-cover object-center w-full h-72 rounded-t-md" alt="woman smiling" />
                    <div class="py-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{{$setting->about_third_member_name}}</p>
                        <p class="mt-2 text-base leading-6 text-gray-800 dark:text-white">{{$setting->about_third_member_role}}</p>
                    </div>
                </div>
                <div class="w-[275px]">
                    <img src="{{ asset('storage/' . $setting->about_fourth_image) }}" class="object-cover object-center w-full h-72 rounded-t-md" alt="woman smiling" />
                    <div class="py-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{{$setting->about_fourth_member_name}}</p>
                        <p class="mt-2 text-base leading-6 text-gray-800 dark:text-white">{{$setting->about_fourth_member_role}}</p>
                    </div>
                </div>
                <div class="w-[275px]">
                    <img src="{{ asset('storage/' . $setting->about_fifth_image) }}" class="object-cover object-center w-full h-72 rounded-t-md" alt="woman smiling" />
                    <div class="py-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{{$setting->about_fifth_member_name}}</p>
                        <p class="mt-2 text-base leading-6 text-gray-800 dark:text-white">{{$setting->about_fifth_member_role}}</p>
                    </div>
                </div>
            </div>
            <div class="felx flex-col">
                <!-- our mission -->
                <div>
                    <div>
                        <button onclick="showmission()" class="flex flex-row  w-full  text-left border-2 border-gray-300 relative">
                            <span class="ml-2">Our mission</span>
                            <svg id="arrow-1-u" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-[26px] w-[24px] absolute right-3">
                                <path d="M374.6 246.6C368.4 252.9 360.2 256 352 256s-16.38-3.125-22.62-9.375L224 141.3V448c0 17.69-14.33 31.1-31.1 31.1S160 465.7 160 448V141.3L54.63 246.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160C387.1 213.9 387.1 234.1 374.6 246.6z"/>
                            </svg>
                            <svg id="arrow-1-d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-[26px] w-[24px] absolute right-3">
                                <path d="M374.6 310.6l-160 160C208.4 476.9 200.2 480 192 480s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 370.8V64c0-17.69 14.33-31.1 31.1-31.1S224 46.31 224 64v306.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0S387.1 298.1 374.6 310.6z"/>
                            </svg>
                        </button>
                    </div>
                    <div id="mission" class=" bg-gray-300 p-2">
                        <p>										 {!! $setting->about_our_mission !!}
</p>
                    </div>
                </div>
                <!-- our vision -->
                <div>
                    <div>
                        <button onclick="showvision()" class="flex flex-row  w-full  text-left border-2 border-gray-300 relative">
                            <span class="ml-2">Our vision</span>
                            <svg id="arrow-2-u" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-[26px] w-[24px] absolute right-3">
                                <path d="M374.6 246.6C368.4 252.9 360.2 256 352 256s-16.38-3.125-22.62-9.375L224 141.3V448c0 17.69-14.33 31.1-31.1 31.1S160 465.7 160 448V141.3L54.63 246.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160C387.1 213.9 387.1 234.1 374.6 246.6z"/>
                            </svg>
                            <svg id="arrow-2-d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-[26px] w-[24px] absolute right-3">
                                <path d="M374.6 310.6l-160 160C208.4 476.9 200.2 480 192 480s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 370.8V64c0-17.69 14.33-31.1 31.1-31.1S224 46.31 224 64v306.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0S387.1 298.1 374.6 310.6z"/>
                            </svg>
                        </button>
                    </div>
                    <div id="vision" class=" bg-gray-300 p-2">
                        <p>{!! $setting->about_our_vision !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var x = document.getElementById("mission");
    var z = document.getElementById("arrow-1-u")
    var c = document.getElementById("arrow-1-d")
    var v = document.getElementById('vision')
    var b = document.getElementById("arrow-2-u")
    var n = document.getElementById("arrow-2-d")
    document.getElementById("mission").addEventListener("wheel", hide());
    function showmission(){
        if (x.style.visibility === 'hidden'){
            x.style.visibility = 'visible'
            x.style.height = '105px'
            c.style.visibility = 'visible'
            z.style.visibility = 'hidden'
        }
        else{
            x.style.visibility = 'hidden'
            x.style.height = '0px'
            z.style.visibility = 'visible'
            c.style.visibility = 'hidden'
        }
    }
    function showvision(){
        if (v.style.visibility === 'hidden'){
            v.style.visibility = 'visible'
            v.style.height = '105px'
            n.style.visibility = 'visible'
            b.style.visibility = 'hidden'
        }
        else{
            v.style.visibility = 'hidden'
            v.style.height = '0px'
            b.style.visibility = 'visible'
            n.style.visibility = 'hidden'
        }
    }
    function hide(){
        x.style.visibility = 'hidden'
        x.style.height = '0px'
        z.style.visibility = 'visible'
        c.style.visibility = 'hidden'
        v.style.visibility = 'hidden'
        v.style.height = '0px'
        b.style.visibility = 'visible'
        n.style.visibility = 'hidden'
    }


</script>



@endsection
