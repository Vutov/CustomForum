@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label class="col-md-offset-5">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-offset-3  btn-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a class="btn btn-default" href="{{ url('/auth/register') }}">
                                        Don't have account?
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
