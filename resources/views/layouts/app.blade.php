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
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <span class="fa fa-star-o fa-spin"></span>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/posts">Blog</a></li>
                    <li><a href="#login">Log In</a></li>
                    <li><a href="#register">Register</a></li>
                </ul>
            </nav>
            <div class="content">
                <div class="inner">
    @yield('content')
                    </div>
            </div>
            
        </header>
        <div id="main">
    @yield('content2')
            <!-- Intro -->
            <article id="login">
                <h2 class="major">Login</h2>
                <form method="post" action="#">
                        <div class="field half first">
                            <label for="demo-name">Username</label>
                            <input type="text" name="user" id="username" value="" placeholder="" />
                        </div>
                        <div class="field half">
                            <label for="demo-name">Password</label>
                            <input type="password" name="password" id="password" value="" placeholder="" />
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Log In"/></li>
                            <li><a href="#">Forgot your password?</a></li>
                        </ul>
                </form>
            </article>
            <article id="register">
                <h2 class="major">Register</h2>
                <form method="post" action="#">
                        <div class="field half first">
                            <label for="demo-name">First Name</label>
                            <input type="text" name="firstname" id="firstname" value="" placeholder="Enter your first name" />
                        </div>
                        <div class="field half">
                            <label for="demo-email">Last Name</label>
                            <input type="text" name="lastname" id="lastname " value="" placeholder="Enter your last name" />
                        </div>
                        <div class="field half first">
                            <label for="demo-name">Username</label>
                            <input type="text" name="user" id="username" value="" placeholder="Enter a username of your choice" />
                        </div>
                        <div class="field half">
                            <label for="demo-name">Password</label>
                            <input type="password" name="password" id="password" value="" placeholder="Enter a password of your choice" />
                        </div>
                        <div class="field">
                            <label for="demo-name">Email Address</label>
                            <input type="email" name="email" id="email" value="" placeholder="Enter your email address" />
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Register"/></li>
                            <li><input type="reset" value="Clear" /></li>
                        </ul>
                </form>
            </article>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy;<a href="#">Eslao</a> 2017.</p>
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
