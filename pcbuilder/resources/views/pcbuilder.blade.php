<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowd Control</title>
    @vite('resources/css/app.css')
    @vite('resources/js/coolerChange.js')
    @vite('resources/js/cpuChange.js')
    @vite('resources/js/cpuChange.js')
    @vite('resources/js/caseChange.js')
    @vite('resources/js/gpuChange.js')
    @vite('resources/js/motherboardChange.js')
    @vite('resources/js/psuChange.js')
    @vite('resources/js/ramChange.js')
    @vite('resources/js/ssdChange.js')
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
    <form method="POST" action="">
        <div class="text-white text-2xl text-center p-4">Choose Your Parts</div>
        <div>
            <label class="text-white" for="CPUCoolers">Select Your CPUCooler: </label> <br>
            <select name="CPUCoolers" id="CPUCoolers" class="w-full rounded-lg p-2">
            @foreach ($CPUCoolers as $CPUCoolers)
                <option value="{{$CPUCoolers->name}}">{{$CPUCoolers->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="CPUs">Select Your CPU: </label>
            <select name="CPUs" id="CPUs" class="w-full rounded-lg p-2">
            @foreach ($CPUs as $CPUs)
                <option value="{{$CPUs->price}}">{{$CPUs->name}}</option>
            @endforeach
            </select>
            <div id="CPUprice" class="text-white"></div>
        </div>
        <br>
        <div>
            <label class="text-white" for="Cases">Select Your Case: </label>
            <select name="Cases" id="Cases" class="w-full rounded-lg p-2">
            @foreach ($Cases as $Cases)
                <option value="{{$Cases->name}}">{{$Cases->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="GPUs">Select Your GPU: </label>
            <select name="GPUs" id="GPUs" class="w-full rounded-lg p-2">
            @foreach ($GPUs as $GPUs)
                <option value="{{$GPUs->name}}">{{$GPUs->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="Motherboards">Select Your Motherboard: </label>
            <select name="Motherboards" id="Motherboards" class="w-full rounded-lg p-2">
            @foreach ($Motherboard as $Motherboard)
                <option value="{{$Motherboard->name}}">{{$Motherboard->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="PSUs">Select Your PSU: </label>
            <select name="PSUs" id="PSUs" class="w-full rounded-lg p-2">
            @foreach ($PSUs as $PSUs)
                <option value="{{$PSUs->name}}">{{$PSUs->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="RAM">Select Your RAM: </label>
            <select name="RAM" id="RAM" class="w-full rounded-lg p-2">
            @foreach ($RAM as $RAM)
                <option value="{{$RAM->name}}">{{$RAM->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <div>
            <label class="text-white" for="Motherboard">Select SSD: </label>
            <select name="SSDs" id="SSDs" class="w-full rounded-lg p-2">
            @foreach ($SSDs as $SSDs)
                <option value="{{$SSDs->name}}">{{$SSDs->name}}</option>
            @endforeach
            </select>
        </div>
        <br>
        <p id="totalPrice" class="text-white">Total Price: </p>
        <br>
        <button type="submit" class="btn btn-primary bg-green-500 rounded-lg p-2 text-center text-lg resize w-full">Submit</button>
    </form>
    </div>
</div>
    
</body>
</html>