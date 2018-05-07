@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h1>Sign In</h1>
    <form method="POST" action="/login">
      @csrf

      <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </form>
    @include('components.errors')
  </div>
@endsection