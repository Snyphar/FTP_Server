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
      $dashborad = "active";
      include 'includes/side-menu.php';
      include 'includes/head-panel.php';?>
    

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        <p class="mg-b-0">All Information in one place</p>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Movies</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">200</p>
                  <span class="tx-11 tx-roboto tx-white-6">all catagory</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Series</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">100</p>
                  <span class="tx-11 tx-roboto tx-white-6">all catagory</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Visit</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1500</p>
                  <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total View</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">600</p>
                  <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-8">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Network Performance</h6>
                    <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                  </div>
                  <div class="tx-13">
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> TCP Reset Packets</p>
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> TCP FIN Packets</p>
                  </div>
                </div><!-- d-flex -->
              </div>
              <div class="pd-x-15 pd-b-15">
                <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
              </div>
            </div><!-- card -->

            <div class="card bd-0 shadow-base pd-30 mg-t-20">
              <div class="d-flex align-items-center justify-content-between mg-b-30">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Users</h6>
                  <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2017</p>
                </div>
                <a href="#" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
              </div><!-- d-flex -->

              <table class="table table-valign-middle mg-b-0">
                <tbody>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Deborah Miner</h6>
                      <span class="tx-12">@deborah.miner</span>
                    </td>
                    <td>Nov 01, 2017</td>
                    <td><span id="sparkline1">1,4,4,7,5,9,4,7,5,9,1</span></td>
                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Belinda Connor</h6>
                      <span class="tx-12">@belinda.connor</span>
                    </td>
                    <td>Oct 28, 2017</td>
                    <td><span id="sparkline2">1,3,6,4,5,8,4,2,4,5,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Andrew Wiggins</h6>
                      <span class="tx-12">@andrew.wiggins</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline3">1,2,4,2,3,6,4,2,4,3,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Brandon Lawrence</h6>
                      <span class="tx-12">@brandon.lawrence</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline4">1,4,4,7,5,9,4,7,5,9,1</span></td>
                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                  <tr>
                    <td class="pd-l-0-force">
                      <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                    </td>
                    <td>
                      <h6 class="tx-inverse tx-14 mg-b-0">Marilyn Tarter</h6>
                      <span class="tx-12">@marilyn.tarter</span>
                    </td>
                    <td>Oct 27, 2017</td>
                    <td><span id="sparkline5">1,3,6,4,5,8,4,2,4,5,0</span></td>
                    <td class="pd-r-0-force tx-center"><a href="#" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card -->

            <div class="card shadow-base card-body pd-25 bd-0 mg-t-20">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="card-title tx-uppercase tx-12">Statistics Summary</h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">25%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Nulla consequat massa quis enim. Donec pede justo, fringilla vel...</p>
                  <p class="tx-11 lh-3 mg-b-0">You can also use other progress variant found in <a href="progress.html" target="blank">progress section</a>.</p>
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>30/100</span>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->


          </div><!-- col-9 -->
          <div class="col-4">


            <div class="card bd-0 shadow-base pd-30">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Server Status</h6>
              <p class="mg-b-25">Summary of the status of your server.</p>

              <label class="tx-12 tx-gray-600 mg-b-10">CPU Usage (40.05 - 32 cpus)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Memory Usage (32.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-teal wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Disk Usage (82.2%)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Databases (63/100)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Domains (30/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-info wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Email Account (13/50)</label>
              <div class="progress ht-5 mg-b-10">
                <div class="progress-bar bg-purple wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="mg-t-20 tx-13">
                <a href="#" class="tx-gray-600 hover-info">Generate Report</a>
                <a href="#" class="tx-gray-600 hover-info bd-l mg-l-10 pd-l-10">Print Report</a>
              </div>
            </div><!-- card -->

            <div class="card bg-transparent shadow-base bd-0 mg-t-20">
              <div class="bg-primary rounded-top">
                <div class="pd-x-30 pd-t-30">
                  <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">Sale Status</h6>
                  <p class="mg-b-20 tx-white-6">As of October 10 - 17, 2017</p>
                  <h3 class="tx-lato tx-white mg-b-0">$12, 201 <i class="icon ion-android-arrow-up tx-white-5"></i></h3>
                </div>
                <div id="chartLine1" class="wd-100p ht-150"></div>
              </div>
              <div class="bg-white pd-20 rounded-bottom d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-start">
                  <div><span id="sparkline6">5,4,7,5,9,7,4</span></div>
                  <div class="mg-l-15">
                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Average Sales</label>
                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$603, 201</h6>
                  </div>
                </div><!-- d-flex -->
                <div class="d-flex align-items-center">
                  <div><span id="sparkline7">4,7,5,9,4,7,5</span></div>
                  <div class="mg-l-15">
                    <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Total Sales</label>
                    <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$822, 677</h6>
                  </div>
                </div><!-- d-flex -->
              </div><!-- d-flex -->
            </div><!-- card -->

            <div class="card bd-0 mg-t-20">
              <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel2" data-slide-to="1"></li>
                  <li data-target="#carousel2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="bg-br-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">20 Best Travel Tips After 5 Years Of Traveling The World</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">12K+ Views</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">234 Shares</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">43 Comments</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">How I Flew Around the World in Business Class for $1,340</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-purple pd-30 ht-300 d-flex pos-relative align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="#" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="#" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-medium tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">10 Reasons Why Travel Makes You a Happier Person</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="#" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="#" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->

          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
      <?php include 'includes/footer.php';?>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

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
