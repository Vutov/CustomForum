@extends('layouts.master')
@section('title')
    <title>All Topics</title>
@endsection
@section('content')
    <div class="panel">
        <div class="btn-group">
            <a href="/forum/create" class="btn btn-primary">New topic</a>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Forum rules
            </a>
            @include('partials.rules')
        </div>
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
