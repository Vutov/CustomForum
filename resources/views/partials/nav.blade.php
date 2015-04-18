<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://softuni.bg/">Team "Vancouver"</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Forum <span class="sr-only">(current)</span></a></li>
            </ul>
            {!! Form::open(['url' => '/search', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                {{--Search Button--}}
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#contains">Contains</a></li>
                                <li><a href="#its_equal">It's equal</a></li>
                                <li><a href="#greather_than">Greather than ></a></li>
                                <li><a href="#less_than">Less than < </a></li>
                                <li class="divider"></li>
                                <li><a href="#all">Anything</a></li>
                            </ul>
                        </div>
                        {!! Form::text('search', null, ['class' => 'form-control', 'placeholder'=>'Search']) !!}
                        {{--<input type="text" class="form-control" placeholder="Search">--}}
                    <span class="input-group-addon">
                        <button type="submit" class="transparent">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                </div>
            {!! Form::close() !!}





            {{--{!! Form::open(['url' => '/search', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}--}}
            {{--Search Button--}}
            {{--<div id="imaginary_container">--}}
                {{--<div class="input-group stylish-input-group">--}}
                    {{--{!! Form::text('search', null, ['class' => 'form-control', 'placeholder'=>'Search']) !!}--}}
                    {{--<input type="text" class="form-control" placeholder="Search">--}}
                    {{--<span class="input-group-addon">--}}
                        {{--<button type="submit">--}}
                            {{--<span class="glyphicon glyphicon-search"></span>--}}
                        {{--</button>--}}
                    {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--{!! Form::close() !!}--}}
            @if (Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/profile">My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>

            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                </ul>
            @endif
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

