<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="URL Shorter">
    <meta name="author" content="Diego Pazos">
    <title>Simple URL Shortener</title>
    <!-- Bootstrap core CSS -->
    <link href="//getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="//getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
    <!-- Extra styles -->
    <link href="/css/extra.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
  		<div id="logo">
  			<a href="/"><i class="fa fa-paper-plane" id="logo"></i> UkaURL</a>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/functions.js"></script>
  </body>
</html>
