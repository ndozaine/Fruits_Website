@extends('layout.layout')
@section('title', 'Login')
@section('content')

<div>
  <div>
    <div class="bg-blue-800 flex justify-center items-center h-64 ">
      <img src="{{ asset('img/grapes.jpg') }}" alt="..." class="w-30 h-20 pr-10">
      <h1 class="font-bold text-center text-white text-4xl">WELCOME <span class="text-yellow-400">TO </span>  AMEBU <span class="text-yellow-400">FRUITS </span> WEBSITE</h1>
    </div>
    <div class="w-full">
      <a href="{{route('navbar')}}">
        <button class="font-bold py-4 px-8 rounded-full text-lg absolute top-23 left-12 p-2 bg-red-500 rounded-4xl hover:bg-white hover:text-red-500 text-white">GET STARTED</button>
      </a>
      <img src="{{ asset('img/grapes.jpg') }}" alt="..." class="w-full object-cover dull-image filter-brightness-50">
    </div>

  </div>

</div>