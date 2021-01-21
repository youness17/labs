@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Titre Slogan</h1>
@stop

@section('content')




    <form method="POST" action="{{ route('titreslogan.store') }}" ">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="titre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>

   
@stop
