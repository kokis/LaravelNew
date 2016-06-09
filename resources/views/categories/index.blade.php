@extends('layout')

@section('title')Категории@stop

@section('content')
    <h1>Категории</h1>

    <ul>
        @foreach($categories as $category)
            <li>{{ $category->title }}</li>
        @endforeach
    </ul>
@stop