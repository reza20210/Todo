@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/todo/create" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }}
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a>
        <hr>
    @endforeach
@endsection




