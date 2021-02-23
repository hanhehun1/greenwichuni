<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-bar"></div>
  </div>
  <!-- [ Pre-loader ] end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      <!-- [ Header ] start -->
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a href="index-2.html">
              <img class="img-fluid" src="https://seeklogo.com/images/F/fpt-university-logo-B3B6D84292-seeklogo.com.png" alt="Theme-Logo" style="width: 100px;" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
              <i class="feather icon-more-horizontal"></i>
            </a>
          </div>
          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-prepend search-close">
                      <i class="feather icon-x input-group-text"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <span class="input-group-append search-btn">
                      <i class="feather icon-search input-group-text"></i>
                    </span>
                  </div>
                </div>
              </li>
              <li>
                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                  <i class="full-screen feather icon-maximize"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="user-profile header-notification">
                <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                    <span>Hello <?= $_SESSION['role'] ?>!</span>
                    <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                      <a href="./logout.php">
                        <i class="feather icon-log-out"></i> Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <!-- [ navigation menu ] start -->
          <nav class="pcoded-navbar">
            <div class="nav-list">
              <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigation-label">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                  <?php if ($_SESSION['role'] == 'Administrator') { ?>
                    <li class="">
                      <a href="./?controller=trainer" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Trainers</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=staff" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Staffs</span>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if ($_SESSION['role'] == 'Staff') { ?>
                    <li class="">
                      <a href="./?controller=trainee" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Trainees</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=category" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Categories</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=course" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Courses</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=topic" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Topics</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=trainer" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Trainers</span>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if ($_SESSION['role'] == 'Trainer') { ?>
                    <li class="">
                      <a href="./?controller=topic&action=inprogress" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Assigned Topic</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=trainer&action=detail" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Edit information</span>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if ($_SESSION['role'] == 'Trainee') { ?>
                    <li class="">
                      <a href="./?controller=course&action=inprogress" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Assigned Course</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="./?controller=trainee&action=detail" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">My Information</span>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </nav>
          <!-- [ navigation menu ] end -->
          <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header card">
              <div class="row align-items-end">
                <div class="col-lg-8">
                  <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                      <h5><?= isset($_GET['controller']) ? ucwords($_GET['controller']) : "" ?></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                      <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                      </li>
                      <li class="breadcrumb-item"><a href="#"><?= isset($_GET['controller']) ? ucwords($_GET['controller']) : "" ?></a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">
                    <!-- [ page content ] start -->
                    <div class="row">
                      <?= @$content ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ style Customizer ] start -->
          <div id="styleSelector">
          </div>
          <!-- [ style Customizer ] end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Warning Section Starts -->
  <!-- Older IE warning message -->
  <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="./files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="./files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="./files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="./files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="./files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->