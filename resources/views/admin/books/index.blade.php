@extends('app')

@section('content')
<h1>Книги</h1>
<hr>
{{--<div class="row">--}}
{{--    <div class="col-sm-12 col-md-6">--}}
<a href="#!" class="btn btn-primary" id="addBookBtn">Добавить</a>
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
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $book->title }}</td>
                    <td>Otto</td>
                    <td>{{ $book->description }}</td>
                    <td><a href="#!" class="btn btn-primary" id="editBookBtn">Изменить</a></td>
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

