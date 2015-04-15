@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel">
            <a href="" class="btn btn-primary">New reply</a>
            <a href="/forum" class="btn btn-primary">Back</a>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$topic['title']}}
                </div>
                <div class="panel-body">
                    {{$topic['body']}}
                </div>
                <div class="panel-footer">
                    Author: {{\Forum\User::find($topic['author_id'])['name']}},
                    posted on {{Carbon\Carbon::parse($topic['created_at'])->format('jS F Y \a\t H:m:s')}}
                </div>
            </div>
        </div>
    </div>



@endsection
