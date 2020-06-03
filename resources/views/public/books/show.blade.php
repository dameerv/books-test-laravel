@extends('app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <hr>
    <p>Автор: {{$book->getAuthor()->name}}</p>
    <article>
            {{ $book->description }}
        <hr>
        <a href="{{ route('Books') }}" class="btn btn-primary">Все книги</a>
    </article>
@stop()
