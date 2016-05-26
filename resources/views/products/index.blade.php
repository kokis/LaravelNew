@extends('layout')

@section('title')Каталог товаров@stop

@section('content')
    <h1>Здесь будут товары</h1>

    @foreach($products as $product)
        {{ $product->title }}
    @endforeach
@stop