@extends('layouts.app')

@section('content')
    <div class="items-center justify-center flex ">
    <img src="/images/PcBuildBackground.jpg" class="h-1/12 w-5/12" alt="">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-95 p-4 rounded hover:bg-green-500 hover:text-white">
            <a href="{{ route('pcbuilder') }}" class="">{{ __('Customize Your PC') }}</a>
        </div>
    </div>
    <div class="text-center">
    Photo by <a href="https://unsplash.com/@raddfilms?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" 
        class="hover:text-white">Redd F</a> on 
        <a href="https://unsplash.com/photos/black-and-green-audio-mixer-YYMVV-qMD6Q?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash" 
            class="hover:text-white">Unsplash</a>
    </div>
    
@endsection
