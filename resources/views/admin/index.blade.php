@extends('app')
@section("title")
    <title>Админка</title>
    @stop
@section("nav")
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Админи часть</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(url()->current() == route('AdminBooks'))active @endIf">
                    <a class="nav-link" href="{{route('AdminBooks')}}">Книги <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(url()->current() == route('AdminAuthors'))  active @endIf">
                    <a class="nav-link" href="{{route("AdminAuthors")}}">Авторы</a>
                </li>
            </ul>
        </div>
    </nav>

    @stop()
@section('content')

    <div class="content">
        <div class="title m-b-md">
            Книги
        </div>

        <div class="links">
            <a href="{{route('AdminBooks')}}">Книги</a>
            <a href="{{route("AdminAuthors")}}">Авторы</a>
        </div>
    </div>

@stop()

