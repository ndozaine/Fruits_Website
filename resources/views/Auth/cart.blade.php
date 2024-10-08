@extends('layout.layout')

@section('title', 'cart')

@section('content')

<div class="container">
    <h2 class="text-2xl font-bold">Shopping Cart</h2>
    <ul class="list-disc pl-5">
        @foreach($cart as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endsection
