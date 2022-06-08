@extends('layouts.app')

@section('links')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
      <!-- Display a payment form -->
      <div class="container mx-auto">
          <form id="payment-form" class="w-1/2 mx-auto border py-5 px-5 my-4">
            <div>
                <h3 class="text-3xl mb-5 font-light">Donation Amount - <span class="text-blue-500">&#8358; {{ $amount }}</span></h3>
            </div>
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
@endsection