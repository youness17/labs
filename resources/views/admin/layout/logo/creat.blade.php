@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Menu</h1>
@stop

@section('content')

    <form method="POST" action="{{ route('logo.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">logo</label>
            <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-danger" type="submit">add</button>
    </form>

    {{-- <form method="POST" action="{{ route('menu.store') }}">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">name</label>
            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>


        <div class="form-group">
            <label for="formGroupExampleInput2">link</label>
            <input name="link" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <button class="btn btn-danger" type="submit">add</button>
    </form> --}}



    {{-- <div class="d-flex justify-content-center  ">
        <a type="submit" class="btn btn-warning">add</a>
    </div> --}}
@stop
