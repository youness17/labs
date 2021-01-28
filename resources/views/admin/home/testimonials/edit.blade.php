@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Banner</h1>
@stop

@section('content')

<form method="POST" action="{{ route('testimonial.update' , $testimonial->id) }}" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="form-group">
        <label for="exampleFormControlFile1">Img</label>
        <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">name</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">job</label>
        <input name="job" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">text</label>
        <input name="text" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <button class="btn btn-danger" type="submit">ajouter</button>
</form>
@stop
