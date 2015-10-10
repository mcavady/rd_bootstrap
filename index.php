<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Developer - Websites - Bootstrap - Sass - Compass - JQuery - Ruby - html5</title>
    <link rel="stylesheet" href="../rd_bootstrap/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../rd_bootstrap/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
    <script src="../rd_bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="../rd_bootstrap/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <link href="../rd_bootstrap/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <!--    <link href="../rd_bootstrap/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />-->
    <!--[if IE]>
    	<link href="../rd_bootstrap/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--<link rel="stylesheet" href="../rd_bootstrap/font-awesome-4.4.0/css/font-awesome.min.css">-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <!-- Carousel
        ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->


</header>
<div class="container">
    <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Carousel ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>-->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Website Specialist</h1>
			    <i class="fa fa-globe fa-6x"></i>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Hosting Solution Provider</h1>
			    <i class="fa fa-sitemap fa-5x"></i>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="../rd_bootstrap/images/gallery-image-1.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Support Provider</h1>
			    <i class="fa fa-ticket fa-6x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>-->
            <!--<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>-->
        </div><!-- /.carousel -->
    </header>
>>>>>>> master
    <!-- placed here for a reason, not semantic -->
    <aside class="pull-right col-lg-4 col-md-4 col-sm-4 hidden-xs">
        sidebar
    </aside>
    <!-- main content og the page -->
    <main class="pull-left col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <article id="home" class="">
            <h2>Websites</h2>
		<i class="fa fa-globe fa-5x"></i>
		<i class="fa fa-globe fa-6x"></i>
        </article>
    </main>
<!-- full page width footer -->
<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="footer-col col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <i class="fa fa-car fa-5x"></i>
    </div>
    <div class="footer-col col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <i class="fa fa-car fa-5x"></i>
    </div>
    <div class="footer-col col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <i class="fa fa-car fa-5x"></i>
    </div>
    <div class="footer-col col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <i class="fa fa-car fa-5x"></i>
    </div>
</footer>
</body>
</html>
