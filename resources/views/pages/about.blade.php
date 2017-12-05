<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">

<head>
    <title>{{config('app.name', 'PersonalWorks')}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="/custom/css/jquery-sakura.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/custom/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="/custom/css/noscript.css" /></noscript>
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="fa fa-star-o fa-spin"></span>
            </div>
            <div class="content">
                <div class="inner">
                    <h1>About</h1>
                    <p>Know about who I am, what I am, and what I do.</p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy;<a href="index.html">Eslao</a> 2017. </p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="/custom/js/jquery.min.js"></script>
    <script src="/custom/js/skel.min.js"></script>
    <script src="/custom/js/util.js"></script>
    <script src="/custom/js/main.js"></script>
    <script src="/custom/js/jquery-sakura.min.js"></script>
    <script>
        $(window).load(function() {
            $('body').sakura({

                className: 'sakura', // Class name to use
                fallSpeed: 0.75, // Factor for petal fall speed
                maxSize: 14, // Maximum petal size
                minSize: 10, // Minimum petal size
                newOn: 50, // Interval after which a new petal is added
                swayAnimations: ['sway-0', 'sway-1', 'sway-2', 'sway-3', 'sway-4', 'sway-5', 'sway-6', 'sway-7', 'sway-8'] // Swaying animation names
            });
        });

    </script>

</body>

</html>
