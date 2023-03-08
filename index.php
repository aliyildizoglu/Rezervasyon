<?php include 'admin/islem.php' ?>
<?php

$anasayfa = $conn->prepare("SELECT * FROM  anasayfa WHERE anasayfa_id=1");
$anasayfa->execute();
$anasayfa_cek = $anasayfa->fetch(PDO::FETCH_ASSOC);

$hakkimda = $conn->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id =1");
$hakkimda->execute();
$hakkimda_cek = $hakkimda->fetch(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="tr">
<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="CV & Resume"/>
    <meta name="keywords" content="vcard, responsive, resume, personal, card, cv, portfolio"/>
    <meta name="author" content="author"/>

    <!-- Title -->
    <title>Resume/CV</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/basic.css"/>
    <link rel="stylesheet" href="css/layout.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/jarallax.css"/>
    <link rel="stylesheet" href="css/swiper.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/brands.min.css"/>
    <link rel="stylesheet" href="css/solid.min.css"/>

    <!-- Theme Colors -->
    <!--	<link rel="stylesheet" href="css/theme-colors/blue.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/green.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/orange.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/brown.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/purple.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/red.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/beige.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/green_light.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/yellow.css" />-->
    <!--	<link rel="stylesheet" href="css/theme-colors/yellow_light.css" />-->


    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicons/favicon.ico">

</head>

<body class="home">

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>

<!-- Container -->
<div class="container">

    <!-- Cursor -->
    <div class="cursor-follower"></div>

    <!-- Header -->
    <header class="header">
        <div class="head-top">

            <!-- menu button -->
            <a href="#" class="menu-btn"><span></span></a>

            <!-- logo -->
            <div class="logo hover-masks-logo">
                <a href="#">
                    <span class="mask-lnk">Kutluhan <strong>Azaflı</strong></span>
                    <span class="mask-lnk mask-lnk-hover">Ali <strong>Yıldızoğlu</strong></span>
                </a>
            </div>

            <!-- top menu -->
            <div class="top-menu hover-masks">
                <div class="top-menu-nav">
                    <div class="menu-topmenu-container">
                        <ul class="menu">
                            <li class="menu-item current-menu-item">
                                <a href="#section-started">Anasayfa</a>
                            </li>
                            <li class="menu-item">
                                <a href="#section-about">Hakkımda</a>
                            </li>
                            <li class="menu-item">
                                <a href="#section-portfolio">Fotoğraflarım</a>
                            </li>
                            <li class="menu-item">
                                <a href="#section-contacts">İletişim</a>
                            </li>
                            <li class="menu-item">
                                <a href="#section-contacts-form">Rezervasyon</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Section Started -->
        <div class="section started" id="section-started">
            <!-- background -->
            <div class="video-bg jarallax"
                 style="background-image: url(admin/resimler/anasayfa_resimler/<?php echo $anasayfa_cek['anasayfa_resim'] ?>);">
                <div class="video-bg-mask"></div>
                <div class="video-bg-texture" id="grained_container"></div>
            </div>

            <!-- started content -->
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="started-content">
                        <h1 class="h-title">
                            <strong><?php echo $anasayfa_cek['anasayfa_isim'] ?></strong>,<br/>
                            <?php echo $anasayfa_cek['anasayfa_mesaj'] ?>

                        </h1>
                        <div class="h-subtitle typing-subtitle">
                            <p><strong><?php echo $anasayfa_cek['anasayfa_aciklama1'] ?></strong></p>
                            <p><?php echo $anasayfa_cek['anasayfa_aciklama2'] ?> </p>
                            <p><strong><?php echo $anasayfa_cek['anasayfa_aciklama3'] ?></strong></p>
                        </div>
                        <span class="typed-subtitle"></span>
                    </div>
                </div>
            </div>

            <!-- mosue button -->
            <a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

        </div>

        <!-- Section About -->
        <div class="section about" id="section-about">

            <!-- title -->
            <div class="title">
                <div class="title_inner">Hakkımda</div>
            </div>

            <div class="content content-box">

                <!-- image -->
                <div class="image">
                    <img src="admin/resimler/hakkimizda_resimler/<?php echo $hakkimda_cek['hakkimizda_resim'] ?>"
                         alt=""/>
                </div>

                <!-- desc -->
                <div class="desc">
                    <p><?php echo $hakkimda_cek['hakkimizda_tanitim'] ?></p>
                    <div class="info-list">
                        <ul>
                            <li><strong>Yaş:</strong> <?php echo $hakkimda_cek['hakkimizda_yas'] ?></li>
                            <li><strong>Adres:</strong> <?php echo $hakkimda_cek['hakkimizda_adres'] ?></li>
                            <li><strong>Telefon:</strong> <?php echo $hakkimda_cek['hakkimizda_telefon'] ?></li>
                            <li><strong>E-mail:</strong> <?php echo $hakkimda_cek['hakkimizda_mail'] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Section Service -->
        <div class="section service" id="section-services">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Sahip Olunan Özellikler</div>
                </div>

                <!-- service items -->




                <div class="service-items">
                    <?php
                    $isler = $conn->prepare("SELECT * FROM isler WHERE  isler_durum= '0'");
                    $isler->execute(['isler_durum' => '0']);
                    while ($isler_cek = $isler->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="<?php echo $isler_cek['isler_ikon'] ?>"></span></div>
                            <div class="name"><?php echo $isler_cek['isler_baslik'] ?></div>
                            <div class="text"><?php echo $isler_cek['isler_aciklama'] ?>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Section Design Skills -->
        <div class="section skills" id="section-skills">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Becerilerim</div>
                </div>

                <!-- skills items -->
                <div class="skills percent content-box">
                    <ul>
                        <?php
                        $beceri = $conn->prepare("SELECT * FROM beceri WHERE  beceri_durumu= '0'");
                        $beceri->execute(['beceri_durumu' => '0']);
                        while ($beceri_cek = $beceri->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <li>
                            <div class="name"><?php echo $beceri_cek['beceri_baslik'] ?></div>
                            <div class="progress ">
                                <div class="percentage" style="width: <?php echo $beceri_cek['beceri_bilgi'] ?>%;">
                                    <span class="percent"><?php echo $beceri_cek['beceri_bilgi'] ?>%</span>
                                </div>
                            </div>
                        </li>

                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Languages Skills -->
        <div class="section skills" id="section-skills-lang">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Bildiğim Diller</div>
                </div>

                <!-- skills items -->
                <div class="skills dotted content-box">
                    <ul>
                        <?php
                        $dil = $conn->prepare("SELECT * FROM dil WHERE  dil_durumu= '0'");
                        $dil->execute(['dil_durumu' => '0']);
                        while ($dil_cek = $dil->fetch(PDO::FETCH_ASSOC)){
                        ?>


                        <li>
                            <div class="name"><?php echo $dil_cek['dil_ismi'] ?></div>
                            <div class="progress">
                                <div class="percentage" style="width: <?php echo $dil_cek['dil_yuzdesi'] ?>%;">
                                    <span class="percent"><?php echo $dil_cek['dil_yuzdesi'] ?>%</span>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Knowladge Skills -->
        <div class="section skills" id="section-skills-know">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Bilgiler</div>
                </div>

                <!-- skills -->
                <div class="skills list content-box">
                    <ul>
                        <?php
                        $bilgi = $conn->prepare("SELECT * FROM bilgi WHERE  bilgi_durum= '0'");
                        $bilgi->execute(['dil_durum' => '0']);
                        while ($bilgi_cek = $bilgi->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <li>
                            <div class="name"><?php echo $bilgi_cek['bilgi_aciklama'] ?></div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Interests -->
        <div class="section service" id="section-interests">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">İlgi Alanlarım</div>
                </div>

                <!-- interests items -->
                <div class="service-items">

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-baseball-ball"></span></div>
                            <div class="name">Basketball</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-campground"></span></div>
                            <div class="name">Camping</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-chess-knight"></span></div>
                            <div class="name">Chess</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-headphones"></span></div>
                            <div class="name">Music</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Section Testimonials -->
        <div class="section testimonials" id="section-testimonials">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Hakkımda İnsanların Söyledikleri</div>
                </div>

                <!-- testimonials items -->
                <div class="reviews-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="reviews-item content-box">
                                    <div class="image">
                                        <img src="images/rev1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name">Aleyna</div>
                                        <div class="company">Okul Öncesi Öğretmenliği</div>
                                    </div>
                                    <div class="text">
                                        Benzersiz bir gece yaşattığı için teşekkür ederim. İyi ki varsın.
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="reviews-item content-box">
                                    <div class="image">
                                        <img src="images/rev1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name">Ali</div>
                                        <div class="company">Bilgisayar Mühendisliği</div>
                                    </div>
                                    <div class="text">
                                        Çok iyi bir dost ve arkadaş. Tanıştığım için çok mutluyum.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="swiper-nav">
                        <a class="prev swiper-button-prev fas fa-long-arrow-alt-left"></a>
                        <a class="next swiper-button-next fas fa-long-arrow-alt-right"></a>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Custom Text -->
        <div class="section custom-text" id="section-custom-text">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Custom Text</div>
                </div>

                <!-- clients items -->
                <div class="content-box">
                    <div class="single-post-text">
                        <p>
                            Now there is more fashion. There is no so-called trends. Now chase after anything not
                            necessary — nor for fashionable color nor the shape, nor for style. Think about the content
                            that you want to invest in a created object, and only then will form. The thing is your
                            spirit. A spirit unlike forms hard copy.
                        </p>
                        <p>
                            Here choose yourself like that, without any looking back, do your personal, home, small
                            fashion, and all will be well.
                        </p>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Works -->
        <div class="section works" id="section-portfolio">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Fotoğraflarım</div>
                </div>

                <!-- portfolio filter -->
                <div class="filter-menu content-box">
                    <div class="filters">
                        <div class="btn-group">
                            <label data-text="All" class="glitch-effect"><input type="radio" name="fl_radio"
                                                                                value=".box-item"/>All</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Video"><input type="radio" name="fl_radio" value=".f-video"/>Video</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Music"><input type="radio" name="fl_radio" value=".f-music"/>Music</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Links"><input type="radio" name="fl_radio" value=".f-links"/>Links</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Image"><input type="radio" name="fl_radio" value=".f-image"/>Image</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Gallery"><input type="radio" name="fl_radio"
                                                              value=".f-gallery"/>Gallery</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Content"><input type="radio" name="fl_radio"
                                                              value=".f-content"/>Content</label>
                        </div>
                    </div>
                </div>

                <!-- portfolio items -->
                <div class="box-items portfolio-items">

                    <div class="box-item f-gallery">
                        <div class="image">
                            <a href="#gallery-1" class="has-popup-gallery hover-animated">
                                <img src="images/work1.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-images"></span>
												<span class="desc">
													<span class="category">Gallery</span>
													<span class="name">Shot in Iceland</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                            <div id="gallery-1" class="mfp-hide">
                                <a href="images/work1.jpg"></a>
                                <a href="images/work2.jpg"></a>
                                <a href="images/work3.jpg"></a>
                                <a href="images/work4.jpg"></a>
                            </div>
                        </div>
                    </div>

                    <div class="box-item f-links">
                        <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
                        <div class="image">
                            <a href="https://google.com/" class="has-popup-link hover-animated" target="_blank">
                                <img src="images/work3.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-link"></span>
												<span class="desc">
													<span class="category">Links</span>
													<span class="name">Nike Red</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <div class="box-item f-video">
                        <div class="image">
                            <a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video hover-animated">
                                <img src="images/work2.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-video"></span>
												<span class="desc">
													<span class="category">Video</span>
													<span class="name">Fertility of Some Plants</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <div class="box-item f-image">
                        <div class="image">
                            <a href="images/work4.jpg" class="has-popup-image hover-animated">
                                <img src="images/work4.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-image"></span>
												<span class="desc">
													<span class="category">Image</span>
													<span class="name">Inspiration in Cap Haitian</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <div class="box-item f-image">
                        <div class="image">
                            <a href="images/work7.jpg" class="has-popup-image hover-animated">
                                <img src="images/work7.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-image"></span>
												<span class="desc">
													<span class="category">Image</span>
													<span class="name">Water and Shore</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <div class="box-item f-music">
                        <div class="image">
                            <a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true"
                               class="has-popup-music hover-animated">
                                <img src="images/work6.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-music"></span>
												<span class="desc">
													<span class="category">Music</span>
													<span class="name">Dark Bike</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <div class="box-item f-gallery">
                        <div class="image">
                            <a href="#gallery-2" class="has-popup-gallery hover-animated">
                                <img src="images/work5.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-images"></span>
												<span class="desc">
													<span class="category">Gallery</span>
													<span class="name">Undulating Space</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                            <div id="gallery-2" class="mfp-hide">
                                <a href="images/work5.jpg"></a>
                                <a href="images/work1.jpg"></a>
                                <a href="images/work2.jpg"></a>
                                <a href="images/work3.jpg"></a>
                            </div>
                        </div>
                    </div>

                    <div class="box-item f-content">
                        <div class="image">
                            <a href="#popup-1" class="has-popup-media hover-animated">
                                <img src="images/work8.jpg" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-plus"></span>
												<span class="desc">
													<span class="category">Content</span>
													<span class="name">Curved Ceiling Ribs</span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                        <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image" style="background-image: url(images/work8.jpg);"></div>
                                <div class="desc single-post-text">
                                    <div class="category">Content</div>
                                    <h4>Hand holding pyramid painting</h4>
                                    <p>
                                        Now there is more fashion. There is no so-called trends. Now chase after
                                        anything not necessary — nor for fashionable color nor the shape, nor for style.
                                        Think about the content that you want to invest in a created object, and only
                                        then will form. The thing is your spirit. A spirit unlike forms hard copy.
                                    </p>
                                    <ul>
                                        <li>Now there is more fashion. There is no so-called trends.</li>
                                        <li>Now chase after anything not necessary — nor for fashionable color nor the
                                            shape, nor for style.
                                        </li>
                                        <li>Think about the content that you want to invest in a created object, and
                                            only then will form.
                                        </li>
                                        <li>The thing is your spirit. A spirit unlike forms hard copy.</li>
                                    </ul>
                                    <p>
                                        Now there is more fashion. There is no so-called trends. Now chase after
                                        anything not necessary — nor for fashionable color nor the shape, nor for style.
                                        Think about the content that you want to invest in a created object, and only
                                        then will form. The thing is your spirit. A spirit unlike forms hard copy.
                                    </p>
                                    <a href="works_single_1.html" class="btn hover-animated">
                                        <span class="circle"></span>
                                        <span class="lnk">View Project</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Section Contacts Info -->
        <div class="section contacts" id="section-contacts">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Benimle İletişime Geç</div>
                </div>

                <!-- contacts items -->
                <div class="service-items">

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-phone"></span></div>
                            <div class="name">Telefon</div>
                            <div class="text">+90 (555) 555 55 55</div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fas fa-envelope"></span></div>
                            <div class="name">Email</div>
                            <div class="text"><a href="mailto:steve-pearson@gmail.com">test@gmail.com</a></div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fab fa-instagram"></span></div>
                            <div class="name">Instagram</div>
                            <div class="text">2621 W Pico Blvd, Los Angeles</div>
                        </div>
                    </div>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="fab fa-snapchat"></span></div>
                            <div class="name">Snapchat</div>
                            <div class="text">2621 W Pico Blvd, Los Angeles</div>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>
            </div>
        </div>

        <!-- Section Contacts Form -->
        <div class="section contacts" id="section-contacts-form">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner">Rezervasyon Al</div>
                </div>

                <!-- form -->
                <div class="contact_form content-box">
                    <form id="cform" method="post">
                        <div class="group-val">
                            <input type="text" name="name" placeholder="İsim"/>
                        </div>
                        <div class="group-val">
                            <input type="number" name="number" placeholder="Numara"/>
                        </div>
                        <div class="group-val ct-gr">
                            <textarea name="message" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="group-bts">
                            <button type="submit" class="btn hover-animated">
                                <span class="circle"></span>
                                <span class="lnk">Randevu Al</span>
                            </button>
                        </div>
                    </form>
                    <div class="alert-success">
                        <p>Thanks, your message is sent successfully.</p>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <!-- Section Started -->
        <div class="section started section-title" id="section-map">

            <!-- background -->
            <div class="video-bg">
                <div class="map" id="map"></div>
                <div class="video-bg-mask"></div>
                <div class="video-bg-texture" id="grained_container"></div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="copy">
            <p>E: test@gmail.com</p>
            <p>T: +90 (555) 555 55 55</p>
        </div>
        <div class="soc-box">
            <div class="follow-label">Beni Takip Et</div>
            <div class="soc">
                <a target="_blank" href="https://www.pinterest.com/">
                    <span class="icon fab fa-pinterest"></span>
                </a>
                <a target="_blank" href="https://www.instagram.com/">
                    <span class="icon fab fa-instagram"></span>
                </a>
                <a target="_blank" href="https://dribbble.com/">
                    <span class="icon fab fa-dribbble"></span>
                </a>
            </div>
        </div>
        <div class="clear"></div>
    </footer>

    <!-- Lines -->
    <div class="lines">
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
        <div class="line-col"></div>
    </div>

</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/magnific-popup.js"></script>
<script src="js/simpleParallax.js"></script>
<script src="js/typed.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/jarallax-video.js"></script>
<script src="js/jarallax-element.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/swiper.js"></script>
<script src="js/grained.js"></script>

<!-- Google map api -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

<script src="js/scripts.js"></script>

</body>
</html>