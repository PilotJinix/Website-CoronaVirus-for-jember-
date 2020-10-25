<?php ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 02:53:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Covid-19</title>
</head>

<body>
<!-- Mobile Menu Start Here -->
<div class="mobile-menu" id="home">
    <nav class="mobile-header">
        <div class="header-logo">
            <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="mobile-menu">
        <div class="mobile-menu-area">
            <div class="mobile-menu-area-inner">
                <ul class="lab-ul">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#symptoms">Gejala</a></li>
                    <li><a href="#prevention">Pencegahan</a></li>
                    <li><a href="#faq">Tanya Jawab</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Mobile Menu Ending Here -->

<!-- desktop menu start here -->
<header class="header-section transparent-header" id="home">
    <div class="header-area">
        <div class="container">
            <div class="primary-menu">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/03.png" alt="logo"></a>
                </div>
                <div class="main-area">
                    <div class="main-menu">
                        <ul class="lab-ul">
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#symptoms">Gejala</a></li>
                            <li><a href="#prevention">Pencegahan</a></li>
                            <li><a href="#faq">Tanya Jawab</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="<?= BASEURL; ?>/admin" class="lab-btn style-2"><span>ADMIN</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->

<!-- Banner Section start here -->
<section class="banner-section home-3">
    <div class="banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 col-12">
                    <div class="content-part">
                        <div class="banner-content">
                            <h2>Pemantauan Corona Indonesia</h2>
                            <h4>Total Terkonfirmasi</h4>
                            <?php foreach ($this->tampungsementara4 as $num): ?>
                            <h2 class="count-people"><?= $num['JMLTOT'] ?></h2>
                            <?php endforeach; ?>
                            <ul class="lab-ul">
                                <?php foreach ($this->tampungsementara1 as $num): ?>
                                <li>Dalam Perawatan <span class="count-people"><?= $num['JMLPOS'] ?></span></li>
                                <?php endforeach; ?>
                                <?php foreach ($this->tampungsementara2 as $num): ?>
                                <li>Kasus Sembuh <span class="count-people"><?= $num['JMLSEM'] ?></span></li>
                                <?php endforeach; ?>
                                <?php foreach ($this->tampungsementara3 as $num): ?>
                                <li>Kasus Meninggal <span class="count-people"><?= $num['JMLMEN'] ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                            <!--<a href="#" class="lab-btn style-2"><span>Meet the doctor</span></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="banner-round">
                        <img src="assets/images/banner/home-3/01.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section ending here -->

<!-- about section start here -->
<section class="about-section style-3 bg-about padding-tb" id="about">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="about-thumb">
                    <img src="assets/images/about/home-3/01.png" alt="about">
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="about-content">
                    <div class="ab-title">
                        <span>Bagaimana Virus Menyebar?</span>
                        <h3>Bagaimana Penularan Coronavirus</h3>
                        <p>Dalam masa sulit ini, ingatlah setiap kita memiliki peran penting. Bersama-sama kita bisa melindungi diri dan melindungi sesama dan selamat dari wabah COVID-19. Kita bisa atasi wabah lebih cepat dengan aksi yang tepat.</p>
                        <ul class="lab-ul">
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/01.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Bersentuhan Fisik</h6>
                                    <p>COVID-19 dapat menular ketika orang yang terjangkit virus bersentuhan fisik dengan orang yang sehat.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/02.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Air Transmission</h6>
                                    <p>COVID-19 dapat menyebar terutama dari orang ke orang melalui percikan-percikan dari hidung atau mulut yang keluar saat orang yang terinfeksi COVID-19 batuk, bersin atau berbicara..</p>
                                </div>
                            </li>
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/03.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Menempel pada suatu benda</h6>
                                    <p>COVID-19 dapat menempel di benda dan permukaan lainnya di sekitar orang seperti meja, gagang pintu, dan pegangan tangan..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section start here -->

