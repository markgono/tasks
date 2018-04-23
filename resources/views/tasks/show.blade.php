@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->body }}</p>
    @if (count($task->comments))
      <hr>
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
    @endif
    <hr>
    <div class="card">
      <div class="card-body">
        <form method="POST" action="/tasks/{{ $task->id }}/comments">
          @csrf
          <div class="form-group">
            <label for="body">Add a comment:</label>
            <textarea name="body" id="body" cols="30" rows="3" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-secondary" type="submit">Add Comment</button>
          </div>
        </form>
        @include('components.errors')
      </div>
    </div>
  </div>
@endsection