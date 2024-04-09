<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased bg-green-500">
        <div class="items-center justify-center flex mt-4">
            <img src="/images/PcBuildBackground.jpg" class="h-screen" alt="">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-95 p-4 rounded hover:bg-green-500 hover:text-white">
                <a href="{{ route('pcbuilder') }}" class="">{{ __('Customize Your PC') }}</a>
            </div>
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center bg-center selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-black-600 hover:text-white">Home</a>
                        <a href="{{ route('pcbuilder') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Build PC</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-black-600 hover:text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif            
        </div>
        <div class="text-center">
            Photo by <a href="https://unsplash.com/@raddfilms?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" 
                class="hover:text-white">Redd F</a> on 
                    <a href="https://unsplash.com/photos/black-and-green-audio-mixer-YYMVV-qMD6Q?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" 
                        class="hover:text-white">Unsplash</a>
        </div>

    </div>  
</body>   
        
</html>
