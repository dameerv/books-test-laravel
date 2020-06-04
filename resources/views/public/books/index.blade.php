@extends('app')
@section("nav")
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               Книги
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @include("auth.includes.authNav")
                </ul>
            </div>
        </div>
    </nav>
@stop()
@section('content')
    <br>
    <h1>Книги</h1>
    <hr>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Название</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Описание</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)

                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td><a href="{{ route("BooksShow", $book->id) }}">{{ $book->title }}</a></td>
                            <td>{{$book->getAuthor()->name}}</td>
                            <td>{{ $book->description }}</td>
                        </tr>

                @endforeach
                </tbody>
            </table>
    @if($books->total() > $books->count())
        <div class="pt-3 pb-3">
            {{ $books->links() }}
        </div>
    @endif

@stop()

