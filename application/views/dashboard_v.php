<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wallboard TAM HVC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo_small.png" />
    <style>
        .circle {
            width: 60px;
            height: 60px;
            line-height: 60px;
            border-radius: 50%;
            font-size: 18px;
            color: #fff;
            text-align: center;
            background: #2f8f6b;
            float: right;
        }
        .text-red {
            color:#F40c0c;
        }
        .text-green {
            color:#0cf413;
        }
        .table thead th {
            color:#000;
            background-color:#F4be0c;
        }
        .table tbody td {
            color:#FFF;
        }
        .table tfoot th {
            color:#000;
            background-color:#F4be0c;
        }
        .box-yellow {
            height:85px;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            color:#000;
            background-color:#F4be0c;
        }
        .text-not-contacted {
            color:#F4be0c;
        }
        .text-contacted {
            color:#0cf413;
        }
        .box-red {
            width: 60px;
            height: 30px;
            line-height: 30px;
            border-radius: 10%;
            font-size: 18px;
            color: #fff;
            text-align: center;
            background: #F40c2d;
            float: right;
        }


        /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        *
        */

        .progress {
          width: 150px;
          height: 150px;
          background: none;
          position: relative;
        }

        .progress::after {
          content: "";
          width: 100%;
          height: 100%;
          border-radius: 50%;
          border: 6px solid #eee;
          position: absolute;
          top: 0;
          left: 0;
        }

        .progress>span {
          width: 50%;
          height: 100%;
          overflow: hidden;
          position: absolute;
          top: 0;
          z-index: 1;
        }

        .progress .progress-left {
          left: 0;
        }

        .progress .progress-bar {
          width: 100%;
          height: 100%;
          background: none;
          border-width: 6px;
          border-style: solid;
          position: absolute;
          top: 0;
        }

        .progress .progress-left .progress-bar {
          left: 100%;
          border-top-right-radius: 80px;
          border-bottom-right-radius: 80px;
          border-left: 0;
          -webkit-transform-origin: center left;
          transform-origin: center left;
        }

        .progress .progress-right {
          right: 0;
        }

        .progress .progress-right .progress-bar {
          left: -100%;
          border-top-left-radius: 80px;
          border-bottom-left-radius: 80px;
          border-right: 0;
          -webkit-transform-origin: center right;
          transform-origin: center right;
        }

        .progress .progress-value {
          position: absolute;
          top: 0;
          left: 0;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSE
        * ==========================================
        *
        */

        body {
          background: #ff7e5f;
          background: -webkit-linear-gradient(to right, #ff7e5f, #feb47b);
          background: linear-gradient(to right, #ff7e5f, #feb47b);  
          min-height: 100vh;
        }

        .rounded-lg {
          border-radius: 1rem;
        }

        .text-gray {
          color: #aaa;
        }

        div.h4 {
          line-height: 1rem;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>assets/images/Logo_Infomedia_white.png" alt="logo"/></a>
          <a class="sidebar-brand brand-logo-mini" href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>assets/images/logo_small.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=site_url('dashboard')?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>assets/images/logo_small.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <!-- <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?=base_url()?>assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button> -->
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-2 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-xl-6 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?=$data_hvc?></h2>
                        </div>
                        <h6 class="font-weight-normal">Data HVC</h6>
                      </div>
                      <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-xl-6 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?=$work_order?></h2>
                        </div>
                        <h6 class="font-weight-normal">Work Order</h6>
                      </div>
                      <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-xl-6 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?=$consume?></h2>
                          <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="font-weight-normal">Consume</h6>
                      </div>
                      <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- baris 1 kolom 2-->
              <div class="col-sm-2 grid-margin">
                <div class="card">
                  <div class="card-body" style="background-color:#696b6c;height: 120px;">
                    <h1 class="text-center"><?=$contacted?></h1>
                    <h6 class="text-center font-weight-normal">Contacted</h6>
                  </div>
                </div>
                <div class="card" style="background-color:#2f8f6b;height: 120px;">
                  <div class="card-body">
                    <h1 class="text-center"><?=$success?></h1>
                    <h6 class="text-center font-weight-normal">Success</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-xl-6 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="mb-0 text-center">Convertion Rate</h4>
                        </div>
                      </div>
                      <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                        <div class="circle text-center"><?=$convertion_rate?>%</div>
                      </div>
                    </div>
                  </div>
                </div>
                          <div class="card">
                              <div class="card-body" style="background-color:#F4be0c;color:#000;height:80px">
                                  <div class="row">
                                  <div class="col-6 col-sm-6 col-xl-6 my-auto">
                                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                                      <h4 class="mb-0 text-center">Komplain Handling</h4>
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                                      <h4 class="mb-0 text-center">Open : 0</h4>
                                      <h4 class="mb-0 text-center">Closed : 0</h4>
                                  </div>
                                  </div>
                              </div>
                          </div>
                
                <!-- <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4 col-sm-4 col-xl-4 text-center text-xl-left">
                        <img src="<?=base_url()?>assets/images/logo.jpg" width="75px">
                      </div>
                      <div class="col-8 col-sm-8 col-xl-8 text-center text-xl-left">
                          <h4 class="mb-0">Bella WP</h4>
                          <h4 class="mb-0">Deks Control</h4>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- baris 1 kolom 3 -->
              <div class="col-md-2">
                <div class="card grid-margin">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Preference Channel</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Telepon</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-red"><?=$telepon?></p>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Handphone</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-red">239</p>
                              </div>
                            </div>
                          </div> -->
                          <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Email</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-red"><?=$email?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">WA</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-red"><?=$wa?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">SMS</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-red"><?=$wa?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                          <!-- <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Others</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-red">239</p>
                                </div>
                                </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                          <div class="card">
                              <div class="card-body" style="background-color:#2f8f6b; height:80px">
                                  <div class="row">
                                  <div class="col-6 col-sm-6 col-xl-6 my-auto">
                                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                                      <h4 class="mb-0 text-center">Agent Online <?=$jumlah_agent?></h4>
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right">
                                      <h4 class="mb-0 text-center">WF0 : <?=$jumlah_wfo?></h4>
                                      <h4 class="mb-0 text-center">WFH : <?=$jumlah_wfh?></h4>
                                  </div>
                                  </div>
                              </div>
                          </div>
                  </div>
              </div>
              <!-- baris 1 kolom 4 -->
              <div class="col-md-2">
                <div class="card grid-margin">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Hobby</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                          <div class="preview-item">
                            <br>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Food & Beverage</h6>
                              </div>
                              <div class="text-sm-right">
                                <p class="text-green"><?=$jumlah_fnb?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Otomotif</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-green"><?=$jumlah_otomotif?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Entertaiment</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-green"><?=$jumlah_entertaiment?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Healty</h6>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-green"><?=$jumlah_healty?></p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Sport</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-green"><?=$jumlah_sport?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Movie</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-green"><?=$jumlah_movie?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Education</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-green"><?=$jumlah_education?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Religi</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-green"><?=$jumlah_religi?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Kids</h6>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-green"><?=$jumlah_kids?></p>
                                </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- baris 1 kolom 5 -->
                <div class="col-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="card-title">Order Status</h4> -->
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th> HVC Category </th>
                                        <th class="text-center"> <?=date("F Y",strtotime($tanggal_sekarang.' -1 months'))?> </th>
                                        <th class="text-center"> <?=date("F Y",strtotime($tanggal_sekarang))?> </th>
                                        <th class="text-center"> % GROWTH </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> DIAMOND </td>
                                        <td class="text-center"> <?=$diamond_m1?> </td>
                                        <td class="text-center"> <?=$diamond_m_now?> </td>
                                        <td class="text-center"> <?=round($diamond_growth)?> </td>
                                    </tr>
                                    <tr>
                                        <td> PLATINUM </td>
                                        <td class="text-center"> <?=$platinum_m1?> </td>
                                        <td class="text-center"> <?=$platinum_m_now?> </td>
                                        <td class="text-center"> <?=round($platinum_growth)?> </td>
                                    </tr>
                                    <tr>
                                        <td> GOLD </td>
                                        <td class="text-center"> <?=$gold_m1?> </td>
                                        <td class="text-center"> <?=$gold_m_now?> </td>
                                        <td class="text-center"> <?=round($gold_growth)?> </td>
                                    </tr>
                                    <tr>
                                        <td> SILVER </td>
                                        <td class="text-center"> <?=$silver_m1?> </td>
                                        <td class="text-center"> <?=$silver_m_now?> </td>
                                        <td class="text-center"> <?=round($silver_growth)?> </td>
                                    </tr>
                                    <tr>
                                        <td> REGULER </td>
                                        <td class="text-center"> <?=$reguler_m1?> </td>
                                        <td class="text-center"> <?=$reguler_m_now?> </td>
                                        <td class="text-center"> <?=round($reguler_growth)?> </td>
                                    </tr>
                                    <tr>
                                        <td> CHURN </td>
                                        <td class="text-center"> <?=$churn_m1?> </td>
                                        <td class="text-center"> <?=$churn_m_now?> </td>
                                        <td class="text-center"> <?=round($churn_growth)?> </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th> TOTAL DATA </th>
                                        <th class="text-center"> <?=($diamond_m1 + $platinum_m1 + $gold_m1 + $silver_m1 + $reguler_m1 + $churn_m1)?> </th>
                                        <th class="text-center"> <?=($diamond_m_now + $platinum_m_now + $gold_m_now + $silver_m_now + $reguler_m_now + $churn_m_now)?> </th>
                                        <th class="text-center"> <?=round($diamond_growth + $platinum_growth + $gold_growth + $silver_growth + $reguler_growth + $churn_growth)?> </th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- baris 2 -->
            <div class="row">
              <!-- baris 2 kolom 1 -->
              <div class="col-md-2">  
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-12">
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject text-contacted">Contacted</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-1">
                                        <p class="text-success"><?=$total_contacted?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Success</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_success?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">- Agree Upselling</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_agree_upselling?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">- Profiling</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_profiling?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject"> - Retention</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_retention?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Decline</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_decline?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="preview-item">
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h6 class="preview-subject">Follow UP</h6>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                        <p class="text-success"><?=$total_follow_up?></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- baris 2 kolom 2-->
              <div class="col-md-2">
                  <div class="col-sm-12">
                      <div class="card grid-margin">
                          <div class="card-body">
                            <h6 class="text-center">Komplain Handling</h6>
                            <canvas id="pieChart" style="height:600px"></canvas>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                              <div class="col-12">
                                  <div class="preview-item">
                                      <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                          <h6 class="preview-subject text-not-contacted">Not Contacted</h6>
                                      </div>
                                      <div class="mr-auto text-sm-right pt-2 pt-sm-1">
                                          <p class="text-red"><?=$total_not_contacted?></p>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="preview-item">
                                      <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                          <h6 class="preview-subject">RNA</h6>
                                      </div>
                                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-red"><?=$total_rna?></p>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="preview-item">
                                      <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                          <h6 class="preview-subject">Mailbox</h6>
                                      </div>
                                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-red"><?=$total_mailbox?></p>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="preview-item">
                                      <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                          <h6 class="preview-subject">Telepon Sibuk</h6>
                                      </div>
                                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-red"><?=$total_telepon_sibuk?></p>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="preview-item">
                                      <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                          <h6 class="preview-subject">Others</h6>
                                      </div>
                                      <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-red"><?=$total_others?></p>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- baris 2 kolom 3 -->
              <div class="col-sm-8">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                            <h3 class="card-title text-center">Opportunity Revenue</h3>
                              <!-- <div class="row">
                                  <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-left preview-subject mr-auto text-sm-right pt-2 pt-sm-2">
                                      <h5 class="mb-0">Sales Revenue (MTD)</h5>
                                  </div>
                                  <div class="col-6 col-sm-6 col-xl-6 text-center text-xl-right preview-subject mr-auto text-sm-right pt-2 pt-sm-2">
                                      <h4>Rp. <?=$revenue_bulan?></h4>
                                  </div>
                                  <div class="col-2 col-sm-2 col-xl-2 text-center text-xl-right">
                                    <img src="<?=base_url()?>assets/images/wallet.png" class="rounded" alt="" width="40px">
                                  </div>
                                  <div class="col-2 col-sm-2 col-xl-2 text-center text-xl-left">
                                    <h4 class="preview-subject mr-auto text-sm-right pt-2 pt-sm-2">Rp. <?=$revenue_last_month?></h4>
                                  </div>
                                  <div class="col-2 col-sm-2 col-xl-2 text-center text-xl-left">
                                    <div class="box-red"><?=$growth_revenue?>%</div>
                                  </div>
                              </div> -->
                              <div class="col-xl-12 col-lg-12 mb-4">
                                <div class="rounded-lg p-5 shadow">

                                  <!-- Progress bar 4 -->
                                  <div class="progress mx-auto" data-value='<?=($revenue_last_month == 0) ? 0 : ($persen_revenue)?>'>
                                    <span class="progress-left">
                                                  <span class="progress-bar border-warning"></span>
                                    </span>
                                    <span class="progress-right">
                                                  <span class="progress-bar border-warning"></span>
                                    </span>
                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                      <div class="h2 font-weight-bold"><?=($revenue_last_month == 0) ? 0 : ($persen_revenue)?><sup class="small">%</sup></div>
                                    </div>
                                  </div>
                                  <!-- END -->

                                  <!-- Demo info -->
                                  
                                  <!-- END -->
                                </div>
                                <div class="row text-center mt-4">
                                  <div class="col-6 border-right">
                                    <div class="h4 font-weight-bold mb-0">Rp. <?=$revenue_last_month?></div><span class="small text-white"><?=date("F Y",strtotime($tanggal_sekarang.' -1 months'))?></span>
                                  </div>
                                  <div class="col-6">
                                    <div class="h4 font-weight-bold mb-0">Rp. <?=$revenue_bulan?></div><span class="small text-white"><?=date("F Y", strtotime($tanggal_sekarang))?></span>
                                  </div>
                                </div>
                              </div>
                              <!-- <canvas id="areaChart" style="height:600px"></canvas> -->
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card">
                            <div class="card-body">
                              <h3 class="card-title text-center">Performance - <?=date("d F Y", strtotime($tanggal_sekarang))?></h3>
                              <canvas id="barChart" style="height:500px"></canvas>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
              </div>
            </div>

            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Copyright ©IT MALANG 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url()?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url()?>assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url()?>assets/js/misc.js"></script>
    <script src="<?=base_url()?>assets/js/settings.js"></script>
    <script src="<?=base_url()?>assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=base_url()?>assets/js/dashboard.js"></script>
    <!-- Custom js for this page -->
    <!-- <script src="<?=base_url()?>assets/js/chart.js"></script> -->
    <!-- End custom js for this page -->
    <script>
      $(function() {

        $(".progress").each(function() {

          var value = $(this).attr('data-value');
          var left = $(this).find('.progress-left .progress-bar');
          var right = $(this).find('.progress-right .progress-bar');

          if (value > 0) {
            if (value <= 50) {
              right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
            } else {
              right.css('transform', 'rotate(180deg)')
              left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
            }
          }

        })

        function percentageToDegrees(percentage) {

          return percentage / 100 * 360

        }

      });

      $(function() {
      /* ChartJS
      * -------
      * Data and config for chartjs
      */
      // console.log(<?=$total_agree_upselling_bar18?>);
      'use strict';
      var data = {
        labels: ["8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19"],
        datasets: [{
          label: 'Call Agree Upselling',
          data: [<?=$total_agree_upselling_bar8?>, <?=$total_agree_upselling_bar9?>, <?=$total_agree_upselling_bar10?>, <?=$total_agree_upselling_bar11?>, <?=$total_agree_upselling_bar12?>,
          <?=$total_agree_upselling_bar13?>, <?=$total_agree_upselling_bar14?>, <?=$total_agree_upselling_bar15?>, <?=$total_agree_upselling_bar16?>, <?=$total_agree_upselling_bar17?>,
          <?=$total_agree_upselling_bar18?>, <?=$total_agree_upselling_bar19?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1,
          fill: false,
          order: 1,
        },
        {
          label: 'Dataset2',
          data: [<?=$total_agree_upselling_bar8?>, <?=$total_agree_upselling_bar9?>, <?=$total_agree_upselling_bar10?>, <?=$total_agree_upselling_bar11?>, <?=$total_agree_upselling_bar12?>,
          <?=$total_agree_upselling_bar13?>, <?=$total_agree_upselling_bar14?>, <?=$total_agree_upselling_bar15?>, <?=$total_agree_upselling_bar16?>, <?=$total_agree_upselling_bar17?>,
          <?=$total_agree_upselling_bar18?>, <?=$total_agree_upselling_bar19?>],
          backgroundColor: [
            '#fff',
          ],
          borderColor: [
            '#fff',
          ],
          borderWidth: 1,
          fill: false,
          type: 'line',
          order: 0,
        }
        ]
      };
      var multiLineData = {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Dataset 1',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: [
              '#587ce4'
            ],
            borderWidth: 2,
            fill: false
          },
          {
            label: 'Dataset 2',
            data: [5, 23, 7, 12, 42, 23],
            borderColor: [
              '#ede190'
            ],
            borderWidth: 2,
            fill: false
          },
          {
            label: 'Dataset 3',
            data: [15, 10, 21, 32, 12, 33],
            borderColor: [
              '#f44252'
            ],
            borderWidth: 2,
            fill: false
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            ticks: {
              fontColor: '#fff',
              beginAtZero: true,
              userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }

                 },
            },
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }],
          xAxes: [{
            ticks: {
              fontColor: '#fff',
            },
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }]
        },
        legend: {
          display: true,
          labels: {
                    fontColor: "#fff",
                    fontSize: 14
                }
        },
        elements: {
          point: {
            radius: 0
          }
        }
      };

      
      var doughnutPieData = {
        datasets: [{
          data: [30, 40, 30],
          backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Pink',
          'Blue',
          'Yellow',
        ]
      };
      var doughnutPieOptions = {
        responsive: true,
        animation: {
          animateScale: true,
          animateRotate: true
        }
      };
      var areaData = {
        labels: ["2013", "2014", "2015", "2016", "2017"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1,
          fill: true, // 3: no fill
        }]
      };

      var areaOptions = {
        plugins: {
          filler: {
            propagate: true
          }
        },
        scales: {
          yAxes: [{
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }],
          xAxes: [{
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }]
        }
      }

      var multiAreaData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: 'Facebook',
            data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
            borderColor: ['rgba(255, 99, 132, 0.5)'],
            backgroundColor: ['rgba(255, 99, 132, 0.5)'],
            borderWidth: 1,
            fill: true
          },
          {
            label: 'Twitter',
            data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
            borderColor: ['rgba(54, 162, 235, 0.5)'],
            backgroundColor: ['rgba(54, 162, 235, 0.5)'],
            borderWidth: 1,
            fill: true
          },
          {
            label: 'Linkedin',
            data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
            borderColor: ['rgba(255, 206, 86, 0.5)'],
            backgroundColor: ['rgba(255, 206, 86, 0.5)'],
            borderWidth: 1,
            fill: true
          }
        ]
      };

      var multiAreaOptions = {
        plugins: {
          filler: {
            propagate: true
          }
        },
        elements: {
          point: {
            radius: 0
          }
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            gridLines: {
              display: false
            }
          }]
        }
      }

      var scatterChartData = {
        datasets: [{
            label: 'First Dataset',
            data: [{
                x: -10,
                y: 0
              },
              {
                x: 0,
                y: 3
              },
              {
                x: -25,
                y: 5
              },
              {
                x: 40,
                y: 5
              }
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)'
            ],
            borderWidth: 1
          },
          {
            label: 'Second Dataset',
            data: [{
                x: 10,
                y: 5
              },
              {
                x: 20,
                y: -30
              },
              {
                x: -25,
                y: 15
              },
              {
                x: -10,
                y: 5
              }
            ],
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
              'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
          }
        ]
      }

      var scatterChartOptions = {
        scales: {
          xAxes: [{
            type: 'linear',
            position: 'bottom',
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }],
          yAxes: [{
            gridLines: {
              color: "rgba(204, 204, 204,0.1)"
            }
          }]
        }
      }



    
      // Get context with jQuery - using jQuery's .get() method.
      if ($("#barChart").length) {
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
          type: 'bar',
          data: data,
          options: options
        });
      }

      if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
          type: 'line',
          data: data,
          options: options
        });
      }

      if ($("#linechart-multi").length) {
        var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
        var lineChart = new Chart(multiLineCanvas, {
          type: 'line',
          data: multiLineData,
          options: options
        });
      }

      if ($("#areachart-multi").length) {
        var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
        var multiAreaChart = new Chart(multiAreaCanvas, {
          type: 'line',
          data: multiAreaData,
          options: multiAreaOptions
        });
      }

      if ($("#doughnutChart").length) {
        var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
        var doughnutChart = new Chart(doughnutChartCanvas, {
          type: 'doughnut',
          data: doughnutPieData,
          options: doughnutPieOptions
        });
      }

      if ($("#pieChart").length) {
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
          type: 'pie',
          data: doughnutPieData,
          options: doughnutPieOptions
        });
      }

      if ($("#areaChart").length) {
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        var areaChart = new Chart(areaChartCanvas, {
          type: 'line',
          data: areaData,
          options: areaOptions
        });
      }

      if ($("#scatterChart").length) {
        var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
        var scatterChart = new Chart(scatterChartCanvas, {
          type: 'scatter',
          data: scatterChartData,
          options: scatterChartOptions
        });
      }

      if ($("#browserTrafficChart").length) {
        var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
        var doughnutChart = new Chart(doughnutChartCanvas, {
          type: 'doughnut',
          data: browserTrafficData,
          options: doughnutPieOptions
        });
      }
    });

    </script>
  </body>
</html>