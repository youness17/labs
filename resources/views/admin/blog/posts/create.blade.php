@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Post</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf

        <div class=" form-group">
            <label for="exampleFormControlFile1">img</label>
            <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>



        <div class="form-group">
            <label for="formGroupExampleInput2">titre</label>
            <input name="titre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">description</label>
            <input name="description" type="text" class="form-control" id="formGroupExampleInput2"
                placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">texte</label>
            <input name="texte" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label>user</label>
            <select name="user_id">
                @foreach ($user as $e)
                  
                     <option value="{{ $e->id }}">{{ $e->name }}</option>
                    
                @endforeach
            </select>
        </div>


{{-- @foreach ($tag as $i)

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$i->tag}}" id="flexCheckIndeterminate">
    <label class="form-check-label" for="flexCheckIndeterminate">
      
    </label>
  </div>
    
@endforeach --}}
        



        <button class="btn btn-danger" type="submit">add</button>
    </form>



    {{-- <div class="d-flex justify-content-center  ">
        <a type="submit" class="btn btn-warning">add</a>
    </div> --}}
@stop
