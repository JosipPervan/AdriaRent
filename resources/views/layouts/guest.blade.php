<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AdriaRent') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body class="font-sans text-gray-900 antialiased">
<header>
    <div class="bg-white" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500 md:text-2xl hover:text-indigo-400"
                   href="#">
                   AdriaRent </a>

                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                            class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                 class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-gray-800 hover:text-indigo-400" href="/">Početna</a>
                <a class="text-gray-800 hover:text-indigo-400" href="{{ route('categories.index') }}">Kategorije</a>
                <a class="text-gray-800 hover:text-indigo-400" href="{{ route('equipments.index') }}">Oprema</a>
                <a class="text-gray-800 hover:text-indigo-400" href="{{ route('reservations.index') }}">Napravi Rezervaciju</a>
                <a class="text-gray-800 hover:text-indigo-400" href="{{ route('dashboard') }}">Nadzorna Ploča</a>

            @if (Route::has('login'))

                    @auth


                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="text-gray-800 hover:text-indigo-400">
                                        <div>Opcije</div>


                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit') ">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-800 hover:text-indigo-400">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-800 hover:text-indigo-400">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </div>

</header>

<div class="font-sans text-gray-900 antialiased min-h-screen">
    {{ $slot }}
</div>

<footer class="text-gray-600">
    <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
        <a class="flex items-center justify-center font-medium text-gray-900 md:justify-start">
          <span class="ml-3 text-xl text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">AdriaRent</span>
        </a>
        <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
          <a class="text-gray-500">
            Josip Pervan
          </a>
          <a class="ml-3 text-gray-500">
            Marin Marinčić
          </a>

        </span>
    </div>
</footer>
</div>
</body>
</html>
