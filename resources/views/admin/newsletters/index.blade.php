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
                <th scope="col">email</th>
                <th scope="col">action </th>

            </tr>
        </thead>
        <tbody>

            @foreach ($newsletter as $i)

                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->email }}</td>
                    <td class="d-flex">
                        <form action="{{ route('newsletter.destroy', $i->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>



                    </td>

                </tr>

            @endforeach



        </tbody>
    </table>

@stop
