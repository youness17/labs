
@foreach ($tags as $i)
  <a href="{{route('posts.tag.index' , ['id' => $i->id])}}">{{ $i->name }}</a>
@endforeach

{{-- @foreach ($tags as $i)
  <span class="badge badge-success"> <a href="{{route('posts.tag.index' , ['id' => $i->id])}}">{{ $i->name }}</a> </span>
@endforeach --}}

