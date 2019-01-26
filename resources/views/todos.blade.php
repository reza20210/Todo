@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
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
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">update</a>
        @if(!$todo->completed)
            <a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>
        @else
            <span class="text-success">Completed!</span>
        @endif
        <hr>
    @endforeach
@endsection




