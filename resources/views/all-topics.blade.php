@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel">
            <a href="/forum/create" class="btn btn-primary">New topic</a>
        </div>

        @if(!count($topics))
            <h2 class="alert alert-danger">No posts chief :(</h2>
        @else
            @foreach($topics as $topic)
                @include ('partials.all-posts')
            @endforeach
        @endif
    </div>



@endsection
