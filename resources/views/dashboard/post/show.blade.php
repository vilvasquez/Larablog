@extends('dashboard.master')

@section('content')



<div class="container">

    <div class="form-group">
     <label for="title">Titulo</label>
     <input readonly  class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="url_clean">URL limpia</label>
        <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
       </div>

    <div class="form-group">
     <label for="content">Contenido</label>
     <textarea readonly class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
    </div>


</div>
@endsection