<!-- Service Section Start Here -->
<section class="service-section home-3 padding-tb" style="background-image: url(assets/css/bg-image/service-bg.jpg);" id="symptoms">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>Gejala yang dialami ?</h2>
            <p> Gejala yang disebabkan penyakit ini biasanya berawal dari gejala ringan. Setelah itu, gejala bisa membaik atau memberat, tergantung pada keadaan sistem imun tubuh penderita..</p>
        </div>
        <div class="section-wrapper">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/01.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Batuk dan Bersin</h4>
                                <p>Flu biasa terjadi ketika rhinovirus menyerang saluran pernapasan. Umumnya, keluhan yang muncul datang dari hidung dan tenggorokan (saluran pernapasan atas).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/02.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Demam</h4>
                                <p>Gejala infkesi virus Corona bisa muncul dalam waktu 2–14 hari setelah terpapar virus Corona,tubuh akan merespon dengan disertai demam yang mencapai <38 C .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/03.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Sakit Kepala</h4>
                                <p>Gejala infkesi virus Corona bisa muncul dalam waktu 2–14 hari setelah terpapar virus Corona,tubuh akan merespon dengan disertai demam yang mencapai <38 C .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/04.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Sesak napas</h4>
                                <p>Gejala infkesi virus Corona bisa muncul dalam waktu 2–14 hari setelah terpapar virus Corona,tubuh akan merespon dengan disertai demam yang mencapai <38 C .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/05.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Tidak enak badan</h4>
                                <p>Gejala infkesi virus Corona bisa muncul dalam waktu 2–14 hari setelah terpapar virus Corona,tubuh akan merespon dengan disertai demam yang mencapai <38 C .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item style-2">
                        <div class="service-inner">
                            <div class="service-thumb">
                                <img src="assets/images/service/home-3/service/06.jpg" alt="service">
                            </div>
                            <div class="service-content">
                                <h4>Sakit tenggorokan</h4>
                                <p>Gejala infkesi virus Corona bisa muncul dalam waktu 2–14 hari setelah terpapar virus Corona,tubuh akan merespon dengan disertai demam yang mencapai <38 C .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section Ending Here -->

<!-- about section start here -->
<section class="about-section style-3 bg-about padding-tb">
    <div class="container">
        <div class="row justify-content-center align-items-center flex-row-reverse">
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="about-thumb">
                    <img src="assets/images/about/home-3/02.png" alt="about">
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="about-content">
                    <div class="ab-title">
                        <span>Covid-19</span>
                        <h3>Pencegahan Coronavirus</h3>
                        <p>Sampai saat ini, belum ada vaksin untuk mencegah infeksi virus Corona atau COVID-19. Oleh sebab itu, cara pencegahan yang terbaik adalah dengan menghindari faktor-faktor yang bisa menyebabkan Anda terinfeksi virus ini</p>
                        <ul class="lab-ul">
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/04.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Cuci Tangan Anda Selama 20 detik</h6>
                                    <p>Dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum..</p>
                                </div>
                            </li>
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/05.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Tutupi Hidung dan Mulut Saat Bersin</h6>
                                    <p>Saat keadaan tubuh kurang sehat biasanya akan mengalami gejala batuk dan bersin,untuk mengurangi tingkat penyebaran viru maka sebaiknya selalu menutup hidung maupun mulut ketika bersin dan batuk.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ab-thumb">
                                    <img src="assets/images/about/icon/home-3/06.jpg" alt="ab-thumb">
                                </div>
                                <div class="ab-content">
                                    <h6>Gunakan Masker</h6>
                                    <p>Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section start here -->

<!-- Team Member Section Start here -->

<!-- Team Member Section Ending here -->

<!-- safe actions section start here -->
<section class="safe-actions style-2 padding-tb bg-action">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>How to Wash Your Hands</h2>
            <p>Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
        </div>
        <div class="row justify-content-center align-items-center" style=" counter-reset: topx;">
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/01.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Wet Hands</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/02.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Apply Soap</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/03.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Rub Hands Palm to palm</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/04.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Lather The Back of Both Hands</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/05.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Scrub Between Your Fingers</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/06.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Rub The Back of Fingers on The Opposing Palm</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/07.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Clean Thumbs</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/08.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Wash Fingernails And Fingertips</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/09.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Rinse Hands</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/10.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Dry with a Single Use Towel</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/11.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Use The Towel to Rurn off The Foucet</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="safe-item">
                    <div class="safe-thumb">
                        <img src="assets/images/safe/home-3/12.jpg" alt="safe">
                    </div>
                    <div class="safe-content">
                        <h6>Your Hands Are Clean</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- safe actions section ending here -->

<!-- Service Section Start Here -->
<section class="service-section home-3 style-2 padding-tb" style="background-image: url(assets/css/bg-image/service-bg.jpg);" id="prevention">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>
                Pencegahan Coronavirus Covid-19</h2>
            <p> CEGAH COVID LEBIH BAIK.</p>
        </div>
        <div class="section-wrapper">
            <div class="row no-gutters">
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-left">
                        <h3>Apa yang seharusya kamu lakukan ?</h3>
                        <div class="row no-gutters justify-content-center">
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/01.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Cuci tangan dengan sabun</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/02.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Gunakan Masker</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/03.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Lindungi mulut dengan tisue</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/04.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Cek kesehatanmu</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-right">
                        <h3>Apa yang sebaiknya kamu hindari?</h3>
                        <div class="row no-gutters justify-content-center">
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/05.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Jangan bersentuhan dengan orang sakit</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/06.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Hindari kontak dengan hewan</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/07.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Hindari keramaian</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item style-2">
                                    <div class="service-inner">
                                        <div class="service-thumb">
                                            <img src="assets/images/service/home-3/08.jpg" alt="service">
                                        </div>
                                        <div class="service-content">
                                            <h4>Hindari memegang benda benda disegala tempat</h4>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
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
</section>
<!-- Service Section Ending Here -->

