@extends('app')
@section("title")
    <title>Админка</title>
    @stop
@section("nav")
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Админка</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            @include("auth.includes.authNav")
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
<div class="modal" id="messageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageTitle">Сообщение</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modalMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

