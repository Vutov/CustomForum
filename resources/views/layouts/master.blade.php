<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Master Page</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <style>
        header, footer {
            border: 1px solid #000000;
        }

        main {
            margin: 20px 0;
            border: 1px solid red;
        }

        .stylish-input-group .input-group-addon {
            background: white !important;
        }

        .stylish-input-group .form-control {
            border-right: 0;
            box-shadow: 0 0 0;
            border-color: #ccc;
        }

        .stylish-input-group button {
            border: 0;
            background: transparent;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h5>Header</h5>
        <ul>
            <li><a href="/forum">Forum</a></li>
            @if (!Auth::user())
                <li><a href="/auth/register">Register</a></li>
                <li><a href="/auth/login">Login</a></li>
            @else
                <li><a href="/auth/logout">Logout</a></li>
            @endif
        </ul>

        @if (Auth::user())
            <div>Hello {{ Auth::user()->name}}</div>
        @endif

        {{--Search Button--}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <main>
        @if(Session::has('flash_message'))
            <div class='alert alert-success'>{{ session('flash_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
        @endif
        @yield('content')
    </main>
    <footer>
        <h5>
            <div>Footer</div>
            Lorem ipsum dolor sit amet, quis dui pellentesque nullam aliquam dignissim, mattis ut ac sapien neque metus
            in, ac gravida scelerisque adipiscing. Primis condimentum semper lectus mauris ut vitae, eveniet ornare
            convallis quisque leo gravida, vitae est quis, nec imperdiet, ac ultricies sed eget laoreet vestibulum. In
            consectetuer vitae ut ante litora dolor, cras dui velit etiam fermentum fringilla ligula, sed metus molestie
            fringilla facilisis amet. Sed tortor ac eg
        </h5>
    </footer>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</div>
</body>
</html>