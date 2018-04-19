@extends('layout')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Create a task</h1>
    <form action="">
      <div class="form-group">
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
  </div>
@endsection