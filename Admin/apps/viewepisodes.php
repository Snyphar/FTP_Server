<?php 
    include 'helpers/dbConnect.php';
    include 'helpers/viewepisodeForm.php';
    ?>
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
        $movies = " active";
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
            <h4 class="tx-gray-800 mg-b-5">VIEW SERIES</h4>
            <p class="mg-b-0">To add a movie to the server Please
                Copy the file to the server & input the 
                file path and IMDb link.</p>
                <p class="mg-b-0"></p>
            <div class="container">

            </div>
               
        </div>
        
        
        <div class="br-pagebody">
            <div class="br-section-wrapper">
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
                                $series = getSeriesInfo($conn,$seriesID);
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
                </div><!-- table-wrapper -->
                <div >
                <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" data-parsley-validate>
                    <div class="wd-300">
                        <div class="d-flex mg-b-30">
                            <div class="form-group mg-b-0 mg-l-20">
                                
                                <input type="text" name="addSeason" placeholder="Enter Season" class="form-control wd-250"   required>
                                <input type="hidden" name="sid" class="form-control wd-250" value="<?php echo $seriesID; ?>"> 
                            </div><!-- form-group -->
                            <div class="form-group mg-b-0 mg-l-20">
                                
                                <button type="submit" class="btn btn-info">ADD SEASON</button>
                                
                            </div><!-- form-layout-footer -->
                            
                        </div>
                    </div>
                    

                </form>
                </div>
                <br><br>
                <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                        //$conn = dbConnect($servername,$username,$password,$dbname);
                        $season = getSeason($conn,$seriesID);
                        if ($season->num_rows > 0) {
                            // output data of each row
                            $i = 0;
                            while($row = $season->fetch_assoc()) {
                                $i++;
                                echo'
                                <div id="acc'.$row["ssid"].'" class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mg-b-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'"
                                        aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                                        SEASON '.$row["season"].'
                                        </a>
                                    </h6>
                                    </div><!-- card-header -->
            
                                    <div id="collapse'.$i.'" class="collapse show" role="tabpanel" >
                                    <div class="card-block pd-20">
                                    <div id="'.$row["ssid"].'" class="btn-group" role="group" aria-label="Basic example">
                                            <a href="editseason.php?ssid='.$row["ssid"].'">
                                                <button type="button" class="btn btn-primary pd-x-25">EDIT SEASON</button>
                                            </a>
                                                <button type="button" class="btn btn-danger pd-x-25 remove-season">Delete</button>
                                            
                                    </div>
                                    ';
                                    
                                        echo '
                                        <div class="table-wrapper">
                                            <table id="datatable1" class="table display responsive nowrap">
                                                <thead>
                                                    <tr>
                                                    <th class="wd-15p">Episode</th>
                                                    <th class="wd-10p">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                    $episodes = getEpisodes($conn,$row["ssid"],$row["season"]);
                                    if ($episodes->num_rows > 0) {
                                        // output data of each row
                                        while($row1 = $episodes->fetch_assoc()) {
                                            echo '
                                                <tr id="'.$row1["seid"].'">
                                                    <td>'.'Episode '.$row1["episode"].'</td>
                                                    <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="editepisodes.php?id='.$row1["seid"].'&sid='.$seriesID.'">
                                                            <button type="button" class="btn btn-warning pd-x-25">EDIT</button>
                                                        </a>
                                                        
                                                    </div>
                                                    </td>
                                                    </td>
                                                        <td id="'.$row1["episode"].'">
                                                        <button type="button" class="btn btn-danger pd-x-25 remove">Delete</button>
                                                    </td>
                                                    
                                                </tr>
                                                ';
                                        }
                                    }
                                    
                                    echo'
                                            </tbody>
                                        </table>
                                        <div>
                                            <a href="addepisode.php?sid='.$seriesID.'&ssid='.$row["ssid"].'">
                                                <button type="button" class="btn btn-primary pd-x-25">ADD EPISODES</button>
                                            </a>    
                                        
                                        </div>
                                    ';



                                    echo '   
                                    </div>
                                    </div>
                                </div><!-- card -->
                                ';
                            }
                        }
                    ?>
                    
                </div><!-- accordion -->
                
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
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
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
      $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        var episode = $(this).parents("td").attr("id");

        if(confirm('Are you sure to remove this Episode "'+episode+'"?'))
        {
            $.ajax({
               url: 'helpers/deleteepisode.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Episode removed successfully");  
               }
            });
        }
        });
        $(".remove-season").click(function(){
        var id = $(this).parents("div").attr("id");
        

        if(confirm('Are you sure to remove this Season?'))
        {
            $.ajax({
               url: 'helpers/deleteseason.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Episode removed successfully");  
                    location.reload();
               }
            });
        }
        });
    </script>

</body>