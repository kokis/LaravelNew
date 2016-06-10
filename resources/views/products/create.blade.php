@extends('layout')

@section('title')Создание товара@stop

@section('content')
    <h1>Создание товара</h1>

    <hr>
    <form method="post" action="/products">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="article">Артикул</label>
            <input type="text" name="article" id="article">
        </div>

        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="title">Производитель</label>
            <select name="manufacturer" id="manufacturer">
                @foreach($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}">{{ $manufacturer->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Категория</label>
            <select name="category" id="category" multiple size="10">
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