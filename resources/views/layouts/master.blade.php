<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Master Page</title>
</head>
<body>
<div class="wrapper">
    <header>
        <h1>Header</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/forum/topic">All topics</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/admin">Admin</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <h5><div>Footer</div>Lorem ipsum dolor sit amet, quis dui pellentesque nullam aliquam dignissim, mattis ut ac sapien neque metus in, ac gravida scelerisque adipiscing. Primis condimentum semper lectus mauris ut vitae, eveniet ornare convallis quisque leo gravida, vitae est quis, nec imperdiet, ac ultricies sed eget laoreet vestibulum. In consectetuer vitae ut ante litora dolor, cras dui velit etiam fermentum fringilla ligula, sed metus molestie fringilla facilisis amet. Sed tortor ac eg</h5>
    </footer>
</div>
</body>
</html>