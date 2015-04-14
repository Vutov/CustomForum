@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    @if($logged)
                        <div class="panel-body">
                            You are logged in!
                        </div>
                    @else
                        <div class="panel-body">
                            You are NOT logged in!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
