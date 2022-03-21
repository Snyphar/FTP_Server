
<!--===== ===================================================
    ============================================================
    =============================================================
    responsive navbar
    ==============================================================
    ===========================================================
    ==============================================================
    ====================================================== =====-->      
    <section id="menu">
    <div class="header container-fluid " >
        <a href="#" class="header__logo"><img src="img/business.png"> </a>

         <i class='bx bx-menu header__toggle' id="header-toggle"> </i>

        <nav class="nav col" id="nav-menu">
           <div class="menu col-md-12 ">
                 <div class="row ">
                    <div class="d-flex justify-content-between">
                        <div class="col-md">
                            <div class="logo ">
                                <a href="index.php"><img src="img/business.png"> </a>
                            </div>
                         </div>
                     
                          <div class="col-md-9">
                            <div class="nav-item">
                                <ul class="d-flex list">
                                <li>
                                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Movie
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="movie.php?catagory=all">All</a></li>
                                        <?php
                                           $conn = dbConnect($servername,$username,$password,$dbname);
                                           $catagories = getCatagories($conn);
                                           if ($catagories->num_rows > 0) {
                                             // output data of each row
                                             while($row = $catagories->fetch_assoc()) { 
                                                 echo '<li><a class="dropdown-item" href="movie.php?catagory='.$row["catagories"].'">'.$row["catagories"].'</a></li>';
                                             }
                                            }
                                        ?>
                                        
        
                                    </ul>
                                </li>
                                <li>
                                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Series
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="series.php?catagory=all">All</a></li>
                                        <?php
                                           $conn = dbConnect($servername,$username,$password,$dbname);
                                           $catagories = getCatagories($conn);
                                           if ($catagories->num_rows > 0) {
                                             // output data of each row
                                             while($row = $catagories->fetch_assoc()) { 
                                                 echo '<li><a class="dropdown-item" href="series.php?catagory='.$row["catagories"].'">'.$row["catagories"].'</a></li>';
                                             }
                                            }
                                        ?>
                                        
        
                                    </ul>
                                </li>
                                    <!--<li><a href="movie.php">Movie </a></li>
                                    <li><a href="series.php">Series </a></li>-->
                                    <li><a href="software.php">Software </a></li>
                                   
                                </ul>
                            </div>
                          </div>
                         <div class="col-md-2">
                            <div class="login-contact d-flex">
                                <a class="num" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login / Registered</a>
                            
                            </div>
                         </div>
                    </div>
                 </div>
           </div>
        </nav>
      </div>
  </section>
 <!--===== ===================================================
    ============================================================
    =============================================================
    responsive navbar end
    ==============================================================
    ===========================================================
    ==============================================================
    ====================================================== =====-->    
        <!--===== MAIN JS =====-->