<!-- faq section start here -->
<section class="faq-section bg-faq padding-tb" id="faq">
    <div class="faq-shape">
        <img src="assets/images/faq/shape/01.png" alt="action-shape">
    </div>
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>Tanya Jawab</h2>
            <p> Pertanyaan yang diperlukan masyarakat</p>
        </div>
        <div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-8 col-12">
                    <ul class="accordion lab-ul">
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Cara mengenakan, menggunakan, melepas dan membuang masker</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Sebelum menyentuh masker, cuci tangan dengan sabun dan air mengalir (minimal 20 detik) atau cairan pembersih berbahan alkohol (minimal 60%).Ambil masker dan periksa apakah ada sobekan atau lubang.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apa saja pengobatan infeksi virus corona (COVID-19) yang tersedia?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Saat ini belum ada pengobatan khusus yang efektif untuk infeksi virus corona baru. Vaksin mungkin baru bisa tersedia 18 bulan ke depan (2021). Sementara ini, cara terbaik adalah melakukan tindakan pencegahan.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apakah vaksin pneumonia melindungi Anda dari virus corona baru?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Tidak. Vaksin pneumonia, seperti vaksin pneumokokus dan vaksin Haemophilus influenza tipe B (Hib), tidak memberi perlindungan terhadap virus corona baru. Virus ini sangat baru dan berbeda sehingga membutuhkan vaksin sendiri. Para peneliti sedang mencoba mengembangkan vaksin melawan COVID-19 dan WHO mendukung upaya mereka. Meskipun vaksin pneumonia tidak efektif terhadap COVID-19, vaksinasi terhadap penyakit pernapasan sangat dianjurkan untuk melindungi kesehatan Anda.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Berapa lama virus ini bertahan di atas permukaan benda?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Belum dipastikan berapa lama virus penyebab COVID-19 bertahan di atas permukaan benda, tetapi perilaku virus ini menyerupai jenis-jenis coronavirus lainnya. Penelitian coronavirus, dan juga informasi awal tentang virus penyebab penyakit COVID-19, mengindikasikan virus dapat bertahan di permukaan benda antara beberapa jam hingga beberapa hari.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apa yang harus saya lakukan bila anggota keluarga menunjukkan gejala?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Segera cari pertolongan kesehatan bila Anda atau anak mengalami demam, batuk dan kesulitan bernapas.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-8 col-12">
                    <ul class="accordion lab-ul">
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Dapatkah lampu ultraviolet membunuh virus corona baru?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Lampu UV sebaiknya tidak digunakan untuk mensterilkan tangan atau area kulit lainnya karena radiasi UV dapat menyebabkan iritasi kulit.

                                    sumber: WHO</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apakah sebaiknya anak saya jangan bersekolah dulu?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Bila anak Anda menunjukkan gejala demam, rasa lelah dan batuk kering, sebaiknya mencari pengobatan dan ikuti perintah dari tenaga kesehatan. Istirahatkan anak di rumah dan hindari tempat keramaian untuk mencegah penyebaran penyakit. Bila anak Anda tidak menunjukkan gejala sebaiknya anak Anda tetap bersekolah, kecuali ada pemberitahuan dari pihak berwenang yang menyatakan sebaliknya. Ajarkan anak perilaku bersih, termasuk perilaku sbb., Sering cuci tangan pakai sabun dan air mengalir atau cairan pembersih berbahan alkohol (60%) Menutup mulut dan hidung saat batuk atau bersin dengan siku terlipat atau tisu, yang langsung dibuang ke tempat sampah tertutup setelah digunakan * Hindari menyentuh mata, mulut dan hidung saat tangan anak belum dicuci pakai sabun</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apakah virus corona baru mempengaruhi anak-anak atau ibu hamil?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Ini adalah virus baru dan kita belum memperoleh pengetahuan yang cukup tentang bagaimana virus mempengaruhi anak-anak atau ibu hamil. Yang telah diketahui: siapapun dari semua kelompok usia dapat terinfeksi virus. Yang kita tahu, sejauh ini jumlah kasus anak-anak terbilang sedikit. Pada sedikit kasus, infeksi virus corona baru dapat berakibat fatal dan kebanyakan itu terjadi di kelompok lansia (lanjut usia) dan mereka yang masalah kesehatan menahun (kronis), seperti tekanan darah tinggi, diabetes atau penyakit jantung.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Apakah virus corona baru bisa ditularkan melalui gigitan nyamyuk?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Sampai saat ini belum ada bukti yang menunjukkan virus corona baru dapat ditularkan nyamuk. Virus corona baru adalah virus pernapasan yang menyebar terutama melalui percikan batuk atau napas orang yang sudah terinfeksi. Untuk melindungi diri Anda, sering-seringlah mencuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, dengan cairan pembersih berbahan alkohol (minimal 60%). Selain itu, hindari kontak dekat dengan siapa pun yang batuk dan bersin. sumber: WHO</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <div class="accordion-list">
                                <div class="left">
                                    <div class="icon"><i class="icofont-info"></i></div>
                                </div>
                                <div class="right">
                                    <h6>Mengapa orang yang dicurigai (suspek) tertular virus corona harus diisolasi setidaknya 14 hari?</h6>
                                </div>
                            </div>
                            <div class="accordion-answer">
                                <p>Virus corona biasanya menunjukkan gejala-gejala dalam 1 – 14 hari. Karena itu, orang yang dicurigai harus diisolasi selama 14 hari, baik di rumah sakit, rumah atau lokasi lain dan dipantau gejala-gejala yang muncul seperti demam, batuk atau sesak napas. Untuk memastikan infeksi virus corona, suspek dapat mengikuti tes beberapa kali. Selama isolasi, suspek harus mengikuti semua perintah petugas kesehatan untuk mencegah penyebaran virus. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section ending here -->

