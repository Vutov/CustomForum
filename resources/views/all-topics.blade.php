@extends('layouts.master')

@section('content')
    <div class="panel">
        <a href="/forum/create" class="btn btn-primary">New topic</a>
    </div>

    @if(!count($topics))
        <h2 class="alert alert-danger">
            <span>There are no questions. :( </span>

            <div>
                <a href="/forum/create">Ask something?</a>
            </div>
        </h2>
    @else
        @foreach($topics as $topic)
            @include ('partials.all-posts', ['tags'=>$topic['tags']])
        @endforeach
    @endif
@endsection
