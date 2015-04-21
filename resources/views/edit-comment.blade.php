@extends('layouts.master')
@section('title')
    <title>Edit {{$comment['title']}}</title>
@endsection
@section('content')
    <section class="panel panel-body">
        {!! Form::model($comment, ['method' => 'PATCH' ,'url' => ['/reply/'.$comment->id]]) !!}
        @include('partials.topic-form', ['body' => 'Answer', 'bodyPlaceholder' => 'Type your answer here'])
        <div class="form-group">
            <div class="col-md-6 col-md-offset-5">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection