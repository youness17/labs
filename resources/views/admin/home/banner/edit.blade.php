@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Banner</h1>
@stop

@section('content')


    <form method="POST" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class=" form-group">
            <label for="exampleFormControlFile1">img</label>
            <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-danger" type="submit">edit</button>
    </form>
@stop
