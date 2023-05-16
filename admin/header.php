<?php include 'conn.php' ?>
<?php include 'islem.php' ?>

<?php
$kullanici = $conn->prepare("SELECT * FROM kullanici where kullanici_adi =?");
$kullanici->execute();
$kullanici_cek = $kullanici->fetch(PDO::FETCH_ASSOC);
if ($_SESSION['kullanici_adi'] == $kullanici_cek['kullanici_adi'] ){
    session_destroy();
    session_unset();


}







?>






<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="Ali Yıldızoğlu">
    <meta name="keywords" content="ali, yıldızoğlu,Ali Yıldızoğlu, Bilgisayar Mühendisi, ">

    <title>Rezervasyon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="assets/images/favicon.png" />



</head>
<body>
<div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                Ali<span>YILDIZOĞLU</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Ayarlar</li>
                <li class="nav-item">
                    <a href="anasayfa.php" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Anasayfa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="hakkimda.php" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Hakkımda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="isler.php" class="nav-link">
                        <i class="link-icon" data-feather="clock"></i>
                        <span class="link-title">Yaptığım İşler</span>
                    </a>
                </li> <li class="nav-item">
                    <a href="beceri.php" class="nav-link">
                        <i class="link-icon" data-feather="code"></i>
                        <span class="link-title">Becerilerim</span>
                    </a>
                </li>
                </li> <li class="nav-item">
                    <a href="dil.php" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Bildiğim Diller</span>
                    </a>
                </li>
                </li> <li class="nav-item">
                    <a href="bilgi.php" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Bilgiler</span>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="hobi.php" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Hobiler</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="insanlar.php" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Hakkımda Söyledikleri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="yazi-alani.php" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Serbest Yazı Alanı</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
                        <i class="link-icon" data-feather="pie-chart"></i>
                        <span class="link-title">Fotoğraflarım</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="video.php" class="nav-link">Video</a>
                            </li>
                            <li class="nav-item">
                                <a href="muzik.php" class="nav-link">Müzik</a>
                            </li>
                            <li class="nav-item">
                                <a href="link.php" class="nav-link">Link</a>
                            </li>

                            <li class="nav-item">
                                <a href="galeri" class="nav-link">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a href="yazilarim.php" class="nav-link">Yazılarım</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="iletisim.php" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">İletişim</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tema-rengi.php" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Tema Rengi</span>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="rezervasyon.php" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Rezervasyon</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="wp.php" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Whatsapp</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- partial -->

    <?php
    $hakkimizda = $conn->prepare("SELECT * FROM  hakkimizda WHERE hakkimizda_id=1");
    $hakkimizda->execute();
    $hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

    ?>

    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">

                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="wd-30 ht-30 rounded-circle" src="resimler/hakkimizda_resimler/<?php echo $hakkimizda_cek['hakkimizda_resim'] ?>"    alt="profile">
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                            <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                <div class="mb-3">
                                    <img class="wd-80 ht-80 rounded-circle" src="resimler/hakkimizda_resimler/<?php echo $hakkimizda_cek['hakkimizda_resim'] ?>" alt="Profil Fotoğrafı">
                                </div>
                                <div class="text-center">


                                    <p class="tx-16 text">Ali Yıldızoğlu</p>
                                    <p class="tx-12 text-muted"><?php echo $hakkimizda_cek['hakkimizda_mail'] ?></p>
                                    <p class="tx-12 text-muted"><?php echo $hakkimizda_cek['hakkimizda_telefon'] ?></p>
                                </div>
                            </div>
                            <ul class="list-unstyled p-1">
                                <a href="hakkimda.php" class="text-body ms-0">
                                <li class="dropdown-item py-2">

                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>

                                </li>
                                </a>
                                <a href="login.php" class="text-body ms-0">
                                <li class="dropdown-item py-2">

                                        <i class="me-2 icon-md" data-feather="log-out"></i>
                                        <span>Çıkış Yap</span>

                                </li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->