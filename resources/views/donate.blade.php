@extends('layouts.app')

@section('title', 'Donate')

@section('content')

<!-- Title and Short Description Section -->
<div class="block">
<div class="py-8 bg-gray-100 bg-gradient-to-t from-gray-100 to-gray-200">
    <h2 class="text-center text-slate-600 text-4xl font-bold m-5">{{ $alldonate->donate_title }}</h2>
    <p class="text-center text-slate-500 text-2xl font-bold m-5">{{ $alldonate->donate_first_short_title }}</p>
    <p class="text-center m-5 text-lg text-slate-400">{{ $alldonate->donate_second_short_title }}</p>
</div>

<!-- Donate Section -->
<div class="bg-gradient-to-r from-green-600 to-green-500 py-5 px-20 block md:flex text-center justify-center drop-shadow-xl">
    <form action="/donate/payment" class="md:inline-block mx-10 flex flex-wrap justify-center">
        <div class="md:inline-block my-10 md:my-10">
        <select name="donationtype" id="donationtype" class="pl-4 pr-12 py-4 bg-white" title="Select either Single Donation or Monthly Donations">
            <option value="Single Donation" title="One Time Donation">Single Donation</option>
            <option value="Monthly Donation" title="Recuring Monthly Donations">Monthly Donations</option>
        </select>
        </div>
        <div class="my-10 block md:hidden ml-5 pl-4 py-4 md:my-10 bg-white">
        <select name="currencydonate" id="currencydonate" class="outline-0" title="Select Currency">
            <option value="Pound" title="Great British Pound">GBP (£)</option>
            <option value="US Dollar" title="Euro">EUR (€)</option>
            <option value="US Dollar" title="United States Dollar">USD ($)</option>
        </select>
        </div>
        <div class="md:inline-block my-10 md:my-10">
        <span class="ml-5 pl-4 py-4 bg-white border-0">
        <select name="currencydonate" id="currencydonate" class="outline-none border-none hidden md:inline-block" title="Select Currency">
            <option value="Pound" title="Great British Pound">GBP (£)</option>
            <option value="US Dollar" title="Euro">EUR (€)</option>
            <option value="US Dollar" title="United States Dollar">USD ($)</option>
        </select>
        <input type="text" id="donateamount" class="mx-2 outline-0" placeholder="5.00" title="Type in the amount you want to donate" required>
        </span>
        </div>
        <div class="md:inline-block my-10 md:my-10">
        <select name="donatetowards" id="donatetowards" class="pl-4 md:pr-12 py-4 ml-5 pr-0" title="What do you want your donation to go towards?">
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
<div class="mx-5 md:mx-20 my-10">
    <h3 class="text-2xl md:text-4xl text-slate-800 mb-5 text-center font-semibold">{!! $alldonate->donate_project_title !!}</h3>
</div>

<div class="px-5 md:px-20 py-10 flex flex-wrap">
    <div class="inline-block mx-5 md:my-2">
    <h4 class="text-4xl ml-4 font-bold leading-6 text-gray-900">{!! $alldonate->donate_objectives__title !!}</h4>
</div>
    <div class="inline-block mx-5 md:">
        <h5 class=" pr-4 ml-4 text-4xl font-bold leading-6 text-gray-900">{!! $alldonate->donate_values_title !!}</h5>
    </div>
</div>

<div class="mx-5 md:mx-20 my-5 md:my-20">
<h6 class="text-2xl">What Can You Do?</h6>
<p class="my-2">Join our volunteer force and give resources and monetary gifts to the Newcastle Foundation or to find out about projects, please call us on <a href="tel:07847583948" class="text-blue-500 underline">07847583948</a></p>
 </div>
</div>

@endsection