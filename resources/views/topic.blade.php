@extends('layouts.master')

@section('content')
    @include('errors/validation')
    {{--Topic--}}

    @include ('partials/post')

    {{--Reply--}}
    <div class="panel">

        {!! Form::open(['url' => '/reply']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'label label-default']) !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Title']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Answer', ['class' => 'label label-default']) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder'=>'Type your answer here']) !!}
        </div>
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
            <div class="col-1 btn-group btn-group">
                <a href="/forum" class="btn btn-primary">Back</a>
                <a href="" class="btn btn-primary">Top</a>
                {!! Form::hidden('id', Crypt::encrypt($id)) !!}
                {!! Form::submit('Reply', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
