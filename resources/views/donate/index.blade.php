@extends('layouts.app')

@section('links')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
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
  
@endsection
