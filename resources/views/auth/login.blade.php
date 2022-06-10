
@extends('layouts.app')

@section('title', 'Log In')
<head>
<meta name="description" content="Log In Now!">
</head>
@section('content')
<x-guest-layout>
    <x-auth-card>

        <h1 class="font-bold text-2xl text-center text-gray-800 mb-5">Log In</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full py-2 px-4" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full py-2 px-4"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex md:flex-row flex-col items-center justify-end mt-4">
                <div class="order-1">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="my-2 md:order-2 order-3 md:w-[190px]">
                    <span class="text-sm">Don't have an account?
                    <a class="underline  text-gray-600 hover:text-gray-900 m" href="{{ route('register') }}">
                        {{ __('Register now') }}
                    </a></span>
                </div>
                <div class="md:order-3 order-2 md:w-[93px] w-full">
                    <x-button class="md:ml-3 my-2 md:w-[80px] w-full text-center">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection