<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/c.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900 ">
    <div class="flex flex-col items-center justify-center min-h-screen px-5 pt-6 bg-gray-100 sm:pt-0 dark:bg-gray-900">
        <div>
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a> --}}
            <a href="/">
                <img src="{{ Vite::asset('resources/images/cms.png') }}" alt="CMS"
                    class="w-20 h-20 text-gray-500 fill-current">
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white rounded-lg shadow-md sm:max-w-md dark:bg-gray-800">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
