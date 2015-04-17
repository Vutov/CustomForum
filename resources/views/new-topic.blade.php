@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @include('errors/validation')

            <div class="panel panel-default">
                <div class="panel-heading">New Topic</div>
                <div class="panel-body">

                    {!! Form::open(['url' => '/forum']) !!}

                    @include('partials/topic-form', ['body' => 'Answer', 'bodyPlaceholder' => 'Type your answer here'])


                    <div class="form-group">
                        {!! Form::label('category', 'Category', ['class' => 'label label-default']) !!}
                        {!! Form::select('category', ['Programming' => 'Programming', 'Fun' => 'Fun', 'Cannot think of
                        category' => 'Cannot think of category'], null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('tags', 'Tags', ['class' => 'label label-default']) !!}
                        {!! Form::text('tags', null, ['class' => 'form-control', 'placeholder'=>'Separate different tags
                        with comma']) !!}
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
