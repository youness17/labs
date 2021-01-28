@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Menu</h1>
@stop

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Job</th>
                <th scope="col">Text</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($testimonials as $i)
              <tr>
                  <th scope="row"><img src="{{asset("img/$i->img")}}" alt=""></th>
                  <td>{{$i->name}}</td>
                  <td>{{$i->job}}</td>
                  <td>{{$i->text}}</td>
                  <td>  <form action="{{ route('testimonial.destroy', $i->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <a href="{{ route('testimonial.edit', $i->id) }}" class="btn btn-primary">Éditer</a>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form></td>
              </tr>
            @endforeach



        </tbody>
    </table>
    <div class="d-flex justify-content-center  ">
        <a href="{{ route('testimonial.create') }}" class="btn btn-warning">CREATE</a>
    </div>
@stop
