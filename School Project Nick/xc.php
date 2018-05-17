 <?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <!--make it resposive to screen size using bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scaled=1.0">
  <!--title> School Information Management System</title-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
      <a class="navbar-brand js-scroll-trigger" href="index.php">School IMS</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="navbar-collapse collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">     
            <!--li><a href="index.php">Home</a></li -->
              <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                      </li> 
                    
                      <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#about">About</a>
                      </li>
                
                      <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
                </li>
                
              <li>
                <a href="signup.php" class="btn" style="padding-top:30px;color:#fff;">Sign up</a>
              </li>
          </ul>
          <?php  
            if (isset($_SESSION['u_id'])){
              #code...

            echo '<form action="includes/logout-inc.php" method="POST">
                  <button type="submit" name="submit">Logout</button>
                </form>';
            } else{
            echo '<form action="includes/login-inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username/e-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
              </form>';
            }
          ?>
            
      </div>
    </div>
  </nav>
</div>
</header>



 <section id="Home">
      <div class="container" style="max-width: 750px; max-height: 700px; padding:0; top:0; align-text:center; ">              
              <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">     
                 
                  <!---Begin Carousel-->
                    <div id="carouselpatterns" class="carousel slide" data-ride="carousel" style="max-width: 700px; max-height: 850px; padding:0;">
                    <ol class="carousel-indicators">
                        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#theCarousel" data-slide-to="1"></li>
                        <li data-target="#theCarousel" data-slide-to="2"></li>
                    </ol>

                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="Images\green.jpg" alt="First slide">
                                    
                                    </div>


                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="Images\ix.jpg" alt="Second slide">

                                    </div>

                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="Images\cvr.jpg" alt="Third slide">

                                    </div>

                                       <a class="carousel-control-prev" href="#carouselpatterns" role="button" data-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                       </a>
                                
                                       <a class="carousel-control-next" href="#carouselpatterns" role="button" data-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                       </a>

                                </div>

                            <!-- End Carousel-->
                        </div>
               </div> 
              </div>

            </section>

            </body>
</html>