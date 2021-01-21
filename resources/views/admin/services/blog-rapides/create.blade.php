@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Post</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('blograpide.store') }}" enctype="multipart/form-data">
        @csrf

        <div class=" form-group">
            <label for="exampleFormControlFile1">image</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>



        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="titre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">texte</label>
            <input name="texte" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

       

        <button class="btn btn-danger" type="submit">add</button>
    </form>



    {{-- <div class="d-flex justify-content-center  ">
        <a type="submit" class="btn btn-warning">add</a>
    </div> --}}
@stop
