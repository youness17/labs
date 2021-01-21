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
                <th scope="col">img</th>
                <th scope="col">url</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($video as $i)

                <tr>
                    <td>{{ $i->id }}</td>
                    <td>

                        <img style="max-width:10%" ; src="{{ asset("img/$i->img") }}" alt="">

                    </td>
                    <td>{{ $i->url}}</td>
                    <td class="d-flex">
                        <form action="{{ route('video.destroy', $i->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('video.edit', $i->id) }}" class="btn btn-primary">Éditer</a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>



                    </td>

                </tr>

            @endforeach



        </tbody>
    </table>
    <div class="d-flex justify-content-center  ">
        <a href="{{ route('video.create') }}" class="btn btn-warning">CREATE</a>
    </div>
@stop
