@extends('layout')

@section('title'){{ $product->title }}@stop

@section('content')
    <h1>{{ $product->title }}</h1>


    <form action="{{ url('products/'.$product->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-danger">
            <i class="fa fa-trash"></i> Delete
        </button>
    </form>
@stop