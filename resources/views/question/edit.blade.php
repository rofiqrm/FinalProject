@extends('layouts.master')

@push('scripts-head')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
<div class="ml-3">
    <form action="/question/{{ $question->id }}" method="POST">
     @csrf
     @method('PUT')
     <div>
      <div class="form-group">
        <input type="hidden" name="user_id" id="user_id" value="{{ $userLogin->id }}">
        <label for="title">Edit Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" value="{{ $question->title }}" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="question">Edit Isi :</label>
        <textarea name="question" id="question" class="form-control my-editor" placeholder="Masukkan Pertanyaan">{!! $question->question !!} </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
      <a href="/question" class="btn btn-danger">back</a>
    </form>
</div>
@endsection
@push('scripts')
<script>
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>
@endpush
