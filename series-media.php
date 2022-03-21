<?php
  $sid = -1;
  $vid = -1;
  if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['series'])) {
      // collect value of input field
      $sid = $_GET['series'];
      if (empty($sid)) {
        echo "Link is empty";
      } 
      
  }
  elseif($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sid']) && isset($_GET['vid']))
  {
    $sid = $_GET['sid'];
    $vid = $_GET['vid'];
  }
  else{
    //header("Location: index.php");
  }
  include 'db/dbHandle.php';
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
    include 'assets/navbar.php'
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


        <div class="cont col">
            <div class="form sign-in">
              <h2>Welcome back,</h2>
              <label>
                <span>Email</span>
                <input type="email" />
              </label>
              <label>
                <span>Password</span>
                <input type="password" />
              </label>
              <p class="forgot-pass">Forgot password?</p>
              <button type="button" class="submit">Login </button>
              <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
            </div>
            <div class="sub-cont">
              <div class="img">
                <div class="img__text m--up">
                  <h2>New here?</h2>
                  <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__text m--in">
                  <h2>One of us?</h2>
                  <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn">
                  <span class="m--up">REGISTER</span>
                  <span class="m--in">Login </span>
                </div>
              </div>
              <div class="form sign-up">
                <h2>Time to feel like home,</h2>
                <label>
                  <span>Name</span>
                  <input type="text" />
                </label>
                <label>
                  <span>Email</span>
                  <input type="email" />
                </label>
                <label>
                  <span>New Password</span>
                  <input type="password" />
                </label>
                <label>
                  <span>Confirm Password</span>
                  <input type="password" />
                </label>
                <button type="button" class="submit">REGISTER</button>
                <button type="button" class="fb-btn">Join with <span>facebook</span></button>
              </div>
            </div>
          </div>
          













      </div>
    </div>
  </div>





























<!-- =======================================Login===================================== -->




 

<!-- =======================================Login===================================== -->




 <!-- ========== modal========================================================================= -->









 <!-- ========== vdo========================================================================= -->
 <section id="vdo-player">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="row">
                     <div class="vedio">
                      <video
                            id="my-video"
                            class="video-js vjs-big-play-centered video-js vjs-16-9"
                            controls
                            preload="auto"
                            width="100%"
                            height="90%"
                            autoplay
                            data-setup="{}"
                        >
                            <?php
                              $conn = dbConnect($servername,$username,$password,$dbname);
                              if($vid != -1)
                              {
                                $video = getVideoLink($conn,$vid);
                                
                              }
                              else{
                                $video = getSeriesVideo($conn,$sid);
                              }
                              $seriesInfo = getSeriesInfo($conn,$sid);
                              
                              
                            ?>
                            <source src="<?php echo $video;?>" type="video/mp4" />
                            <source src="<?php echo $video;?>" type="video/webm" />
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                            >
                            </p>
                        </video>
                        
                     </div>
                </div>
                <div class="row">
                      <div class="details">
                          <div class="row ">
                              <div class="d-flex justify-content-between">
                                <div class="text1"><h2><?php echo $seriesInfo["title"];?></h2></div>
                                <div class="icon d-flex">
                                    <a href=""> <i class="fas fa-share-alt"></i> Share</a>
                                    <a href="" class="num"> Download</a>
                                
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="text2">
                                <h3>Rating: <?php echo $seriesInfo["rating"];?></h3>
                                <h3>CAST: <?php echo $seriesInfo["cast"];?></h3>
                              </div>
                          </div>
                          <div class="row">
                              <div class="d-flex justify-content-between">
                                  <div class="text3">
                                      <p><?php echo $seriesInfo["plot"];?></p>
                                  </div>
                                  <div class="text4">
                                      <p><span>Genres:</span> <?php echo $seriesInfo["genre"];?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>













             <div class="col-md-4">
                <div class="row">




                  <div class="accordion" id="accordionExample">



<!-- ===================first dropdown================================== -->


                    <?php
                      $season = getSeason($conn,$sid);
                      if ($season->num_rows > 0) {
                          // output data of each row
                          $i = 0;
                          while($row = $season->fetch_assoc()) {
                              $i++;
                              echo'
                              <div class="accordion-item">
                              <h2 class="accordion-header" id="heading'.$i.'">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">                           
                                  <div class="heading-dropdown">
                                    <h2><a href=""  type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="false" aria-controls="collapse'.$i.'">Season'.$row["season"].'</a></h2>
                                  </div>
                                </button>
                              </h2>
                              <div id="collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body " >
                                  <div class="seris scroller">
                                  
                                    <div class="episodes">';


                                    $episodes = getEpisodes($conn,$sid,$row["season"]);
                                    if ($episodes->num_rows > 0) {
                                        // output data of each row
                                        while($row1 = $episodes->fetch_assoc()) {
                                          echo '
                                          <a href="series-media.php?sid='.$sid.'&vid='.$row1["vid"].'">
                                          <div class="details">
                                            <h3>Episode '.$row1["episode"].'</h3>
                                          </div>
                                          </a>
                                          
                                          ';

                                        }
                                      }



                                    echo '
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              ';
                          }
                        }

                    ?>
                  </div>
                </div>
             </div>
        </div>
    </div>
  </div>
</div>


</section>

 <!-- ========== vdo========================================================================= -->




<!-- ==========trailer=========== -->
<section id="trailer" class="trailer">
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="vedio d-flex justify-content-center">
                <video width="70%" height="400" controls class="vdo">
                          
                  <source src="img/Spider-Man Saves Gwen Stacy (Scene) - Spider-Man 3 (2007) Movie CLIP HD.mp4" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
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
  <!-- ==========BLOCKBUSTERS=========== -->
  







 <!-- ==========Footer=========== -->
 <section id="footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="row">
                  <div class="col-lg-12 m-auto">
                      <div class="row">
                           <div class="footer-page ">

                            <div class="row">
                              <div class="col-lg-3 ">
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
                              <div class="col-lg-3 ">
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