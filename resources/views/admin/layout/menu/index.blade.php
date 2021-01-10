@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Menu</h1>
@stop

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col-">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($menus as $i)

            <tr >
                <th scope="row">{{$i->id}}</th>
                <td>{{$i->name}}</td>
                <td class="d-flex">
                    <form action="{{route('menu.destroy', $i->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <a href="{{route('menu.edit', $i->id)}}" class="btn btn-primary">Éditer</a>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                   
                    {{-- <form action="#" method="POST">
                        @csrf
                        @method("delete")
                        <a href="#" class="btn btn-success">EDIT</a>
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form> --}}
                </td>





               

            </tr>

                @endforeach
           
            

        </tbody>
    </table>
    <div class="d-flex justify-content-center  ">
        <a href="{{ route('menu.create') }}" class="btn btn-warning">CREATE</a>
    </div>
@stop
