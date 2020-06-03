@extends('welcome')
@section("title")
    <title>Админка</title>
    @stop
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

