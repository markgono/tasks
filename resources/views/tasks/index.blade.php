@extends('layout')

@section('content')
  <h1>Tasks</h1>
  <ul>
    @foreach ($tasks as $task)
      @include('tasks.task')
    @endforeach
  </ul>
  <div class="container mt-3">
    <a href="/tasks/create">Create a new task</a>
  </div>
@endsection