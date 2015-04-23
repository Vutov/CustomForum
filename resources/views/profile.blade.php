@extends('layouts.master')
@section('title')
    @if($name === 'You')
        <title>{{Auth::user()->name}}'s profile</title>
    @else
        <title>{{$name}}'s profile</title>
    @endif
@endsection
@section('content')
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <h4 style="text-align: center">{{$text}} questions</h4>
        </div>
        <div class="panel-body">
            @forelse($topics as $topic)
                <div class="panel-footer">
                    <a href="/forum/{{$topic['id']}}">{{$topic['title']}}</a>
                    <span style="margin-left: 5px">Category <a href="/search/cat/{{$topic['category']}}">{{$topic['category']}}</a>,</span>
                    <span>visited {{$topic['visits']}} times</span>
                </div>
            @empty
                <div class="panel panel-heading">{{$name}} have no questions</div>
            @endforelse
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <h4 style="text-align: center">{{$text}} answers</h4>
        </div>
        <div class="panel-body">
            @forelse($comments as $comment)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/forum/{{$comment['topic_id']}}">{{$comment['title']}}</a>
                    </div>
                    <div class="panel-body">{{$comment['body']}}</div>
                </div>
            @empty
                <div class="panel panel-heading">{{$name}} have no answers</div>
            @endforelse
        </div>
    </div>
@endsection