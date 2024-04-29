<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            <div class="h-screen bg-cover bg-no-repeat w-full" style="background-image: url('{{ asset("pexels-creative-vix-7283.jpg") }}')">
                <div class="bg-black/40 backdrop-blur h-full">
                    <header class="h-full text-center max-w-5xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8">
                        <div class="w-full flex items-center justify-center">
                            <div class="max-w-full text-white">
                                <h1 class="text-5xl font-black">{{ __("Thank you for joining us!") }}</h1>
                                <p class="mt-6 text-xl">
                                    {{ __("We will use your email exclusively to send you updates about Lawnscapr and to deliver your coupon code for a lifetime discount, which you can redeem once our public beta launches. If you have any questions, please don't hesitate to contact us at info@bytekit.co.") }}
                                </p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        @livewireScripts
    </body>
</html>

