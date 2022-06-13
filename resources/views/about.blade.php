@extends('layouts.app')

@section('title', 'About')

@section('content')


    <div class="flex flex-col items-center justify-center pb-12 bg-gray-200 md:px-14">
        <div class="md:m-5">
            <p class="px-4 mt-6 font-semibold leading-6 text-gray-700 text-l">
                {!! $allabout->about_text !!}
            </p>
        </div>
    </div>

    {{-- <div class="border-b-4">
        <div class="container mx-auto my-12">
            <div class="grid grid-cols-3 gap-x-12 gap-y-12">
                <div class="border">
                    <img src="/{{ $allabout->about_first_image }}"
                        class="object-cover object-center w-full h-72 rounded-t-md border-b" alt="woman smiling" />
                    <div class="py-4 px-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md h-[180px]">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{!! $allabout->about_first_member_name !!}
                        </p>
                    </div>
                </div>
                <div class="border">
                    <img src="/{{ $allabout->about_second_image }}"
                        class="object-cover object-center w-full h-72 rounded-t-md border-b" alt="woman in black dress" />
                    <div class="py-4 px-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md h-[180px]">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{!! $allabout->about_second_member_name !!}
                        </p>
                    </div>
                </div>
                <div class="border">
                    <img src="/{{ $allabout->about_third_image }}"
                        class="object-cover object-center w-full h-72 rounded-t-md border-b" alt="woman smiling" />
                    <div class="py-4 px-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md h-[180px]">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{!! $allabout->about_third_member_name !!}
                        </p>
                    </div>
                </div>
                <div class="border">
                    <img src="/{{ $allabout->about_fourth_image }}"
                        class="object-cover object-center w-full h-72 rounded-t-md border-b" alt="woman smiling" />
                    <div class="py-4 px-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md h-[180px]">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{!! $allabout->about_fourth_member_name !!}
                        </p>
                    </div>
                </div>
                <div class="border">
                    <img src="/{{ $allabout->about_fifth_image }}"
                        class="object-cover object-center w-full h-72 rounded-t-md border-b" alt="woman smiling" />
                    <div class="py-4 px-4 text-center bg-white shadow-md dark:bg-gray-800 rounded-b-md h-[180px]">
                        <p class="text-base font-medium leading-6 text-gray-600 dark:text-white">{!! $allabout->about_fifth_member_name !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <script>
        var x = document.getElementById("mission");
        var z = document.getElementById("arrow-1-u")
        var c = document.getElementById("arrow-1-d")
        var v = document.getElementById('vision')
        var b = document.getElementById("arrow-2-u")
        var n = document.getElementById("arrow-2-d")
        document.getElementById("mission").addEventListener("wheel", hide());

        function showmission() {
            if (x.style.visibility === 'hidden') {
                x.style.visibility = 'visible'
                x.style.height = '105px'
                c.style.visibility = 'visible'
                z.style.visibility = 'hidden'
            } else {
                x.style.visibility = 'hidden'
                x.style.height = '0px'
                z.style.visibility = 'visible'
                c.style.visibility = 'hidden'
            }
        }

        function showvision() {
            if (v.style.visibility === 'hidden') {
                v.style.visibility = 'visible'
                v.style.height = '105px'
                n.style.visibility = 'visible'
                b.style.visibility = 'hidden'
            } else {
                v.style.visibility = 'hidden'
                v.style.height = '0px'
                b.style.visibility = 'visible'
                n.style.visibility = 'hidden'
            }
        }

        function hide() {
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





    <div class="container flex justify-center mx-auto py-16">
        <div>
            <p class="text-gray-500 dark:text-gray-200 text-lg text-center font-normal pb-3">BUILDING TEAM</p>
            <h1
                class="xl:text-4xl text-3xl text-center text-gray-800 dark:text-white font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                The Talented People Behind the Scenes of the Organization</h1>
        </div>
    </div>
    <div class="w-full bg-gray-100 dark:bg-gray-800 px-10 pt-10">
        <div class="container mx-auto">
            <div role="list" aria-label="Behind the scenes People "
                class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/photo-1564061170517-d3907caa96ea.jfif"
                                    alt="Display Picture of Andres Berlin" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Andres Berlin</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Chief Executive Officer</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">The CEO's
                                role in raising a company's corporate IQ is to establish an atmosphere that promotes
                                knowledge sharing and collaboration.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                    class="xl:w-1/3 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/photo-1530577197743-7adf14294584.jfif"
                                    alt="Display Picture of Silene Tokyo" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Silene Tokyo</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Product Design Head</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">The emphasis
                                on innovation and technology in our companies has resulted in a few of them establishing
                                global benchmarks in product design and development.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/photo-1566753323558-f4e0952af115.jfif"
                                    alt="Display Picture of Johnson Stone" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Johnson Stone</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Manager Development</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">Our services
                                encompass the assessment and repair of property damage caused by water, fire, smoke, or
                                mold. We can also be a part of the restoration.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/boy-smiling_23-2148155640.jpg"
                                    alt="Display Picture of Dean Jones" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Dean Jones</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Principal Software Engineer</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">An avid
                                open-source developer who loves to be creative and inventive. I have 20 years of experience
                                in the field.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/blond-man-happy-expression_1194-2873.jpg"
                                    alt="Display Picture of Rachel Adams" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Rachel Adams</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Product Design Head</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">Product
                                designer with interests in immersive computing and XR, political ventures, and emerging
                                technologies. Able to take ideas and give them a life.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="https://cdn.tuk.dev/assets/photo-1570211776045-af3a51026f4a.jfif"
                                    alt="Display Picture of Charles Keith" role="img"
                                    class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Charles Keith</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">UX Designer</p>
                            <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">A UX
                                designer is the voice of the customer. Our job is to look beyond the business goals. We
                                don't just experience user interface but also questions it.</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Twitter" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                            alt="twitter" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
