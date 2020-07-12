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
                <button type="button" class="btn btn-warning active">{{$item}}</button>
            @endforeach
            <a href="/comment/{{$question->id}}/create" class="btn btn-info mx-2" style="float : right">Comment</a>
        </p>
    </div>
    <div class="card-footer" data-question_id="{{ $question->id }}" data-user_id="{{ $userLogin->id }}">
        <a href="/answer/{{$question->id}}/create" class="btn btn-sm btn-info">Answer here</a>
        <a href="/question" class="btn btn-sm btn-danger">Back</a>
        <a href="#" class="btn btn-sm btn-light btn-outline-danger mx-2 vote" style="float : right">Downvote</a>
        <a href="#" class="btn btn-sm btn-info mx-2 vote" style="float : right">Upvote</a>
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
            @foreach($answer as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>
                {!! $item->answer !!}  
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        
                        <input type="hidden" name="user_id" id="user_id" value="{{ $userLogin->id }}">
                        <input type="text" class="form-control" name="comment" id="comment">
                    </div>
                    <button type="submit" class="btn btn-sm btn-info" style="float : right">Comment</button>
                </form>
            
            </td>
            <td>{{ $item->name }}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
