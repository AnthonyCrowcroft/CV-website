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
        <h1 class="text-uppercase text-center">Anthony Paul Crowcroft</h1>
        <div class="container">
            <ul class="nav nav-justified navbar-default">
                <li><a ng-class="{ 'active' : isActive('/technology')}" class="text-uppercase" href="/technology">Technology</a></li>
                <li><a ng-class="{ 'active' : isActive('/education')}" class="text-uppercase" href="/education">Education</a></li>
                <li><a ng-class="{ 'active' : isActive('/profile')}" class="text-uppercase" href="/profile">Profile</a></li>
                <li><a ng-class="{ 'active' : isActive('/experience')}" class="text-uppercase" href="/experience">Experience</a></li>
                <li><a ng-class="{ 'active' : isActive('/contact')}" class="text-uppercase" href="/contact">Contact</a></li>
            </ul>
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