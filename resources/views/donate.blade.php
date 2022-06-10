@extends('layouts.app')

@section('title', 'Donate')

<head>
<meta name="description" content="Donate to help communities in need.">
</head>

@section('content')
{{-- <form action="https://www.sandbox.paypal.com/donate" method="post" target="_top">
    <input type="hidden" name="hosted_button_id" value="5CK9H6TCMR4VU" />
    <button class="px-1 py-2 bg-blue-400" type="submit" name="submit" >Pay</button>
    </form> --}}


<!-- Title and Short Description Section -->
<div class="block">
<div class="py-8 bg-gray-100 bg-gradient-to-t from-gray-100 to-gray-200">
    <h2 class="m-5 text-4xl font-bold text-center text-slate-600">{{ $alldonate->donate_title }}</h2>
    <p class="m-5 text-2xl font-bold text-center text-slate-500">{{ $alldonate->donate_first_short_title }}</p>
    <p class="m-5 text-lg text-center text-slate-400">{{ $alldonate->donate_second_short_title }}</p>
</div>

<div class="container mx-auto my-8">
    <form action="{{ route('donate.payment')}}" class="shadow w-3/6 mx-auto flex flex-col px-16 text-center border py-16" method="POST">
        @csrf
        <h3 class="text-3xl font-light">Donate now</h3>
        <p class="py-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo dolor, libero officiis
            nihil, itaque,
            temporibus quidem recusandae dignissimos accusamus maiores et impedit vitae quam? Quam nostrum quaerat odit
            incidunt dolores!</p>


        <div class="relative mb-8 flex justify-center items-center text-2xl font-light">
            <div class="absolute left-3 text-blue-500">&#8358;</div>
            <input type="text" class="border grow pl-8 py-2 font-light" inputmode='numeric' pattern="[0-9.]*" autocomplete="" name="amount" id="">
        </div>
        <button class=" bg-blue-500 text-white px-3 py-2">Donate now</button>
    </form>
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
<p class="my-2">Join our volunteer force and give resources and monetary gifts to the Newcastle Foundation or to find out about projects, please call us on <a href="tel:{{ $footer->contact_info }}" class="text-blue-500 underline">{{ $footer->contact_info }}</a></p>
 </div>
</div>

@endsection