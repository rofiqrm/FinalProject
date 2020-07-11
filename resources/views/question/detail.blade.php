@extends('layouts.master')

@section('content')
<div class="card mb-2">
  <div class="card-body">
    <h5 class="card-title">Title : {{ $question->title }} </h5>
    <p class="card-text">Question : {{ $question->question }}</p>
    <p class="card-text">Created at : {{ $question->created_at }}</p>
    <p class="card-text">Update at : {{ $question->updated_at }}</p>
    <a href="/answer/create" class="btn btn-sm btn-info">Answer here</a>
    {{-- <a href="/question/{{$question->id}}/edit" class="btn btn-sm btn-dark">Edit <i class="fa fa-edit" aria-hidden="true"></i> </a> --}}
    <a href="/question" class="btn btn-sm btn-danger">back</a>
  </div>
</div>

@foreach ($answer as $key => $new_answer)
<div class="card">
  <div class="card-body">
    <h5>Answer {{ $loop->iteration }}</h5>
      <h6 class="ml-4">-> {{ $new_answer->answer }}</h6>
    </div>
</div>
@endforeach
@endsection