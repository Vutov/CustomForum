@extends('layouts.master')
@section('content')
    {!! Form::open(['url' => '/user']) !!}
    <div>
    {!! Form::label('name', 'Name', ['class' => 'test']) !!}
    {!! Form::text('name', null, ['class' => 'test', 'placeholder'=>'Username']) !!}
    </div>
    <div>
    {!! Form::label('email', 'Email', ['class' => 'test']) !!}
    {!! Form::text('email', null, ['class' => 'test', 'placeholder'=>'Email']) !!}
    </div>
    <div>
    {!! Form::label('pass', 'Password', ['class' => 'test']) !!}
    {!! Form::text('pass', null, ['class' => 'test', 'placeholder'=>'Password']) !!}
    </div>
    <div>
    {!! Form::label('pass2', 'Repeat Password', ['class' => 'test']) !!}
    {!! Form::text('pass2', null, ['class' => 'test', 'placeholder'=>'Again Password']) !!}
    </div>
    {!! Form::submit('Submit', ['class' => 'test']) !!}
    {!! Form::close() !!}
@stop