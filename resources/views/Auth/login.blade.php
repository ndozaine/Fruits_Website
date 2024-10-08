@extends('layout.layout')
@section('title', 'Login')
@section('content')

<div class="relative flex flex-col justify-center h-screen overflow-hidden">
    <div class="w-full p-6 m-auto bg-red rounded-md shadow-md ring-2 ring-red-700/90 lg:max-w-xl">
        <h1 class="text-3xl font-semibold text-center text-red-700">Login</h1>
        <form action={{route('loggedPost')}} method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="label">
                    <span class="text-base label-text">Email</span>
                </label>
                <input name="email" type="email" placeholder="Email Address" class="w-full input input-bordered" />
                @error('email')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="label">
                    <span class="text-base label-text">Password</span>
                </label>
                <input name="password" type="password" placeholder="Enter Password" class="w-full input input-bordered" />
                @error('password')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="mt-2 btn btn-block bg-grey-500 hover:bg-red-600 text-xl text-red-700">Login</button>
            </div>
            <span>Dont have an account ?
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Register here</a></span>
        </form> 
        
    </div>
</div>

@endsection
