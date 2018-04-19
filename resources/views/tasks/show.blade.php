@extends('layout')

@section('content')
  <h1>{{ $task->title }}</h1>
  <p>{{ $task->body }}</p>
@endsection