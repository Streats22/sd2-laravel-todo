<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <div class="w-full h-1 rounded" style="background: linear-gradient(70deg, rgb(209, 250, 163) 40%, #fdff84da 100%)"> </div>
    <main class="container mx-auto font-sans">
        <nav class="bg-white bg-opacity-50 ">
            <ul class="flex p-2 ">
                <li class="pl-2"><a class="no-underline text-white uppercase" href="{{route('home') }} ">home</a></li>
                <li class="pl-2"><a class="no-underline text-white uppercase" href="{{route('register') }} ">Register</a></li>
                <li class="pl-2 pr-2 "><a class="no-underline text-white uppercase" href="{{route('login') }}">Login</a></li>
            </ul>
        </nav>
        {{ $slot }}
    </main>
    </body>
</html>
