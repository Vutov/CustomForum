@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel">
            <a href="/forum/create" class="btn btn-primary">New topic</a>
        </div>

        @foreach($topics as $topic)
            {{--TODO add @empty--}}
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/forum/show/{{$topic['id']}}">{{$topic['title']}}</a>
                    </div>
                    <div class="panel-footer">
                        Author: {{$topic['author']}}, posted: {{$topic['created_at']}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
