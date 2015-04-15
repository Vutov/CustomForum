@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel">
            <a href="/forum/create" class="btn btn-primary">New topic</a>
        </div>

        <div class="row">
            <div class="panel panel-default">
                @foreach($topics as $topic)
                    {{--TODO add @empty--}}

                    <div class="panel-heading">
                        <h2>
                            <a href="/forum/show/{{$topic['id']}}">{{$topic['title']}}</a>
                        </h2>

                        <div class="panel-footer">
                            Author: {{\Forum\User::find($topic['author_id'])['name']}},
                            posted: {{$topic->created_at->diffForHumans()}}
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </div>



@endsection
