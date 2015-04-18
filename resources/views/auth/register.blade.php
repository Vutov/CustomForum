@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="label label-default">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="label label-default">Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="label label-default">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="label label-default">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
