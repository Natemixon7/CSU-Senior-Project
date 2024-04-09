<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="bg-green-500">
<div class="relative sm:flex sm:justify-center sm:items-center bg-center selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Home</a>
                        <a href="{{ url('/pcbuild') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Build PC</a>
                    @else
                        <a href="{{ url('/') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Home</a>
                        <a href="{{ route('login') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black-600 hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
            </div> <!-- class="font-semibold text-black-600 hover:text-white-900 dark:text-white-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> -->
        </div>

<div class="pt-10 flex justify-center">
    <div class="w-4/12 bg-black p-6 rounded-lg">
        <div class="mb-4 text-white text-center text-lg">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="sr-only">{{ __('Email Address') }}</label>

                            
                                <input id="email" type="email" placeholder = "Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                
                                    <span class="invalid-feedback text-red-500 mt-2 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                
                                @enderror
                            
                        </div>

                        <div class="mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" placeholder = "Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="mb-4">
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="flex flex-col items-center">
                            
                                <button type="submit" class="px-6 btn btn-primary bg-green-500 rounded-lg p-2 text-center text-lg resize">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        </div>
                    </form>
        </div>
</div>
</body>
</html>