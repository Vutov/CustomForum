@extends('layouts.master')
@section('title')
    <title>{{$title}}</title>
@endsection
@section('content')
    {{--Topic--}}
    <article class="panel panel-primary">
        @include ('partials/post')
        {{--Comments--}}
        @if(count($comments))
            <div class="panel panel-body">
                @foreach($comments as $comment)
                    @include('partials/comment', ['comment' => $comment])
                @endforeach
            </div>
        @endif
        {{--Reply--}}
        <div class="panel panel-body">
            <h3 class="panel">Leave a comment</h3>
            {!! Form::open(['url' => '/reply']) !!}

            @include('partials/topic-form', ['body' => 'Answer', 'bodyPlaceholder' => 'Type your answer here'])

            @if(Auth::guest())
                <div class="form-group">
                    {!! Form::label('name', 'Name', ['class' => 'label label-default']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Your Name']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email (optional)', ['class' => 'label label-default']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Your Email']) !!}
                </div>
            @endif

            <div class="form-group">
                <div class="btn-group">
                    <a href="/forum" class="btn btn-primary">Back</a>
                    <a href="" class="btn btn-primary">Top</a>
                    {!! Form::hidden('id', Crypt::encrypt($id)) !!}
                    {!! Form::submit('Reply', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </article>
@endsection