<!-- Blog Section Start Here -->
<section class="blog-section home-3 bgc-blog padding-tb" id="blog">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
            <h2>Berita Seputar Covid-19</h2>
            <p> Apa yang terjadi dengan Indonesia ?</p>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <?php  foreach ($this->tampungsementara as $tblberita): ?>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="post-item style-2">

                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <a href="#"><img src="<?=BASEURL; ?>/img/<?=$tblberita['gambar'] ?>" alt="lab-blog"></a>
                            </div>
                            <div class="post-content">
                                <h7><a href="#"><?= $tblberita['judul'] ?></a></h7>
                                <div class="author-date">
                                    <a href="#" class="date"><i class="icofont-calendar"></i><?= $tblberita['tanggal'] ?></a>

                                </div>
                                <p><?= $tblberita['isi'] ?></p>

                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section Ending Here -->

<!-- Contact Section Start Here -->
<section class="contact-us padding-tb pb-0" id="contact">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <ul class="contact-area lab-ul">
                        <li class="contact-item">
                            <div class="contact-icon">
                                <img src="assets/images/contact/icon/01.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6>Our Location</h6>
                                <p>218 Sahera Tropical Center Room#7 <br> New Elephant Road 1205</p>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-icon">
                                <img src="assets/images/contact/icon/02.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6>Phone Number</h6>
                                <p>01923-970212, 01776-502993 <br> +2154897369</p>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-icon">
                                <img src="assets/images/contact/icon/03.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6>Email Address</h6>
                                <p>suport@admincovid.com</p>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-icon">
                                <img src="assets/images/contact/icon/04.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6>Website Address:</h6>
                                <p>http://admincovid.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-6 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
                    <form class="contact-form" action="http://demos.codexcoder.com/labartisan/html/covid-19/contact.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name" class="contact-input">
                        <input type="email" name="email" placeholder="Your Email" class="contact-input">
                        <input type="text" name="text" placeholder="Your Address" class="contact-input">
                        <input type="text" name="text" placeholder="Your Company" class="contact-input">
                        <textarea rows="5" class="contact-input" placeholder="Your Messages"></textarea>
                        <input type="submit" name="submit" value="Send Message" class="lab-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section Ending Here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url(assets/css/bg-image/footer-bg-3.jpg);">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item first-set">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>About Covid-19</h6>
                                </div>
                                <div class="content">
                                    <p>We believe in Simple Creative and Flexible Design Standards.</p>
                                    <h6>Headquarters:</h6>
                                    <p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p>
                                    <ul class="lab-ul">
                                        <li>
                                            <p><span>Phone:</span>(91) 8547 632521</p>
                                        </li>
                                        <li>
                                            <p><span>Email:</span><a href="#">info@covid-19.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Navigate</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertisers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Resources</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Company</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Connect</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Social Contact</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-facebook"></i>Facebook</a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i>Twitter</a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i>Instagram</a></li>
                                        <li><a href="#"><i class="icofont-youtube"></i>YouTube</a></li>
                                        <li><a href="#"><i class="icofont-xing"></i>Xing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Privacy And Tos</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertiser Agreement</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Acceptable Use Policy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Privacy Policy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Technology Privacy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developer Agreement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p>&copy; 2020 MUHAMMAD AGUNG SANTOSO <a href="https://themeforest.net/user/codexcoder">PILOTJINIX</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ending Here -->

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->



</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 02:53:41 GMT -->
</html>

