@extends('admin.index')

@section('content')
<h1>Авторы</h1>
<hr>
<a href="{{ route("AdminAuthorsAdd") }}" class="btn btn-primary" id="addBookBtn">Добавить</a>
<div class="mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Информация</th>
                <th scope="col">Книг написал</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->information }}</td>
                    <td class="text-center">{{ $author->getBooksQuantity() }}</td>
                    <td><a href="{{ route("AdminAuthorsUpdate", $author->id) }}" class="btn btn-primary" id="editAuthorBtn">Изменить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>

@if($authors->total() > $authors->count())
    <div class="pt-3 pb-3">
        {{ $authors->links() }}
    </div>
@endif


@stop()

