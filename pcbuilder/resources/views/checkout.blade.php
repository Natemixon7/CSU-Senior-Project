<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="w-4/12 bg-black p-6 rounded-lg">
            <div class="text-white text-center txt-2xl">
                Your Order has been placed!
            </div>
            <div class="text-white txt-xl">Subtotal: </div> <br>
            <div class="text-white" id="cpuName"></div>
            <div class="text-white">
                - ${{$formData['CPUCoolers']}}
            </div>
            <div class="text-white">
                - ${{$formData['CPUs']}}
            </div>
            <div class="text-white">
            - ${{$formData['Cases']}}
            </div>
            <div class="text-white">
            - ${{$formData['GPUs']}}
            </div>
            <div class="text-white">
            - ${{$formData['Motherboards']}}
            </div>
            <div class="text-white">
            - ${{$formData['PSUs']}}
            </div>
            <div class="text-white">
            - ${{$formData['RAM']}}
            </div>
            <div class="text-white">
            - ${{$formData['SSDs']}}
            </div> <br>
            <div class="text-white" id="totalPrice">
                Total:
            </div>
        </div>
    </div>
    
</body>
</html>