@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Post</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('posttag.store') }}" >
        @csrf

   
        <div class="form-group">
            <label for="formGroupExampleInput2">post ID</label>
            <input name="post_id" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Tag ID</label>
            <input name="tag_id" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
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
