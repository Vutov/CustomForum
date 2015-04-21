<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    @yield('title')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="container">
    <header>
        @include('partials/nav')
        @include('partials/flash')
        @include('errors/validation')

    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials/footer')
    </footer>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</div>

<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="font-size: 3rem; margin: 5px"></span>
	</span>
</div>

<script>
    $(function () {
        $(document).on('scroll', function () {

            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });
    });

    $(function () {
        $(document).on('scroll', function () {
            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });

        $('.scroll-top-wrapper').on('click', scrollToTop);
    });

    function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }
</script>
</body>
</html>