@extends('layouts.master')

@section('content')
    <div class="container">
        {{--Topic--}}
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$title}}
                </div>
                <div class="panel-body">
                    {{$body}}
                </div>
                <div class="panel-footer">
                    Author: {{$author}},
                    posted on {{$time}}
                </div>
                <div class="container">
                    Tags: {{$tags}},
                    Category {{$category}}
                </div>
                <div class="container">
                    Visited: {{$visits}}
                </div>
            </div>
        </div>

        {{--Comments--}}
        @foreach($comments as $comment)
            <div class="row">
                <div class="panel panel-default">
                    <h3 class="panel-title panel-heading">
                        {{$comment['title']}}
                    </h3>

                    <div class="panel panel-body">
                        <div class="panel-primary">
                            {{$comment['body']}}
                        </div>
                    </div>
                    <div class="panel-footer panel-info">
                        {{$comment['time']}} by
                        @if($comment['guest'])
                            {{$comment['user_name']}} {{$comment['user_email']}} (guest)
                        @else
                            {{$comment['user_name']}}
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        {{--Reply--}}
        <div class="panel">
            <div class="panel panel-default">
                <a href="/forum" class="btn btn-primary">Back</a>
            </div>

            <div class="row" id="reply">
                <div class="panel panel-default">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url' => '/reply']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['class' => 'form-control']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Title']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'Body', ['class' => 'form-control']) !!}
                        {!! Form::text('body', null, ['class' => 'form-control', 'placeholder'=>'Body']) !!}
                    </div>
                    @if(Auth::guest())
                        <div class="form-group">
                            {!! Form::label('name', 'Name', ['class' => 'form-control']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Name']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'form-control']) !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}
                        </div>
                    @endif

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::hidden('id', Crypt::encrypt($id)) !!}
                            {!! Form::submit('Reply', ['class' => 'btn btn-primary']) !!}

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
