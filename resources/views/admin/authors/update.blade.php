@extends('app')

@section('content')
    <h1>Обновление книги "{{ $book->title }}"</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <form action="">
            <article>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" name="title" value="{{$book->title}}" placeholder="Введите название" id="bookTitleInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Аавтор</label>
                        <input type="text" name="title" value="{{$book->author}}" placeholder="Введите автора" id="bookAuthorInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Описание</label>
                        <input type="text" name="title" value="{{$book->description}}" placeholder="Введите описание" id="bookDescriptionInput" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Обновить</button>
            </article>
        </form>
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()
