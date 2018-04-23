@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->body }}</p>
    @if (count($task->comments))
      <hr>
    @endif
    <div class="comments">
      <ul class="list-group">
        @foreach ($task->comments as $comment)
          <li class="list-group-item">
            {{ $comment->body }}
            <small>from Anon, {{ $comment->created_at->diffForHumans() }}</small>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection