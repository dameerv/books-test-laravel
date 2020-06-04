@extends('admin.index')

@section('content')
    <h1>Добавить автора</h1>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <form action="" entity="author" form="entityUpdateForm">
                <article>
                    <div class="form-group">
                        <label for="author">Имя</label>
                        <input type="text" name="author"  placeholder="Как автора зовут?" id="authorNameInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="information">Информация</label>
                        <input type="text" hidden name="author-id" value="">
                        <input type="text" name="information" placeholder="Добавьте информацию" id="authorInformationInput" class="form-control">

                    </div>
                    <button id="createBtn" type="button" class="btn btn-success">Добавить</button>
                </article>
                @csrf
            </form>
        </div>
        <div class="col-sm-12 col-md-6"></div>
    </div>
@stop()
