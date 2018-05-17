<!DOCTYPE HTML>
<html>
    <head>
        <title>Skates R Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/global.css">
    </head>

    <body>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"
            data-toggle="collapse" 
            data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>

            </button> <a href="#" class="navbar-brand">
                Skates R Us
            </a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact / About</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="new.html">New Products</a></li>
                <li><a href="media.html">Media</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Menu -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Items -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="http://lorempixel.com/1500/600/abstract/1" alt="Slide 1" />
        </div>
        <div class="item">
            <img src="http://lorempixel.com/1500/600/abstract/2" alt="Slide 2" />
        </div>
        <div class="item">
            <img src="http://lorempixel.com/1500/600/abstract/3" alt="Slide 3" />
        </div>
    </div> 
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#carousel").carousel();
        </script>
    </body>
</html>