
@extends('layouts.app')

@section('content')

            <h1 class='text-center text-white-50'>Group Posts</h1>

            @foreach ($posts as $post)
            <div class='card mb-3 mt-3 pr-0 pl-0 container bg-dark text-white-50'>

                <div class="card-header font-weight-bold">{{$post->title}}</div>
                <div class='card-body p-0'>
                <a href="{{$post->link}}">Link</a>
                <p class="card-text card-body-text mt-2 mb-0">{{$post->text}}</p>
                <p class="card-text author">Posted by {{$post->user->name}}</p>

                <form action='{{url('/',$post->id)}}' method='POST' class="row justify-content-between container m-0 p-0">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit"class="btn btn-danger">Delete</button>
                  <button type='submit' class="btn btn-success"><a href="/{{$post->id}}/edit">Edit</a></button>
                </form>
                <div class="card-footer">
                  <small class="text-muted">Last updated {{$post->updated_at}}</small>
                </div>
              </div>
            </div>
            @endforeach
            @endsection
