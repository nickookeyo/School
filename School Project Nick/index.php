
<?php
     include_once 'header.php';
?>
   
   <section id="Home">
      <div class="container" style="max-width: 750px; max-height: 700px; padding:0; top:0; align-text:center; margin-top: 0%; ">              
              <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">     
                 
                  <!---Begin Carousel-->
                    <div id="carouselpatterns" class="carousel slide" data-ride="carousel" style="max-width: 700px; max-height: 850px; padding:0; margin-top: -19%; ">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselpatterns" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselpatterns" data-slide-to="1"></li>
                        <li data-target="#carouselpatterns" data-slide-to="2"></li>
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
                                </div> 
                                <!-- End Carousel inner-->

                                       <a class="carousel-control-prev" href="#carouselpatterns" role="button" data-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                         <span class="sr-only">Previous</span>
                                       </a>
                                
                                       <a class="carousel-control-next" href="#carouselpatterns" role="button" data-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="false"></span>
                                         <span class="sr-only">Next</span>
                                       </a>


                        </div>              
                        <!-- End Carousel-->

               </div> 
              </div>
            </div>
            </section>
            <section id="about">
            <div class="container">  
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-8 col-lg-4">
                Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
                Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
                </div>
                <div class="col-xs-12 col-md-6 col-sm-8 col-lg-4" style="">
                Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
                Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
                </div>
                <div class="col-xs-12 col-md-6 col-sm-8 col-lg-4">
                Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
                Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
                </div>
            </div>
        

        <?php 
        // use "isset()" function to change any content on any page when a user is logged in. 
            if (isset($_SESSION['u_id'])){
                # code...
                echo "You are logged in!";
            }
        ?>
      </div>
    </section>

<?php
    include_once 'footer.php';
?>