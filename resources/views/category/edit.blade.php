@extends('layout')

@section('title')Редактирование категории@stop

@section('content')
    <h1>Редактирование категории</h1>

    <hr>
    <form method="patch" action="/category/{{ $category->id }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}">
        </div>

        <div class="form-group">
            <label for="title">Родительская категория</label>
            <select name="parentCategory" id="parentCategory" class="form-control">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}"
                @if($cat->id === $parentId)
                    selected
                @endif
                >{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@stop