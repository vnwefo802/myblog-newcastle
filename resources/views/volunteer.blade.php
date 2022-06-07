@extends('layouts.app')

@section('title', 'Volunteer')

@section('content')

{{-- hero --}}


<div class="bg-gray-100 dark:bg-transparent">
    <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
        <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-7 md:leading-10">
            Volunteer Now and Help The
                <span class="text-indigo-700">Communities</span>
                in Need
            </h1>
            <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-400 font-normal text-center text-sm sm:text-lg">Do you want to make a difference? Join our volunteer force now and make a differents!</p>
        </div>
        <div class="flex justify-center items-center">
            {{-- <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-xl lg:font-bold  rounded text-white px-4 sm:px-10 border border-indigo-700 py-2 sm:py-4 text-sm" onclick="scrollForm()">Get Started</button> --}}
            <button onclick="scrollForm()" class="ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-transparent transition duration-150 ease-in-out hover:border-indigo-600 lg:text-xl lg:font-bold rounded border border-indigo-700 text-indigo-700 px-4 sm:px-10 py-2 sm:py-4 text-sm hover:bg-gray-700 hover:text-white">Volunteer Now!</button>
<script>
    function scrollForm() {
    const element = document.getElementById("formscroll");
    element.scrollIntoView();
    }
</script>
        </div>
    </div>
</div>



{{-- We take privacy issues seriously. You can be sure that your personal data is securely protected.

 --}}

<div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-white dark:bg-gray-800 shadow" id="formscroll">

    <span class="inline-block align-middle mr-8">
       We take <b class="capitalize">privacy!</b> issues seriously. You can be sure that your personal data is securely protected.
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
      <span>×</span>
    </button>
  </div>
  <script>
    function closeAlert(event){
      let element = event.target;
      while(element.nodeName !== "BUTTON"){
        element = element.parentNode;
      }
      element.parentNode.parentNode.removeChild(element.parentNode);
    }
  </script>





<div>
    <form id="form" action="{{ route('volunteer.store') }}" method="post" class="container mx-auto w-[1080px] bg-white dark:bg-gray-800 shadow rounded">
        @csrf
        <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
            <div class="flex items-center w-11/12 mx-auto">
                <h1 role="heading"  class="text-lg text-gray-800 dark:text-gray-100 font-bold">Personal Information</h1>
                <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg1.svg" alt="information">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg1dark.svg" alt="information">
                </div>
            </div>
        </div>
        <div class="w-11/12 mx-auto">
            <div class="container mx-auto">
                <div class="my-8 mx-auto xl:w-full xl:mx-0 py-14">
                    <div class="xl:flex lg:flex md:flex flex-wrap justify-evenly">
                        <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 flex flex-col mb-6">
                            <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">First Name</label>
                            <input tabindex="0" aria-label="Enter first name" type="text" name="first_name" required id="first_name" class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none bg-transparent focus:border-indigo-700 text-gray-800 dark:text-gray-100" placeholder="" value="{{ old('first_name') }}"/>
                        </div>
                        <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 flex flex-col mb-6">
                            <label for="LastName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Last Name</label>
                            <input tabindex="0" aria-label="Enter last name" type="text" id="last_name" name="last_name" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none bg-transparent focus:border-indigo-700 text-gray-800 dark:text-gray-100" placeholder="" value="{{ old('last_name') }}" />
                        </div>
                        <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 flex flex-col mb-6">
                            <label for="email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                            <div class="relative">
                                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center px-4 border-r h-full">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg2.svg" alt="mail">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg2dark.svg" alt="mail">
                                </div>
                                <input tabindex="0" aria-label="Enter email address" id="email" name="email" required class="w-full bg-transparent text-gray-800 dark:text-gray-100 focus:outline-none focus:border focus:border-indigo-700 font-normal py-3 flex items-center pl-16 text-sm border-gray-300 rounded border shadow" placeholder="example@gmail.com" value="{{ old('email') }}"/>
                            </div>
                        </div>
                        <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 flex flex-col mb-6">
                            <label for="Country" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Country</label>
                            <input tabindex="0" aria-label="Enter country" type="text" id="country" name="country" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none bg-transparent focus:border-indigo-700 text-gray-800 dark:text-gray-100" placeholder="" value="{{ old('country') }}"/>
                        </div>
                        <div class="xl:w-2/5 lg:w-2/5 md:w-2/5 flex flex-col mb-6">
                            <label for="phone_number" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Phone Number</label>
                            <input tabindex="0" aria-label="Enter Phone number" type="text" id="phone_number" name="phone_number" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none bg-transparent focus:border-indigo-700 text-gray-800 dark:text-gray-100" placeholder="" value="{{ old('phone_number') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full py-4 sm:px-12 px-4 bg-gray-100 dark:bg-gray-700 mt-6 flex justify-end rounded-bl rounded-br">
            <button role="button" aria-label="save form" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm focus:outline-none" type="submit">Save</button>
        </div>
    </form>


</div>

@endsection
