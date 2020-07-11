@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/question/{{ $question->id }}" method="POST">
     @csrf
     @method('PUT')
     <div>
      <div class="form-group">
        <label for="title">Edit Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" value="{{ $question->title }}" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="question">Edit Isi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Isi" value="{{ $question->question }}" name="question" id="question">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
      <a href="/question" class="btn btn-danger">back</a>
    </form>
</div>
@endsection