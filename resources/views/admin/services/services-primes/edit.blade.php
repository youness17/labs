@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Titre Slogan</h1>
@stop

@section('content')

<i class="fad fa-laugh-wink"></i>


    <form method="POST" action="{{ route('servicesprime.update' , $servicesprime->id) }}" >
        @csrf
        @method("put")
        <div class="form-group">
            <label>icone</label>
            <select name="icone_id">
                @foreach ($icone as $e)

                    <option value="{{ $e->id }}">{{ $e->name}}</option>
                    
                @endforeach
           
            </select>
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput">Titre</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput" name="titre">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput">Texte</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput" name="texte">
        </div>


        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>


@stop
