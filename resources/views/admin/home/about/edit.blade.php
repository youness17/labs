@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">About</h1>
@stop

@section('content')




    <form method="POST" action="{{ route('about.update',  $about->id) }}" >
        @csrf
        @method("put")
        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="titre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="texte" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="texte2" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">btn</label>
            <input name="btn" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>


        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>

   
@stop
