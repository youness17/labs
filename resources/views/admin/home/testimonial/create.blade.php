@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Banner</h1>
@stop

@section('content')




    <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>

   
@stop
