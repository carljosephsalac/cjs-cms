<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/c.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<section class="bg-gradient-to-r from-gray-50 to-gray-300">
    <div class="flex items-center h-screen max-w-screen-xl px-4 py-32 mx-auto">
        <div class="h-full max-w-xl mx-auto mt-48 text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Welcome to CJS-CMS <br>
                <strong class="font-extrabold text-[#FF2D20] sm:block">
                    Created using Laravel
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                A Content Management System where you can, <br>
                Create, Read, Update and Delete Post <br>
                With Authentication and Authorization
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">
                @if (Route::has('login'))
                    @auth
                        <x-secondary-button type='link' href="{{ route('posts.index') }}">
                            {{ __('Home') }}
                        </x-secondary-button>
                    @else
                        <x-secondary-button type='link' href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-secondary-button>
                        @if (Route::has('register'))
                            <x-secondary-button type="link" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-secondary-button>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</section>

<body>

</body>

</html>
