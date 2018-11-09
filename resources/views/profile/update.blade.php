@extends('layouts.app')
@section('content')
<div class='container navbar-dark bg-dark text-white-50'>
    <form action="/" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Update title</label>
        <input class="form-control" type='text'name='title' id="title" value='{{post->title}}' >
      </div>
      <div class="form-group">
        <label for="Link">Update Link</label>
        <input type="url" class="form-control" name='link' id="exampleofaurl" placeholder="https://..." value='{{$post->link}}'>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Update text</label>
        <textarea class="form-control" id="text" name='text'rows="3">{{$post->text}}</textarea>
      </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
