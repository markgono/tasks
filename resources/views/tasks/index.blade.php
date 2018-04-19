@extends('layout')

@section('content')
  <ul>
    @foreach ($tasks as $task)
      <li>
        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
      </li>
    @endforeach
  </ul>
  <div class="container mt-3">
    <a href="/tasks/create">Create a new task</a>
  </div>
@endsection