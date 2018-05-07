@extends('layout')

@section('content')
<div class="col-sm-8">
  <h1>Tasks</h1>
  <ul>
    @foreach ($tasks as $task)
      @include('tasks.task')
    @endforeach
  </ul>
  <div class="mt-3">
    <a href="/tasks/create">Create a new task</a>
  </div>
</div>
@endsection