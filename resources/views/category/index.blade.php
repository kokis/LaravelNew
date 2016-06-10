@extends('layout')

@section('title')Категории@stop

@section('content')
    <h1>Категории</h1>

    @include('category.tree', ['categories' => $categories])

@stop