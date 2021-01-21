@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">video</h1>
@stop

@section('content')




    <form method="POST" action="{{ route('video.update', , $post->id)) }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="formGroupExampleInput2">img</label>
            <input name="img" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">url</label>
            <input name="url" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>

   
@stop
