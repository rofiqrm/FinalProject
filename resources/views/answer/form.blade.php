@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/answer" method="POST">
     @csrf
      <div class="form-group">
        <label for="answer">Please Answer Here :</label>
        <input type="text" class="form-control" placeholder="Masukkan answer" name="answer" id="answer">
      </div>
      <button type="submit" class="btn btn-primary">Posting Answer</button>
    </form>
</div>
@endsection