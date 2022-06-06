@extends('layouts.app')

@section('title', 'Donate')

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

<!-- Donate Section -->
<div class="justify-center block px-20 py-5 text-center bg-gradient-to-r from-green-600 to-green-500 md:flex drop-shadow-xl">

    <form action="https://www.sandbox.paypal.com/donate" method="post" target="_top" >
        <input type="hidden" name="hosted_button_id" value="5CK9H6TCMR4VU" />
        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        </form>

        <div class="my-10 md:inline-block md:my-10">
        <select name="donationtype" id="donationtype" class="py-4 pl-4 pr-12 bg-white" title="Select either Single Donation or Monthly Donations">
            <option value="Single Donation" title="One Time Donation">Single Donation</option>
            <option value="Monthly Donation" title="Recuring Monthly Donations">Monthly Donations</option>
        </select>
        </div>
        <div class="block py-4 pl-4 my-10 ml-5 bg-white md:hidden md:my-10">
        <select name="currencydonate" id="currencydonate" class="outline-0" title="Select Currency">
            <option value="Pound" title="Great British Pound">GBP (£)</option>
            <option value="US Dollar" title="Euro">EUR (€)</option>
            <option value="US Dollar" title="United States Dollar">USD ($)</option>
        </select>
        </div>
        <div class="my-10 md:inline-block md:my-10">
        <span class="py-4 pl-4 ml-5 bg-white border-0">
        <select name="currencydonate" id="currencydonate" class="hidden border-none outline-none md:inline-block" title="Select Currency">
            <option value="Pound" title="Great British Pound">GBP (£)</option>
            <option value="US Dollar" title="Euro">EUR (€)</option>
            <option value="US Dollar" title="United States Dollar">USD ($)</option>
        </select>
        <input type="text" id="donateamount" class="mx-2 outline-0" placeholder="5.00" title="Type in the amount you want to donate" required>
        </span>
        </div>
        <div class="my-10 md:inline-block md:my-10">
        <select name="donatetowards" id="donatetowards" class="py-4 pl-4 pr-0 ml-5 md:pr-12" title="What do you want your donation to go towards?">
            <option value="Where Most Needed">Where Most Needed</option>
            <option value="HealthcareNsukka">Healthcare for Nsukka</option>
            <option value="EducationNsukka">Educational Material for Nsukka</option>
            <option value="WelfareNsukka">Welfare for Nsukka</option>
        </select>
        </div>
        <div class="md:inline-block my-10 md:my-10">
        <input type="submit" class="p-4 ml-5 bg-green-600 text-white hover:bg-white cursor-pointer hover:text-green-600 hover:cursor-pointer rounded transition-colors" value="Donate" title="Donate">
        </div>
    </form>
</div>

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
<p class="my-2">Join our volunteer force and give resources and monetary gifts to the Newcastle Foundation or to find out about projects, please call us on <a href="tel:07847583948" class="text-blue-500 underline">07847583948</a></p>
 </div>
</div>

@endsection
