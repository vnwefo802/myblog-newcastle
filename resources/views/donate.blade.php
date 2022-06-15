@extends('layouts.app')

@section('links')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Donate')

<head>
    <meta name="description" content="Donate to help communities in need.">
</head>

@section('content')
    {{-- <form action="https://www.sandbox.paypal.com/donate" method="post" target="_top">
    <input type="hidden" name="hosted_button_id" value="5CK9H6TCMR4VU" />
    <button class="px-1 py-2 bg-blue-400" type="submit" name="submit" >Pay</button>
    </form> --}}


    
    <div class="bg-[url('/images/banner.jpg')] w-full h-full bg-cover bg-center relative">

        
        <div class="absolute w-full h-full bg-black opacity-20 "></div>

        <div class="container mx-auto z-30 relative flex flex-col items-center pt-14">           
            <h2 class="text-3xl text-white w-11/12 md:w-3/6">We appreciate all the help we can get. Anything you can contribute will help us
                achieve
                our goals quicker.</h2>

                <h1 class="uppercase text-4xl text-white my-8">Donate now</h1>
            <div class="shadow md:w-3/6 w-11/12 flex flex-col md:px-16 text-center border md:py-16 py-6 px-6 bg-white"
                method="POST">
                @csrf

                <h3 class="text-2xl font-light pb-4">Choose amount to donate</h3>

                <div class="donate-desc flex flex-col">
                    <div class="relative mb-8 flex justify-center items-center text-2xl font-light">
                        <div class="absolute left-3 text-blue-500">&#8358;</div>
                        <input type="text" class="border grow pl-8 py-2 font-light w-full donate-amount" inputmode='numeric'
                            pattern="[0-9.]*" autocomplete="" name="amount" id="">
                    </div>
                    <button class=" bg-blue-500 text-white px-3 py-2 donate-button flex justify-center">
                        <svg id="donate-spinner" role="status"
                            class="w-5 h-5 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600 hidden"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        Donate Now
                    </button>

                </div>

                <form id="payment-form" class="py-5 my-4 hidden">
                    {{-- <div>
                    <h3 class="text-3xl mb-5 font-light">Donation Amount - <span class="text-blue-500">&#8358;
                            {{ $amount }}</span></h3>
                </div> --}}
                    @csrf
                    <div id="payment-element">
                        <!--Stripe.js injects the Payment Element-->
                    </div>
                    <button id="submit">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="button-text">Pay now</span>
                    </button>
                    <div id="payment-message" class="hidden"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Title and Short Description Section -->
    <div class="block">
        <div class="py-8 bg-gray-100 bg-gradient-to-t from-gray-100 to-gray-200">
            <h2 class="m-5 text-4xl font-bold text-center text-slate-600">{{ $alldonate->donate_title }}</h2>
            <p class="m-5 text-2xl font-bold text-center text-slate-500">{{ $alldonate->donate_first_short_title }}</p>
            <p class="m-5 text-lg text-center text-slate-400">{{ $alldonate->donate_second_short_title }}</p>
        </div>



        {{-- <!-- Donate Section -->
<div class="justify-center block px-20 py-5 text-center bg-gradient-to-r from-green-600 to-green-500 md:flex drop-shadow-xl">

    <form action="https://www.sandbox.paypal.com/donate" method="post" target="_top" >
        <input type="hidden" name="hosted_button_id" value="5CK9H6TCMR4VU" />
        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
    </form>
</div> --}}

        <!-- Info about what donations do -->
        <div class="mx-5 my-10 md:mx-20">
            <h3 class="mb-5 text-2xl font-semibold text-center md:text-4xl text-slate-800">{!! $alldonate->donate_project_title !!}</h3>
        </div>

        <div class="flex flex-wrap px-5 py-10 md:px-20">
            <div class="inline-block mx-5 md:my-2">
                <h4 class="ml-4 text-4xl font-bold leading-6 text-gray-900">{!! $alldonate->donate_objectives__title !!}</h4>
            </div>
            <div class="inline-block mx-5 md:">
                <h5 class="pr-4 ml-4 text-4xl font-bold leading-6 text-gray-900 ">{!! $alldonate->donate_values_title !!}</h5>
            </div>
        </div>

        <div class="mx-5 my-5 md:mx-20 md:my-20">
            <h6 class="text-2xl">What Can You Do?</h6>
            <p class="my-2">Join our volunteer force and give resources and monetary gifts to the Newcastle
                Foundation or to find out about projects, please call us on <a href="tel:{{ $footer->contact_info }}"
                    class="text-blue-500 underline">{{ $footer->contact_info }}</a></p>
        </div>
    </div>

@endsection
