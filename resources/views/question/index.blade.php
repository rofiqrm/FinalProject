@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Question List</th>
      </tr>
    </thead>
    <tbody>
    @foreach($question as $key => $question)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $question->title }} </td>
        <td> {{ $question->question }} </td>
        <td>
        <!-- <a href="/question/{{$question->id}}" class="btn btn-sm btn-info">Detail <i class="fa fa-list" aria-hidden="true"></i> </a> -->
        <!-- <form action="/question/{{$question->id}}" method="POST" style="display: inline;"> -->
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete <i class="fas fa-trash"></i> </button>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  <div class="ml-3">
  <a class="btn btn-primary" href="/question/create" role="button">Create New Question</a>
  </div>
  
@endsection
