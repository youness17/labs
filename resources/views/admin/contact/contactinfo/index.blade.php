@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Info contact</h1>
@stop

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">titreinfo</th>
                <th scope="col">adress</th>
                <th scope="col">ville</th>
                <th scope="col">numero</th>
                <th scope="col">mail</th>
                <th scope="col">boutton</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($contactinfo as $i)

                <tr>

                    <td>{{ $i->titre }}</td>
                    <td>{{ $i->texte }}</td>
                    <td>{{ $i->titreinfo }}</td>
                    <td>{{ $i->adress }}</td>
                    <td>{{ $i->ville }}</td>
                    <td>{{ $i->numero }}</td>
                    <td>{{ $i->mail }}</td>
                    <td>{{ $i->boutton }}</td>
                    <td class="d-flex">
                        <form action="{{ route('contactinfo.destroy', $i->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <a href="{{ route('contactinfo.edit', $i->id) }}" class="btn btn-primary">Éditer</a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>



                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
    <div class="d-flex justify-content-center  ">
        <a href="{{ route('contactinfo.create') }}" class="btn btn-warning">CREATE</a>
    </div>
@stop
