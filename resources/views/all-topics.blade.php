@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel">
            <a href="/forum/create" class="btn btn-primary">New topic</a>
        </div>

        <div class="row">
            <div class="panel panel-default">

                @if(!count($topics))
                    <h2 class="alert-danger">No posts chief :(</h2>
                @else
                    @foreach($topics as $topic)
                        <article class="panel-heading">
                            <h2>
                                <a href="/forum/show/{{$topic['id']}}">{{$topic['title']}}</a>
                            </h2>

                            <div class="panel-footer">
                                <div class="container">
                                    Posted {{$topic['time']}}
                                    by {{$topic['author']}}.
                                </div>
                                <div class="container">
                                    Tags: {{$topic['tags']}},
                                    Category {{$topic['category']}}
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </div>



@endsection
