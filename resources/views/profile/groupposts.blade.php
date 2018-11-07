@extends('profile.layout')

@section('content')
<h1>Group Posts</h1>
@foreach ($posts as $post)
<div class='card mb-3 mt-3 container'>
    <div class="card-header">{{$post->title}}</div>
    <div class='card-body'>
    <a href="{{$post->link}}">Link</a>
    <p class="card-text">{{$post->text}}</p>
    <p class="card-text">
    <div class="card-footer">{{$post->author}}</p>
      <small class="text-muted">Last updated {{$post->updated_at}}</small>
    </div>
  </div>
</div>
@endforeach
@endsection
