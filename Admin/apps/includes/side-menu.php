
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="index.php"><span>[</span>FTP ADMIN<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="index.php" class="br-menu-link <?php echo  $dashborad;?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        
        <a href="#" class="br-menu-link  <?php echo  $movies;?>">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">MOVIES</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="viewmovies.php" class="nav-link">VIEW MOVIES</a></li>
          <li class="nav-item"><a href="addmovies.php" class="nav-link">ADD MOVIES</a></li>
          
        </ul>
        <a href="#" class="br-menu-link <?php echo  $series;?>">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">SERIES</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewseries.php" class="nav-link">VIEW SERIES</a></li>
          <li class="nav-item"><a href="addseries.php" class="nav-link">ADD SERIES</a></li>
          
        </ul>
        <a href="#" class="br-menu-link  <?php echo  $software;?>">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">SOFTWARE</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="viewsoftware.php" class="nav-link">VIEW SOFWARES</a></li>
          <li class="nav-item"><a href="addsoftware.php" class="nav-link">ADD SOFTWARE</a></li>
          
        </ul>
        <a href="#" class="br-menu-link <?php echo  $catagories;?>">
          <div class="br-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">CATAGORY</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="mediacatagory.php" class="nav-link">MEDIA CATAGORY</a></li>
          <li class="nav-item"><a href="softwarecatagory.php" class="nav-link">SOFTWARE CATAGORY</a></li>
          
        </ul>
        
      </div><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

      <div class="info-list">
        <div class="d-flex align-items-center justify-content-between pd-x-15">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
          <div>
            <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
            <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- d-flex -->
      </div><!-- info-lst -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
    