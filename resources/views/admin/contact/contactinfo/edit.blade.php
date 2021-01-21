@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Titre Slogan</h1>
@stop

@section('content')


    <form method="POST" action="{{ route('contactinfo.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput">titre</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $contactinfo->titre }}" name="titre">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">texte</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->texte }}" name="texte">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">titreinfo</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->titreinfo }}" name="titreinfo">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">adress</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->adress }}" name="adress">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">ville</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->ville }}" name="ville">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">numero</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->numero }}" name="numero">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">mail</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->mail }}" name="mail">
        </div>
        <div class="form-group d-flex flex-column align-items-center">
            <label for="formGroupExampleInput2">boutton</label>
            <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $contactinfo->boutton }}"
                name="boutton">
        </div>



        <button class="btn btn-danger" type="submit">ajouter</button>
    </form>


@stop
