<!DOCTYPE html>
<html lang="en" ng-app="anthonyApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anthony Paul Crowcroft</title>
    <meta name="google-site-verification" content="nLayH0ppVcnTipa7tzDaXVWmUkOsAbsvPIrjhZdPCAM" />

    <base href="/">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="/js/app.js"></script>

</head>
<body>
    <nav class="nav navbar">
        <div class="container">
            <div class="row">
                <img class="nav-image" src="/images/header.png">
                <h1 class="text-uppercase text-center">Anthony Paul Crowcroft</h1>
            </div>
            <div class="row navbar-toggle nav-mobile-bar">
                <button class="nav-mobile-btn text-uppercase text-spaced" ng-click="navCollapsed = !navCollapsed">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                    Menu
                </button>
                <a class="nav-mobile-btn text-uppercase text-spaced" href="/contact">
                    Contact
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                </a>

            </div>


        </div>
        <div class="collapse navbar-collapse" ng-class="navCollapsed && 'in'">
            <div class="row nav-container">
                <ul class="nav nav-justified">
                    <li><a ng-class="navStyle('/technology')" class="text-uppercase text-spaced" href="/technology">Technology</a></li>
                    <li><a ng-class="navStyle('/education')" class="text-uppercase text-spaced" href="/education">Education</a></li>
                    <li><a ng-class="navStyle('/profile')" class="text-uppercase text-spaced" href="/profile">Profile</a></li>
                    <li><a ng-class="navStyle('/experience')" class="text-uppercase text-spaced" href="/experience">Experience</a></li>
                    <li><a ng-class="navStyle('/contact')" class="text-uppercase text-spaced hidden-xs" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ng-view></ng-view>

    <footer class="footer">
        <div class="text-center">
            <ul class="footer-nav">
                <li class="footer-social footer-github"><a href=""><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
                <li class="footer-social footer-twitter hidden-xs hidden-sm"><a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li class="footer-social footer-linkedin"><a href=""><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                <li class="footer-social footer-facebook"><a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                <li class="footer-social footer-instagram hidden-xs hidden-sm"><a href=""><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>