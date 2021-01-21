@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Titre Slogan</h1>
@stop

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">icon</th>
                <th scope="col">titre</th>
                <th scope="col">texte</th>
                <th scope="col">action </th>

            </tr>
        </thead>
        <tbody>

            @foreach ($services as $i)

                <tr>
                    <td>{{ $i->id}}</td>
                    <td>  <i class="{{ $i->icone->icone}}"></i></td>
                    <td>{{ $i->titre }}</td>
                    <td>{{ $i->text }}</td>
                    <td class="d-flex">
                        <form action="{{ route('serviceslist.destroy', $i->id) }}" method="POST" >
                            @csrf
                            @method('delete')
                            <a href="{{ route('serviceslist.edit', $i->id) }}" class="btn btn-primary">Éditer</a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>



                    </td>

                </tr>

            @endforeach



        </tbody>
    </table>
    <div class="d-flex justify-content-center  ">
        <a href="{{ route('serviceslist.create') }}" class="btn btn-warning">CREATE</a>
    </div>
@stop