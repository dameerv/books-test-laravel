@extends('app')

@section('content')
    <h1>Books</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            @foreach($books as $book)
                <article>

                            <h5 class="card-title">{{ $book->title }}</h5>
            {{--                <h6 class="card-subtitle mb-2 text-muted">Подзаголовок карты</h6>--}}
                            <p class="card-text">{{ $book->description }}</p>
                            <a href="{{ route('BooksShow', $book->id) }}" class="card-link">Посмотреть</a>

                </article>
            @endforeach
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()

