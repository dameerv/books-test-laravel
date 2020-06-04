@extends('admin.index')

@section('content')
    <h1>Добавить книгу</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <form action="" entity="book" form="entityUpdateForm">
                <article>
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input type="text" name="title"  placeholder="Введите название" id="bookTitleInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Аавтор</label>
                        <input type="text" hidden name="author-id" value="">
                        <input type="text" name="author" placeholder="Введите автора" id="bookAuthorInput" class="form-control">
                        <ul id="authorsList" class="authors-list d-none">
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="desctription">Описание</label>
                        <input type="text" name="description" placeholder="Введите описание" id="bookDescriptionInput" class="form-control">
                    </div>
                    <button id="createBtn" type="button" class="btn btn-success">Добавить</button>
                </article>
                @csrf
            </form>
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()
