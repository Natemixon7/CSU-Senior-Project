<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    @vite('resources/css/app.css')
</head>
<body class="bg-green-500">
    <div class="relative sm:flex sm:justify-center sm:items-center bg-center selection:bg-red-500 selection:text-white">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a href="{{ url('/home') }}" class="font-semibold text-black-600 hover:text-white ml-4">
                {{ __('Home') }}
            </a>
            @guest
                @if (Route::has('login'))
                    <a class="font-semibold text-black-600 hover:text-white ml-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="font-semibold text-black-600 hover:text-white ml-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif

                @else
                    <a class="ml-4 font-semibold text-black-600 hover:text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            @endguest  
        </div>
    </div>

        <main class="mt-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
