<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-gray-600 to-gray-900 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-200 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-200 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-200 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth

        </div>
    @endif
</div>
<div class="display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
    DCI Officers
</div>
<div class="ml-20 mt-4 p-20 w-4/5 bg-gradient-to-r from-gray-900 to-gray-600">
    <h1 class="uppercase text-4xl text-center text-gray-500 italic mb-4">dci nairobi</h1>
    <div class="flex">
    <img class="flex-1 w-96 rounded" src="{{asset('images/asa.jpg')}}" alt="">
    <div class="p-4 flex-1 text-gray-400 mt-5">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, debitis.
         Eveniet nesciunt ut nihil quasi vero velit totam temporibus veniam?
        Fuga dolor quaerat perspiciatis iste beatae necessitatibus vero, totam iusto.
        </p>
        <div class="flex p-3">
            <button class="mr-6 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('officer')}}">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('crime')}}">crime</a>
            </button>

        </div>
        <button class=" ml-3 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
            <a href="{{url('home')}}">home</a>
        </button>
    </div>
</div>
    <h1 class="mt-4 uppercase text-2xl text-gray-500 italic mb-4">vision</h1>
    <p class="text-gray-400 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, debitis.
            Eveniet nesciunt ut nihil quasi vero velit totam temporibus veniam?
        Fuga dolor quaerat perspiciatis iste beatae necessitatibus vero, totam iusto.</p>
</div>
<div class=" ml-20 mt-4 p-20 w-4/5 bg-gradient-to-r from-gray-900 to-gray-600">
    <h1 class="mt-4 uppercase text-2xl text-gray-500 italic mb-4">goals</h1>
    <div class="flex">
    <img class="w-96 rounded flex-1" src="{{asset('images/aasa.jpg')}}" alt="">
    <p class="p-3 text-gray-400 mt-5 flex-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, debitis.
            Eveniet nesciunt ut nihil quasi vero velit totam temporibus veniam?
        Fuga dolor quaerat perspiciatis iste beatae necessitatibus vero, totam iusto.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, debitis.
        Eveniet nesciunt ut nihil quasi vero velit totam temporibus veniam?
    Fuga dolor quaerat perspiciatis iste beatae necessitatibus vero, totam iusto.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, debitis.
    Eveniet nesciunt ut nihil quasi vero velit totam temporibus veniam?
Fuga dolor quaerat perspiciatis iste beatae necessitatibus vero, totam iusto.</p>
    </div>
</div>
<div class="ml-20 pl-30 mt-4 p-20 w-4/5 ">
    <footer class=" text-center">
        <hr>
       <p class="mt-4"> &copy;2021 by me</p>
    </footer>
</div>
</body>
</html>
