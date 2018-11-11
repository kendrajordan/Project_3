@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white-50">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>See what others have posted: <a href="/">Group Posts</a></p>
                    <p>Try to create a <a href="/profile/create">blog post</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
