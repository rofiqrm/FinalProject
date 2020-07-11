@extends('layouts.master')

@section('content')
<div class="card mb-2">
    <div class="card-body">
        <h5 class="card-title">Title : {{ $question->title }} </h5>
        <p class="card-text">Question : {!! $question->question !!}</p>
        <p class="card-text">Created at : {{ $question->created_at }}</p>
        <p class="card-text">Update at : {{ $question->updated_at }}</p>
        <p class="card-text">Tags: </br>
            @foreach ($tag as $item)
                <button type="button" class="btn btn-success active">{{$item}}</button>
            @endforeach
            <a href="#" class="btn btn-sm btn-info mx-2" style="float : right">Comment</a>
        </p>
    </div>
    <div class="card-footer">
        <a href="/answer/{{$question->id}}/create" class="btn btn-sm btn-info">Answer here</a>
        <a href="/question" class="btn btn-sm btn-danger">back</a>
        <a href="#" class="btn btn-sm btn-light btn-outline-danger mx-2" style="float : right">Downvote</a>
        <a href="#" class="btn btn-sm btn-info mx-2" style="float : right">Upvote</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Jawaban</h3>
    </div>
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th style="width: 500px">Jawaban</th>
            <th style="width: 100px">Penjawab</th>
        </tr>
        </thead>
        <tbody>
            @foreach($answer as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{!! $item->answer !!}  <a href="#" class="btn btn-sm btn-info" style="float : right">Comment</a></td>
            <td>{{ $item->name }}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
