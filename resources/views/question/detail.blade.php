@extends('layouts.master')

@section('content')
<div class="card mb-2">
    <div class="card-body">
        <h5 class="card-title">Title : {{ $question->title }} </h5>
        <p class="card-text">Question : {!! $question->question !!}</p>
        <p class="card-text">Created at : {{ $question->created_at }}</p>
        <p class="card-text">Update at : {{ $question->updated_at }}</p>
        <p class="card-text">Tags:
            @foreach ($tag as $item)
                <button type="button" class="btn btn-success active">{{$item}}</button>
            @endforeach
        </p>
    </div>
    <div class="card-footer">
        <a href="/answer/{{$question->id}}/create" class="btn btn-sm btn-info">Answer here</a>
        {{-- <a href="/question/{{$question->id}}/edit" class="btn btn-sm btn-dark">Edit <i class="fa fa-edit" aria-hidden="true"></i> </a> --}}
        <a href="/question" class="btn btn-sm btn-danger">back</a>
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
            <td>{!! $item->answer !!}</td>
            <td>{{ $item->name }}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
