<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dark Sidebar | Uplon - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body class="left-side-menu-dark topbar-light">

        <!-- Begin page -->
        <div id="wrapper">
            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow text-white m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm-light.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">deeplearning</li>

                            <li>
                                <a href="index.html">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-flip-horizontal"></i>
                                    <span> Layouts </span>
                                    <span class="badge badge-danger badge-pill float-right">New</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                    <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                    <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                    <li><a href="layouts-unsticky.html">Unsticky Layout</a></li>
                                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                </ul>
                            </li>
                
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-google-pages"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-content-copy"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>

                            <li class="menu-title mt-2">Components</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span> User Interface </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-progress.html">Progress</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-package-variant-closed"></i>
                                    <span> Components </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="components-grid.html">Grid</a></li>
                                    <li><a href="components-range-sliders.html">Range sliders</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                    <li><a href="components-ratings.html">Ratings</a></li>
                                    <li><a href="components-treeview.html">Treeview</a></li>
                                    <li><a href="components-tour.html">Tour</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-puzzle-outline"></i>
                                    <span> Widgets </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="widgets-tiles.html">Tile Box</a></li>
                                    <li><a href="widgets-charts.html">Chart Widgets</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span> Icons </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                    <li><a href="icons-weather.html">Weather Icons</a></li>
                                    <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-file-document-box-check-outline"></i>
                                    <span class="badge badge-warning badge-pill float-right">8</span>
                                    <span> Forms </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-poll"></i>
                                    <span> Charts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-peity.html">Peity Charts</a></li>
                                    <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="menu-title mt-2">More</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span> Multi Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 1.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="javascript: void(0);">Level 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Level 2.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                            <li class="breadcrumb-item active">Dark Sidebar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dark Sidebar</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,587</h3>
                                    <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">46,782</span></h3>
                                    <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">15.9</span></h3>
                                    <span class="badge badge-pink mr-1"> 0% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,890</h3>
                                    <span class="badge badge-warning mr-1"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6 col-xl-8">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Sales Statistics</h4>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-success"><i class="mdi mdi-triangle-outline mr-1"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-muted"><i class="mdi mdi-square-outline mr-1"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-bar-stacked" class="morris-chart" style="height: 320px;"></div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-6 col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Trends Monthly</h4>

                                    <div class="text-center mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-secondary">Today</button>
                                            <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                                        </div>
                                    </div>

                                    <div id="morris-donut-example" class="morris-chart" style="height: 268px;"></div>

                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list mb-0 mt-2">
                                            <li class="list-inline-item">
                                                <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>English</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-success"><i class="mdi mdi-triangle-outline mr-1"></i>Italian</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-muted"><i class="mdi mdi-square-outline mr-1"></i>French</h6>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-box">
                                            <h4 class="header-title mb-3">Inbox</h4>

                                            <div class="inbox-widget slimscroll" style="max-height: 324px;">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Chadengle</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">13:40 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Tomaslau</p>
                                                        <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">13:34 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Stillnotdavid</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">13:17 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Kurafire</p>
                                                        <p class="inbox-item-text">Nice to meet you</p>
                                                        <p class="inbox-item-date">12:20 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Shahedk</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Adhamdannaway</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Arashasghari</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle" alt=""></div>
                                                        <p class="inbox-item-author">Joshaustin</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card-box">
                                            <h4 class="header-title mb-3">Sales Statistics</h4>

                                            <p class="font-weight-semibold mb-3">iMacs <span class="text-danger float-right"><b>78%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                            </div>
                                        </div>

                                        <div class="card-box">
                                            <h4 class="header-title mb-3">Monthly Sales</h4>

                                            <p class="font-weight-semibold mb-2">Macbooks <span class="text-success float-right"><b>25%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card-box">
                                            <h4 class="header-title mb-3">Daily Sales</h4>

                                            <p class="font-weight-semibold mb-2">Mobiles <span class="text-warning float-right"><b>75%</b></span></p>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xl-5">
                                <div class="card-box">

                                    <h4 class="header-title mb-3">Top Contracts</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted">Apple Technology</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Envato Pty Ltd.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-danger">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Dribbble LLC.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Adobe Family</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Apple Technology</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-danger">Unpaid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Envato Pty Ltd.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="badge badge-success">Paid</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2023 &copy; Deeplearning - CNN
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>