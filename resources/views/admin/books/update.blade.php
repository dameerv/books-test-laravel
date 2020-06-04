@extends('admin.index')

@section('content')
    <h1>Изменить книгу <span id="h1Span">"{{ $book->title }}"</span></h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <form action="" entity="book" form="entityUpdateForm">
            <article>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" name="title" value="{{$book->title}}" placeholder="Введите название" id="bookTitleInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Аавтор</label>
                        <input type="text" name="author" value="{{$book->getAuthor()->name}}" placeholder="Введите автора" id="bookAuthorInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="desctription">Описание</label>
                        <input type="text" name="description" value="{{$book->description}}" placeholder="Введите описание" id="bookDescriptionInput" class="form-control">
                    </div>
                <input type="text" hidden name="book-id" value="{{$book->id}}">
                    <button id="updateBtn" type="button" class="btn btn-success">Обновить</button>
            </article>
            @csrf
        </form>
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()
