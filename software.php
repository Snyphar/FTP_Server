<?php
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

  <section id="dedicated-server">
    <div class="container">
        <div class="row details">
            <div class="col-lg-3">
                <div class="box">
                  <select class="form-select form-select-lg " aria-label=".form-select-lg example">
                    <option selected>Software</option>
                    <option value="1">Game</option>
                    <option value="2">Other</option>

                  </select>

                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="box d-lg-block d-sm-none ">
                    <h2>Name</h2>

                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="box d-lg-block d-sm-none ">
                    <h2>Description</h2>

                </div>
            </div>
            
            <div class="col-lg-2">
                <div class="box">
                    <h2 class="ms-1">
                      Size
                        </h2>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="box">
                  <form class="d-flex from">
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                  </form>

                </div>
            </div>

        </div>
    </div>

</section>
<div class="dedicated-plans-block">
    <div class="container">
        <div class="dedicated-plans-main">
            <div class="dedicated-plans-main-box">
                <!-- <div class="head">
                    <h3>Single Processor</h3>
                    <p>Sort a list of servers by clicking on the column header</p>
                </div> -->
                <?php
                  $conn = dbConnect($servername,$username,$password,$dbname);
                  $software = getSoftware($conn);
                  if ($software->num_rows > 0) {
                    while($row = $software->fetch_assoc()) {
                      echo'
                        <div class="dedicated-plans-main-box-outer">
                        <div class="dedicated-plans-box">
                            <div class="row">
                                <div class="col-lg-3">
                                <div class="box">
                                  <img src="Admin/apps/'.$row["poster"].'" class="soft-thumbnail" height="80" width="60" />
                                  
                                </div>

                            </div>
                                <div class="col-lg-2">
                                    <div class="box">
                                      
                                      <h2> '.$row["title"].'</h2>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="box">

                                        <p>
                                            
                                            '.$row["description"].'
                                        </p>
                                    </div>

                                </div>
                                
                                <div class="col-lg-2">
                                    <div class="box">

                                        <p>
                                            
                                            '.$row["size"].'
                                        </p>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="box">
                                      <div class="mt-2 d-flex  align-items-center">
                                        <a href="'.$row["filepath"].'" target="_blank" class="btn btn-danger">Download</a>
                                    </div>

                                    </div>

                                </div>


                            </div>
                        </div><!--dedicated-plans-box-->





                    </div>
                      ';
                    }
                    
                  }
                  
                ?>
                





                </div>





















































            </div><!--dedicated-plans-main-box-->

            <div class="dedicated-plans-main-box">

                <div class="dedicated-plans-main-box-outer">


                </div>
            </div><!--dedicated-plans-main-box-->
        </div>
    </div>
</div>


































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

 

 <!-- =========Login============================================================================================== -->









































 <!-- =========Login============================================================================================== -->




        <script src="js/jquery.min.js"></script> 
        <script src="js/bootstrap.bundle.min.js"></script> 
        <script src="js/slick.min.js"></script> 
     
        <script src="js/custom.js"></script>
    </body>
</html>