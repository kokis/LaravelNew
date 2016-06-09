@extends('layout')

@section('title')Категории@stop

@section('content')
    <h1>Категории</h1>

    @include('categories.tree', ['categories' => $categories])

@stop