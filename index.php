<?php
include_once 'db/dbHandle.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- ======google font=========== -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&family=Raleway:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
     <!-- =========font-awesome======== -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
     <!-- =========bootstrap========= -->
     <link href="css/bootstrap.css" rel="stylesheet">
         <!-- =========boxicons======== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <!-- ==========slick-slider-css=========== -->
     <link href="css/slick.css" rel="stylesheet">
    
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/styles.css">

        <title>Responsive menu dropdown</title>
    </head>
    <body>
    
   <?php
      

      include_once 'assets/navbar.php';
      
   ?>








 <!-- ========== modal========================================================================= -->

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content col-12">
       
           

        <div class="modal-header">
            
            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


        <?php include 'assests/login_register.php'?>
          













      </div>
    </div>
  </div>





























<!-- =======================================Login===================================== -->




 

<!-- =======================================Login===================================== -->




 <!-- ========== modal========================================================================= -->




 <!-- ==========banner========================================================================= -->
 <section id="banner">
    <!--Bg Section1-->
      <div class="banner-s1">
              <div class="banner-slider">
                    <div class="banner-item bg-3">
                      <div class="overlay">
                       <a href="media.html">   <img src="img/banner1.jpg" alt=""></a>  </div> 
                          <div class="container">
                        
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                        <a href="media.html">  <img src="img/banner2.jpg" alt=""></a>
                           </div> 
                          <div class="container">
                        
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                        <a href="media.html"> <img src="img/banner 3.jpg" alt=""> </a>
                           </div> 
                          <div class="container">
                        
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                        <a href="media.html">  <img src="img/banner.jpg" alt=""> </a>
                          </div> 
                          <div class="container">
                        
                          </div>
                      
                    </div>
       







                  
              </div>
      </div>
 </section>
 <!-- ==========banner========================================================================= -->




















 

 <?php
    $conn = dbConnect($servername,$username,$password,$dbname);
    $catagories = getGenre($conn);
    if ($catagories->num_rows > 0) {
      // output data of each row
      while($row = $catagories->fetch_assoc()) {
        echo '
        <section class="Bng">
        <div class="col">  <p>'.strtoupper($row["genre"]).'<span>see all </span></p> </div>
        <div class="container-fluid">
          <div class="banner-s2">
              <div class="banner-slider2">';
              $catItems = getGenreMoviesItem($conn,$row["genre"],"all");
              if ($catItems->num_rows > 0) {
                // output data of each row
                while($row1 = $catItems->fetch_assoc()) {
                  echo'
                    <div class="banner-item ">
                    <div class="overlay ">
                      <a href="">
                        <img src="Admin/apps/'.$row1["poster"].'" alt=""> 
                      </a>
                    </div> 
                      <div class="hover">
                        <a href="media.php?video='.$row1["vid"].'"><i class="fas fa-play-circle"></i></a>
                      </div>
                  
                </div>  
                  ';
                }
              }
              $catSeries = getGenreSeriesItem($conn,$row["genre"],"all");
              if ($catSeries->num_rows > 0) {
                // output data of each row
                while($row1 = $catSeries->fetch_assoc()) {
                  echo'
                    <div class="banner-item ">
                    <div class="overlay ">
                      <a href="">
                        <img src="Admin/apps/'.$row1["poster"].'" alt=""> 
                      </a>
                    </div> 
                      <div class="hover">
                        <a href="series-media.php?series='.$row1["sid"].'"><i class="fas fa-play-circle"></i></a>
                      </div>
                  
                </div>  
                  ';
                }
              }
              echo'
                    <div class="banner-item ">
                        <div class="overlay ">
                          <a href="">
                            <img src="img/slide1.jpg" alt=""> 
                          </a>
                        </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item ">
                      <div class="overlay">
                        <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                        </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider3.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider4.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider5.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider6.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slide2.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slide1.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider3.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider3.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
                    <div class="banner-item bg-3">
                      <div class="overlay">
                          <img src="img/slider3.jpg" alt="">  </div> 
                          <div class="hover">
                            <a href="media.html"><i class="fas fa-play-circle"></i></a>
                          </div>
                      
                    </div>
      
      
      
      
      
      
      
      
                  
              </div>
      </div>
        </div>
      </section>
        ';
      }
    }
          
 ?>


 <!-- ==========bngT=========== -->
 <section id="Bng">
  <div class="col">  <p>BNG<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="media.html"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========bng=========== -->













 <!-- ==========BANGLA DUBBED=========== -->
 <section id="Bng" class="Bng">
  <div class="col">  <p>BANGLA DUBBED<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========BANGLA DUBBED=========== -->

 <!-- ==========BONGO PREMIUM=========== -->
 <section id="" class="BONGO-PREMIUM Bng">
  <div class="col">  <p>BONGO PREMIUM<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========BONGO PREMIUM=========== -->
























 <!-- ==========BEST AND LATEST=========== -->
 <section class="BESt-LATEST">
  <div class="col">  <p>BAKASH JURE MEGH<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider1">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========BEST AND LATEST end=========== -->










 <!-- ==========LATEST BONGO DRAMA=========== -->
 <section id="" class="LATEST-BONGO-DRAMA Bng">
  <div class="col">  <p>LATEST BONGO DRAMA<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========LATEST BONGO DRAMA=========== -->





















 <!-- ==========BLOCKBUSTERS=========== -->
 <section id="" class="BLOCKBUSTERS Bng">
  <div class="col">  <p>BLOCKBUSTERS<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========BLOCKBUSTERS=========== -->



