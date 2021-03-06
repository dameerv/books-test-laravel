@extends('admin.index')

@section('content')
<h1>Книги</h1>
<hr>

<a href="{{ route("AdminBooksAdd") }}" class="btn btn-primary" id="addBookBtn">Добавить</a>
<div class="mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название</th>
                <th scope="col">Автор</th>
                <th scope="col">Описание</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{$book->getAuthor()->name}}</td>
                    <td>{{ $book->description }}</td>
                    <td><a href="{{ route("AdminBooksUpdate", $book->id) }}" class="btn btn-primary" id="editBookBtn">Изменить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
@if($books->total() > $books->count())
    <div class="pt-3 pb-3">
        {{ $books->links() }}
    </div>
@endif


@stop()

