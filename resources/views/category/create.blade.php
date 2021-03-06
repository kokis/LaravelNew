@extends('layout')

@section('title')Создание категории@stop

@section('content')
    <h1>Создание категории</h1>

    <hr>
    <form method="post" action="/category">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">Родительская категория</label>
            <select name="parentCategory" id="parentCategory" class="form-control">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@stop