<!-- ==========trailer=========== -->
<section id="trailer" class="trailer">
  <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="vedio">
                <img src="img/banner2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="details">
              <h1>BnG - Trailer</h1>
              <h4>Promotion</h4>
              <a href=""> WATCH NOW</a>
              <p>B & G is going to be a series about teenage friendship, love, relationships and family drama. The whole story revolves around few millennial teenagers who are studying in a same school and their families.</p>
            </div>
          </div>
        </div>
  </div>

</section>
<!-- ==========trailer=========== -->










 <!-- ==========NEWLY ADDED SERIES=========== -->
 <section id="" class="NEWLY ADDED SERIES Bng">
  <div class="col">  <p>NEWLY ADDED SERIES<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========WEST BENGAL MOVIES=========== -->
 <!-- ==========WEST BENGAL MOVIES=========== -->
 <section id="" class="WEST BENGAL MOVIES Bng">
  <div class="col">  <p>WEST BENGAL MOVIES<span>see all </span></p> </div>
  <div class="container-fluid">
    <div class="banner-s2">
        <div class="banner-slider2">
              <div class="banner-item ">
                  <div class="overlay ">
                    <a href="">
                      <img src="img/slide1.jpg" alt=""> 
                    </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item ">
                <div class="overlay">
                  <a href="" >   <img src="img/slide2.jpg" alt=""> </a>
                   </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider4.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider5.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider6.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide2.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slide1.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
              <div class="banner-item bg-3">
                <div class="overlay">
                    <img src="img/slider3.jpg" alt="">  </div> 
                    <div class="hover">
                      <a href="#"><i class="fas fa-play-circle"></i></a>
                    </div>
                
              </div>
 







            
        </div>
</div>
  </div>
</section>
<!-- ==========WEST BENGAL MOVIESS=========== -->


 <!-- ==========Footer=========== -->
 <section id="footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="row">
                  <div class="col-lg-10 m-auto">
                      <div class="row">
                           <div class="footer-page ">

                            <div class="row">
                              <div class="col-lg-4 ">
                                  <div class="footer-details">
                                      <div class="logo">
                                          <img src="img/business.png" alt="">
                                      </div>
                                      <div class="details">
                                        <a href="about.html"> <p>Who we are</p></a>
                                         
                                          <a href="contact.html"><p>Contact Us</p></a>
                                      </div>
                                    
                                  </div>
                              </div>
                              <div class="col-lg-2 ">
                                  <div class="menu-item">
                                      <p>BROWSE</p>
                                     <ul class=" ">
                                         <li><a href="#">Movies </a></li>
                                         <li><a href="#">Shows </a></li>
                                         <li><a href="#">Drama </a></li>
                                         <li><a href="#">Boom </a></li>
                                         <li><a href="#">TV</a></li>
                                        
                                     </ul>
                                  </div>
                              </div>
                              <div class="col-lg-3 ">
                                  <div class="our-service">
                                      <p>LEGAL</p>
                                     <ul class=" ">
                                         <li><a href="#">Terms & Conditions </a></li>
                                         <li><a href="#">Open Source Agreements </a></li>
                                         <li><a href="#">FAQ</a></li>
                                         <li><a href="#">Privacy Policy </a></li>
                                         
                                        
                                     </ul>
                                  </div>
                              </div>
                              <div class="col-lg-3 ">
                                  <div class="bank-card">
                                      <p>FOLLOW</p>
                                      <div class="social-logo">
                                          <ul class=" d-flex ps-0">
                                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                              <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                              <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                       </div>
                                       <!--=============== SCROLL UP ===============-->
                                       <div class="up-to">
                                          <a href="#" class="scrollup" id="scroll-up">
                                              <i class="ri-arrow-up-s-line scrollup__icon"></i>
                                          </a>
                                         </div>
                                  </div>
                              </div>
                            </div>

                           </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <h6 class="text-center">©2022 Bongo. All rights reserved.</h6>

</section>


<!-- ==========Footer end=========== -->

 






        <script src="js/jquery.min.js"></script> 
        <script src="js/bootstrap.bundle.min.js"></script> 
        <script src="js/slick.min.js"></script> 
     
        <script src="js/custom.js"></script>
    </body>
</html>