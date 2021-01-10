@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Menu</h1>
@stop

@section('content')

<form  method="POST"  action="{{route('logo.update', $logo->id)}}"" enctype="multipart/form-data"">
  @csrf
  @method("put")
  <div class="form-group">
    <label for="exampleFormControlFile1">logo</label>
    <input name ="img" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button  class="btn btn-danger" type="submit">add</button>
</form>

  

    {{-- <div class="d-flex justify-content-center  ">
        <a type="submit" class="btn btn-warning">add</a>
    </div> --}}
@stop
