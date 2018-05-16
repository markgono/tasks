@extends('layout')

@section('content')
<div class="col-sm-8">
  <h1>
    Tasks
    @if (isset($tag))
      <span class="h5">filtered by {{ $tag->name }}</span>
    @endif
  </h1>
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