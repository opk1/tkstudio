<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <!-- NAVIGATION ----------------------------------------------->
    <div class="container">
        <div class="navbar-spacer"></div>
        <nav class="navbar">
            <div class="container">
                <ul class="navbar-list">
                    <li class="navbar-item"><a class="navbar-link" href="/">Home</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/about">About</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/work">Work</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>


    @yield('footer')
</body>
</html>