<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Master Page</title>
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
            <li><a href="/">Home</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/forum/topic">All topics</a></li>
            <li><a href="/user/create">Register</a></li>
            <li><a href="/admin">Admin</a></li>
        </ul>
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
</div>
</body>
</html>