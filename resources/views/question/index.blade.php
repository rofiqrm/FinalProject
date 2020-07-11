@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
	    <h3 class="card-title">Daftar Pertanyaan</h3>
	    <a href="/question/create" class="btn btn-info float-right" role="button"><i class="fa fa-plus"></i> Tambah Pertanyaan</a>
	</div>
    <div>
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th style="text-align: center; width: 500px">Judul</th>
                <th style="width: 300px">Penanya</th>
                <th colspan="3" style="text-align: center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($question as $key => $item)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->namalengkap }}</td>
                <td>
                    <a href="/question/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                </td>
                <td>
                    <a href="/question/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                    <form action="/question/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
