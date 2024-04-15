@extends('layouts.app')

@section('content')
<div class="pt-10 flex justify-center">
    <div class="w-4/12 bg-black p-6 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class="mb-4 text-white text-center text-lg">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-white">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-white">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback text-white" role="alert">
                                        <strong class="text-white">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 text-white">
                                <button type="submit" class="px-6 btn btn-primary bg-green-500 rounded-lg p-3 mt-2 text-center text-lg text-black resize w-full">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="items-right">
        
                    <form action="{{ route('login') }}">
                    @csrf
                        <button type="Register" class="px-6 btn btn-primary bg-green-500 rounded-lg p-2 text-center text-lg resize mt-10">
                            {{ __('Login') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
