@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h1>Create a task</h1>
    <form method="POST" action="/tasks">
      {{-- @csrf - Adds a hidden session token to protect from CSRF attacks --}}
      @csrf
      <div class="form-group mt-3">
        <label for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </form>
    @include('components.errors')
  </div>
@endsection