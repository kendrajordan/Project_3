
@extends('profile.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <h1 class='text-center'>Group Posts</h1>
            @foreach ($posts as $post)
            <div class='card mb-3 mt-3 pr-0 pl-0 container'>

                <div class="card-header">{{$post->title}}</div>
                <div>
                  <a href='/profile/edit'><i class="fas fa-edit"></i></a>
                </div>
                <div class='card-body p-0'>
                <a href="{{$post->link}}">Link</a>
                <p class="card-text">{{$post->text}}</p>
                <p class="card-text">Posted by {{$post->user->name}}</p>
                <div class="card-footer">
                  <small class="text-muted">Last updated {{$post->updated_at}}</small>
                </div>
              </div>
            </div>
            @endforeach
            @endsection

</html>
