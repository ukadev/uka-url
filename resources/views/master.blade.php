<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="URL Shorter">
    <meta name="author" content="Diego Pazos">
    <title>Simple URL Shortener</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4a6a99">
    <meta name="msapplication-TileColor" content="#4a6a99">
    <meta name="theme-color" content="#4a6a99">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Extra styles -->
    <link href="/css/extra.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/font-awesome.all.min.css">
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">
                <div id="logo">
                    <a href="/"><i class="fa fa-paper-plane" id="logo"></i> Uka url</a>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
<div class="mastfoot">
    <div class="inner">
        <p>URL Shortener by <a href="http://www.ukadev.com">Diego Pazos</a></p>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/functions.min.js"></script>
</body>
</html>
