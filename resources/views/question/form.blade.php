@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/question" method="POST">
     @csrf
      <div class="form-group">
        <label for="title">Title :</label>
        <input type="text" class="form-control" placeholder="Masukkan title" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="question">Question :</label>
        <input type="text" class="form-control" placeholder="Masukkan question" name="question" id="question">
      </div>
      <button type="submit" class="btn btn-primary">Posting Question</button>
    </form>
</div>
@endsection