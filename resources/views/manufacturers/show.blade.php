@extends('layout')

@section('title'){{ $mnf->title }}@stop

@section('content')
    <h1>{{ $mnf->title }}</h1>

    <h2>Товары производителя</h2>

    <ul>
        @foreach($mnf->products as $product)
            <li>{{ $product->id }}. {{ $product->title }}</li>
        @endforeach
    </ul>
@stop