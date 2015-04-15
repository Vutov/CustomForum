@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

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
                
                <div class="panel panel-default">
                    <div class="panel-heading">New Topic</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => '/forum']) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['class' => 'form-control']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Title']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Body', ['class' => 'form-control']) !!}
                            {!! Form::text('body', null, ['class' => 'form-control', 'placeholder'=>'Body']) !!}
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
