@extends('app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <hr>
    <article>
            {{ $book->description }}
        <a href="{{ route('BooksUpdate', $book->id) }}" class="btn btn-primary">Редактировать</a>
    </article>
@stop()
