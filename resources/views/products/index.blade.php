@extends('layout')

@section('title')Каталог товаров@stop

@section('content')
    <h1>Здесь будут товары</h1>

    <ul>
    @foreach($products as $product)
        <li>{{ $product->title }}</li>
    @endforeach
    </ul>
@stop