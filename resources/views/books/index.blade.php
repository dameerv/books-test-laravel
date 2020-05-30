@extends('app')

@section('content')
    <h1>Books</h1>
    <hr>
    <article>
        @foreach($books as $book)
            <a href="{{ url('/books', $book->id) }}"><h2>{{ $book->title }}</h2></a>

            <div class="body">{{ $book->description }}</div>
        @endforeach
    </article>
@stop()

