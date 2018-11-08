@extends('profile.layout')
@section('content')
<div class='container'>
    <form action="/" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Add title</label>
        <input class="form-control" type='text'name='title' id="title" >
      </div>
      <div class="form-group">
        <label for="Link">Add a Link</label>
        <input type="url" class="form-control" name='link' id="exampleofaurl" placeholder="https://...">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Write some text</label>
        <textarea class="form-control" id="text" name='text'rows="3"></textarea>
      </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
