<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowd Control</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/checkout.js')
</head>
<body class="bg-green-500">

<div class="relative sm:flex sm:justify-center sm:items-center bg-center selection:bg-red-500 selection:text-white">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <a href="{{ url('/home') }}" class="font-semibold text-black-600 hover:text-white">
                {{ __('Home') }}
            </a>
            @guest
                @if (Route::has('login'))
                    <a class="font-semibold text-black-600 hover:text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="font-semibold text-black-600 hover:text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
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


    <div class="pt-10 flex justify-center">
        <div class="w-6/12 bg-black p-6 rounded-lg">
            <div class="text-white text-center text-2xl">
                Thank You,
            </div>
            <div class="text-white text-center text-2xl">
                Your Order Has Been Placed!
            </div> <br>
            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">CPU Cooler:</p>
            <div class="text-white" id="Coolertext"></div>
            <p class="text-white text-lg">&emsp; - ${{$formData['CPUCoolers']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">CPU:</p>
            <div class="text-white" id="CPUtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['CPUs']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">Case:</p>
            <div class="text-white" id="Casetext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['Cases']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">GPU:</p>
            <div class="text-white" id="GPUtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['GPUs']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">Motherboard:</p>
            <div class="text-white" id="Motherboardtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['Motherboards']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">PSU:</p>
            <div class="text-white" id="PSUtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['PSUs']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">RAM:</p>
            <div class="text-white" id="RAMtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['RAM']}}</p> <br>

            <p class="text-white font-medium text-center text-xl rounded-lg bg-green-500">SSD:</p>
            <div class="text-white" id="SSDtext"> </div>
            <p class="text-white text-lg">&emsp; - ${{$formData['SSDs']}}</p> <br>

            <div class="text-white font-medium text-xl" id="totalPrice">
                Total:
            </div>
        </div>
    </div>
    
</body>
</html>