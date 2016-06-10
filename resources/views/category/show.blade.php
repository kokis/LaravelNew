@extends('layout')

@section('title'){{ $category->title }}@stop

@section('content')
    <h1>{{ $category->title }}</h1>

    @foreach($products as $product)
        <h2>{{ $product->title }}</h2>

        <p>{{ $product->description }}</p>
    @endforeach

@stop