@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="/todo/create" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="todo" placeholder="ایجاد یادداشت جدید">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }}
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">به روز رسانی</a>
        @if(!$todo->completed)
            <a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">انجام شد</a>
        @else
            <span class="text-success">انجام شده</span>
        @endif
        <hr>
    @endforeach
@endsection




