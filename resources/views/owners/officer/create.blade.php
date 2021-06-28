@extends('layouts.app')
@section('content')
@if ($errors->any())
            <div class="w-4/5 m-auto text-center">
                @foreach ($errors->all() as $error)
                <ul>
                    <li class="text-red-500 py-3 list-none"> {{$error}} </li>
                </ul>
                @endforeach
            </div>
@endif
<div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
    <div class="display-inline font-bold italic text-5xl text-center m-auto text-gray-300">
        DCI Officers
    </div>
    <div class="display-inline  italic font-bold text-2xl text-center m-auto text-gray-400">
        NEW Officer
    </div>

    <div class="flex justify-center pt-20">
        <form action="/officer" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="block">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerid" placeholder="officer unique id">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officername" placeholder="officer name">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerdescription" placeholder="officer description">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerrank" placeholder="officer rank">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="armouryvehicle" placeholder="armoury and vehicle in pocession">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="indiscipline"placeholder=" any officer indiscipline report">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="familymembers" placeholder="officer family members">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="contact" placeholder="officer contact">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="email" placeholder="officer email">
                    <input type="file"
                    class="block shadow-5xl mb-2 p-2 w-80 italic"
                    name="image">
                    <button class="bg-gray-900 block shadow-5xl mb-10 p-2 w-80
                    uppercase font-bold hover:text-gray-900 hover:bg-gray-500"
                     type="submit">
                        Submit
                    </button>
                </div>
        </form>
    </div>
    <div class="flex p-3">
        <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
            <a href="{{url('officer')}}">officers</a>
        </button>
        <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
            <a href="{{url('crime')}}">crime</a>
        </button>
        <button class="ml-3 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
            <a href="{{url('/')}}">home</a>
        </button>
    </div>
</div>

@endsection
