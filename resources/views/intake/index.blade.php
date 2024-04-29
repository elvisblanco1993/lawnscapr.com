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

        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("intakeForm").submit();
            }
        </script>
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            <div class="bg-cover bg-no-repeat w-full" style="background-image: url('{{ asset("pexels-creative-vix-7283.jpg") }}')">
                <div class="bg-black/40 backdrop-blur h-full">
                    <div class="w-full h-16">
                        <nav class="h-full max-w-5xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8">
                            <a href="{{ route('home') }}">
                                <x-application-mark class="h-8 w-auto"/>
                            </a>
                        </nav>
                    </div>

                    <header class="max-w-5xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8">
                        <div class="h-96 w-full flex items-center justify-center">
                            <div class="max-w-full text-white">
                                <h1 class="text-5xl font-black">{{ __("Your Landscaping Business, Streamlined") }}</h1>
                                <p class="mt-6 text-xl">
                                    {{ __("Lawnscapr offers a straightforward, no-fuss CRM solution that handles all your management needs with ease. Schedule jobs, manage client details, and send invoices - all with a few simple clicks. Free up your time to focus on what you do best: creating beautiful outdoor spaces.") }}
                                </p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>

            <main class="block max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="my-12 grid md:grid-cols-2 gap-8 items-center">
                    <div class="col-span-1">
                        <h2 class="text-3xl font-bold">{{ __("Everything You Need, All in One Place") }}</h2>
                        <ul class="mt-4 text-lg space-y-2">
                            <li><span class="mr-2">✅</span> {{__("Intuitive Customer Management")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Dynamic Job Scheduling and Dispatch")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Automated Invoicing and Secure Payments")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Real-Time Service Tracking")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Efficient Lead Management")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Integrated Communication Tools")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Insightful Reporting Dashboards")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Mobile Access Anywhere, Anytime")}}</li>
                            <li><span class="mr-2">✅</span> {{__("Robust Security and Regular Backups")}}</li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:col-span-1">
                        <img src="{{ asset('undraw_nature_m5ll.svg') }}" alt="Nature image" class="w-full aspect-square">
                    </div>
                </div>

                <div class="max-w-24 mx-auto bg-slate-700 h-1 rounded-full"></div>

                <div class="my-12 max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold">Get Early Access and Save!</h2>
                    <p class="mt-4 text-lg">{{ __("Sign up today to be the first to know when our public beta goes live, and enjoy an exclusive 20% discount for life. Join us in shaping the future of lawn care management—simpler, smarter, and more efficient.") }}</p>
                    <form id="intakeForm" class="mt-4" method="post" action="{{ route('intake') }}">
                        @csrf
                        <x-input type="email" name="email" class="block mx-auto w-full sm:w-1/2 text-center"/>

                        <x-button class="mt-4 g-recaptcha"
                            data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                            data-callback="onSubmit"
                            data-action="submitContact"
                        >{{ __("Sign me up!") }}</x-button>
                    </form>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0 mt-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>

