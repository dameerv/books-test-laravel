@extends('app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <hr>
    <article>
            {{ $book->description }}
    </article>
@stop()
