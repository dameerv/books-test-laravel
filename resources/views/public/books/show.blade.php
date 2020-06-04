@extends('app')
@section("nav")
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Книги') }}
            </a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                @include("auth.includes.authNav")
                </ul>
            </div>
        </div>
    </nav>
@stop()

@section('content')
    @isset($book)
    <br>
    <h1>{{ $book->title }}</h1>
    <hr>
    <p>Автор: {{$book->getAuthor()->name}}</p>
    <article>
            {{ $book->description }}
        <hr>
        <a href="{{ route('Books') }}" class="btn btn-primary">Все книги</a>
    </article>
    @endisset
@stop()
