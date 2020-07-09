@extends('layouts.master')

@section('content')
<div class="card mb-2">
  <div class="card-body">
    <h5 class="card-title">Title : {{ $question->title }} </h5>
    <p class="card-text">Question : {{ $question->question }}</p>
    <a href="/answer/create" class="btn btn-sm btn-info">Answer here</a>
    <a href="/question/{{$question->id}}/edit" class="btn btn-sm btn-dark">Edit <i class="fa fa-edit" aria-hidden="true"></i> </a>
  </div>
</div>

<div class="card">
  <div class="card-body">

  </div>
</div>
@endsection