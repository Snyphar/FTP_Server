<?php include 'helpers/editEpisodesForm.php'?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/demo/bracket/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Feb 2022 09:52:42 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="../../../bracket/img/bracket-social.html">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../../../bracket/img/bracket-social.html">
    <meta property="og:image:secure_url" content="../../../bracket/img/bracket-social.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>FTP Admin</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
</head>
<body>
    <?php 
        $series = " active";
        include 'includes/side-menu.php';?>
    <?php include 'includes/head-panel.php';?>

        <!-- ########## START: MAIN PANEL ########## -->
    
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index.php">Admin</a>
            <a class="breadcrumb-item" href="#">Forms</a>
            <span class="breadcrumb-item active">Form Elements</span>
            </nav>
        </div><!-- br-pageheader -->
        
        
        
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">ADD A NEW EPISODE</h4>
            <p class="mg-b-0">To add a new episode to the series, Please
                Select Which Series You want to add and the Season.</p>
                <p class="mg-b-0"></p>
            <div class="container">

            </div>
               
        </div>
        
        
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <?php 
                    if($success == 1)
                    {
                        echo '
                            <div class="row">
                            <div class="col-xl-12">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                <span><strong>Sucess!</strong> Episode Edited!</span>
                                </div><!-- d-flex -->
                            </div><!-- alert -->
                            </div><!-- col-xl-6 -->
                        </div>
                        ';
                    }
                    elseif($success == -1)
                    {
                        echo '
                            <div class="row">
                            <div class="col-xl-12">
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                
                                <span><strong>Oh Snap!</strong> Something went wrong!</span>
                                </div><!-- d-flex -->
                            </div><!-- alert -->
                            </div><!-- col-xl-6 -->
                        </div>
                        ';
                    }
                    elseif($success == -2)
                    {
                        echo '
                            <div class="row">
                            <div class="col-xl-12">
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                
                                <span><strong>Duplicate!</strong> Episode already exist!</span>
                                </div><!-- d-flex -->
                            </div><!-- alert -->
                            </div><!-- col-xl-6 -->
                        </div>
                        ';
                    }
                ?>
                
                
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                            <th class="wd-15p">Poster</th>
                            <th class="wd-15p">Title</th>
                            <th class="wd-15p">Rating</th>
                            <th class="wd-20p">Cast</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conn = dbConnect($servername,$username,$password,$dbname);
                                
                                $series = getSeriesInfo($conn,$sid);
                                if ($series->num_rows > 0) {
                                    // output data of each row
                                    while($row = $series->fetch_assoc()) {
                                      echo '
                                      <tr>
                                        <td><img src="'.$row["poster"].'" alt="" border=3 height=150 width=100></img></td>
                                        <td>'.$row["title"].'</td>
                                        <td>'.$row["rating"].'</td>
                                        <td>'.$row["cast"].'</td>
                                        
                                    </tr>
                                      ';
                                    }
                                }


                            ?>
                            
                        </tbody>
                    </table>
                </div>
            <div class="form-layout form-layout-1">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">EDIT Episode</h6>
                <p class="mg-b-25 mg-lg-b-50"></p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" data-parsley-validate>
                    <div class="wd-300">
                        <div class="d-flex mg-b-30">
                            
                            <div class="form-group mg-b-0 mg-l-20">
                                <label>File Path <span class="tx-danger">*</span></label>
                                <input type="text" name="seriesFileName" class="form-control wd-250"   required >
                                <input type="hidden" name="seid" class="form-control wd-250" value="<?php echo $seid;?>"  required >
                                <input type="hidden" name="sid" class="form-control wd-250" value="<?php echo $sid;?>"  required >
                            </div><!-- form-group -->
                            
                        </div><!-- d-flex -->   
                        <!--<div class="d-flex mg-b-30">
                            
                            <select class="form-control select2" name="seriesID" data-placeholder="Choose Browser">
                                <?php
                                    /*$conn = dbConnect($servername,$username,$password,$dbname);
                                    $series = getSeries($conn);
                                    if ($series->num_rows > 0) {
                                        // output data of each row
                                        while($row = $series->fetch_assoc()) {
                                          echo '<option value="'.$row["sid"].'">'.$row["title"].'</option>';
                                        }
                                      }*/

                                ?>
                                
                            </select>
                        </div> d-flex -->
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info">EDIT EPISODE</button>
                            
                        </div><!-- form-layout-footer -->
                    </div>
                    
                    

                    
                </form>
                <div class="btn">
                <a href="viewepisodes.php?sid=<?php echo $sid; ?>">
                    <button type="button" class="btn btn-warning pd-x-25">BACK</button>
                </a>
                     
                </div><!-- form-layout-footer -->
                
                
                
            </div>
            

            
        </div>




    </div>
    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/chartist/chartist.js"></script>
    <script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../lib/d3/d3.js"></script>
    <script src="../lib/rickshaw/rickshaw.min.js"></script>


    <script src="../js/bracket.js"></script>
    <script src="../js/ResizeSensor.js"></script>
    <script src="../js/dashboard.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>

</body>