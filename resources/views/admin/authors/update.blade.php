@extends('admin.index')

@section('content')
    <h1>Обновление информации об авторе <span id="h1Span"></span>"{{ $author->name }}"</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <form action="" entity="author">
            <article>
                    <div class="form-group">
                        <label for="title">Имя</label>
                        <input type="text" name="name" value="{{$author->name}}" placeholder="Введите название" id="authorTitleInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Информация</label>
                        <input type="text" name="information" value="{{$author->information}}" placeholder="Введите описание" id="authorDescriptionInput" class="form-control">
                    </div>
                     @csrf
                    <input type="text" hidden name="id" value="{{$author->id}}">
                    <button type="button" id="updateBtn" class="btn btn-success">Обновить</button>
            </article>
        </form>
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()
