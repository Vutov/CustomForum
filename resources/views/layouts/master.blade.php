<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Master Page</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        header, footer {
            border: 1px solid #000000;
        }

        main {
            margin: 20px 0;
            border: 1px solid red;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <h5>Header</h5>
        <ul>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/forum/topic">All topics</a></li>
            <li><a href="/admin">Admin</a></li>
            @if (!Auth::user())
                <li><a href="/auth/register">Register</a></li>
                <li><a href="/auth/login">Login</a></li>
            @else
                <li><a href="/logout">Logout</a></li>
            @endif
        </ul>

        @if (Illuminate\Support\Facades\Auth::user())
            <div>Hello {{ Auth::user()->name}}</div>
        @endif

    </header>
    <main>
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