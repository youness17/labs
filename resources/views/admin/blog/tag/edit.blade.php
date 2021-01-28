@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Post</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('posttag.update' , $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method("put")
     
        <div class="form-group">
            <label for="formGroupExampleInput2">post ID</label>
            <input name="post_id" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Tag ID</label>
            <input name="tag_id" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <button class="btn btn-danger" type="submit">add</button>
    </form>



    {{-- <div class="d-flex justify-content-center  ">
        <a type="submit" class="btn btn-warning">add</a>
    </div> --}}
@stop
