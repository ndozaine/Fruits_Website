@extends('layout.layout')
@section('title', 'Login')
@section('content')

<div>
    <nav class="absolute top-20 right-10 p-4 mr-20 font-bold text-2xl text-white  border-red-600">
        <ul class="flex space-x-4 justify-between">
            <li class="mr-4 ">
                <a href="{{route('home')}}" class="hover:text-yellow-300">HOME</a>
            </li>
            <li class="mr-4 ml-4">
                <a href="#" class="hover:text-yellow-300">ABOUT</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">ORDER</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">BLOG</a>
            </li>
            <li class="mr-4">
                <a href="#" class="hover:text-yellow-300">CONTACT</a>
            </li>
        </ul>
    </nav>
    <div>
        <img id="image1" src="{{ asset('img/apples.jpg') }}" alt="..." class="w-full object-cover">
    </div>
    
</div>



