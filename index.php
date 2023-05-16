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
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/brands.min.css"/>
    <link rel="stylesheet" href="css/solid.min.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>


    <!-- Theme Colors -->

    <?php


    $tema = $conn->prepare("SELECT * FROM  tema WHERE tema_id = 1");
    $tema->execute();
    $tema_cek = $tema->fetch(PDO::FETCH_ASSOC);

    if($tema_cek['tema_rengi_durum'] == 0){ ?>
      	<link rel="stylesheet" href="css/theme-colors/blue.css" />
     <?php }
    if($tema_cek['tema_rengi_durum'] == 1){ ?>
    <link rel="stylesheet" href="css/theme-colors/green.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 2){ ?>
    <link rel="stylesheet" href="css/theme-colors/orange.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 3){ ?>
    <link rel="stylesheet" href="css/theme-colors/brown.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 4){ ?>
    <link rel="stylesheet" href="css/theme-colors/purple.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 5){ ?>
    <link rel="stylesheet" href="css/theme-colors/red.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 6){ ?>
    <link rel="stylesheet" href="css/theme-colors/beige.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 7){ ?>
    <link rel="stylesheet" href="css/theme-colors/green_light.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 8){ ?>
    <link rel="stylesheet" href="css/theme-colors/yellow.css" />
    <?php }
    if($tema_cek['tema_rengi_durum'] == 9){ ?>
    <link rel="stylesheet" href="css/theme-colors/yellow_light.css" />
    <?php } ?>






    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <?php
    $wp = $conn->prepare("SELECT * FROM wp WHERE  wp_durum= '0'");
    $wp->execute(['wp_durum' => '0']);
    while ($wp_cek = $wp->fetch(PDO::FETCH_ASSOC)){
    ?>
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "<?php echo $hakkimda_cek['hakkimizda_telefon'] ?>",
                call_to_action: "<?php echo $wp_cek['wp_mesaj'] ?>",
                position: "left",
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <?php } ?>

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
                    <span class="mask-lnk">Ali <strong>Yıldızoğlu</strong></span>
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

                <?php
                $hobi = $conn->prepare("SELECT * FROM hobi WHERE  hobi_durum= '0'");
                $hobi->execute(['hobi_durum' => '0']);
                while ($hobi_cek = $hobi->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="service-items">
                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="<?php echo $hobi_cek['hobi_ikon'] ?>"></span></div>
                            <div class="name"><?php echo $hobi_cek['hobi_baslik'] ?></div>
                            <div class="text"><?php echo $hobi_cek['hobi_aciklama'] ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
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
                            <?php
                            $insanlar = $conn->prepare("SELECT * FROM insanlar WHERE  insanlar_durum= '0'");
                            $insanlar->execute(['insanlar_durum' => '0']);
                            while ($insanlar_cek = $insanlar->fetch(PDO::FETCH_ASSOC)){
                            ?>

                            <div class="swiper-slide">
                                <div class="reviews-item content-box">
                                    <div class="image">
                                        <img src="images/rev1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name"><?php echo $insanlar_cek['insanlar_isim'] ?></div>
                                        <div class="company"><?php echo $insanlar_cek['insanlar_is'] ?></div>
                                    </div>
                                    <div class="text">
                                        <?php echo $insanlar_cek['insanlar_yorum'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

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



        <?php
        $yazi_alani = $conn->prepare("SELECT * FROM yazi_alani WHERE  yazi_alani_durum= '0'");
        $yazi_alani->execute(['yazi_alani_durum' => '0']);
        while ($yazi_alani_cek = $yazi_alani->fetch(PDO::FETCH_ASSOC)){
        ?>
        <!-- Section Custom Text -->
        <div class="section custom-text" id="section-custom-text">
            <div class="content">

                <!-- title -->
                <div class="title">
                    <div class="title_inner"><?php echo $yazi_alani_cek['yazi_alani_baslik'] ?></div>
                </div>

                <!-- clients items -->
                <div class="content-box">
                    <div class="single-post-text">
                        <p>
                           <?php echo $yazi_alani_cek['yazi_alani_aciklama'] ?>
                        </p>

                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        <?php } ?>

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
                                                                                value=".box-item"/>Hepsi</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Video"><input type="radio" name="fl_radio" value=".f-video"/>Video</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Music"><input type="radio" name="fl_radio" value=".f-music"/>Müzik</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Links"><input type="radio" name="fl_radio" value=".f-links"/>Link</label>
                        </div>

                        <div class="btn-group">
                            <label data-text="Gallery"><input type="radio" name="fl_radio"
                                                              value=".f-gallery"/>Galeri</label>
                        </div>
                        <div class="btn-group">
                            <label data-text="Content"><input type="radio" name="fl_radio"
                                                              value=".f-content"/>Yazılarım</label>
                        </div>
                    </div>
                </div>

                <!-- portfolio items -->
                <div class="box-items portfolio-items">

                    <div class="box-item f-gallery">
                        <div class="image">
                            <a href="#gallery-1" class="has-popup-gallery hover-animated">
                                <img src="admin/resimler/hakkimizda_resimler/10195b8e6d967152d827603dd434.webp" class="wp-post-image" alt=""/>
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
                            </div>
                        </div>
                    </div>
                    <?php
                    $link = $conn->prepare("SELECT * FROM link WHERE  link_durum= '0'");
                    $link->execute(['link_durum' => '0']);
                    while ($link_cek = $link->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="box-item f-links">
                        <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
                        <div class="image">
                            <a href="<?php echo $link_cek['link_link'] ?>" class="has-popup-link hover-animated" target="_blank">
                                <img src="admin/resimler/link_resimler/<?php echo $link_cek['link_kapak_resim'] ?>" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-link"></span>
												<span class="desc">
													<span class="category">Links</span>
													<span class="name"><?php echo $link_cek['link_kapak_baslik'] ?></span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php
                    $video = $conn->prepare("SELECT * FROM video WHERE  video_durum= '0'");
                    $video->execute(['video_durum' => '0']);
                    while ($video_cek = $video->fetch(PDO::FETCH_ASSOC)){
                    ?>

                    <div class="box-item f-video">
                        <div class="image">
                            <a href="<?php echo $video_cek['video_link'] ?>" class="has-popup-video hover-animated">
                                <img src="admin/resimler/video_resimler/<?php echo $video_cek['video_kapak_resim'] ?>" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-video"></span>
												<span class="desc">
													<span class="category">Video</span>
													<span class="name"><?php echo $video_cek['video_kapak_baslik'] ?></span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>

                    <?php } ?>



                    <?php
                    $muzik = $conn->prepare("SELECT * FROM muzik WHERE  muzik_durum= '0'");
                    $muzik->execute(['muzik_durum' => '0']);
                    while ($muzik_cek = $muzik->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="box-item f-music">
                        <div class="image">
                            <a href="<?php echo $muzik_cek['muzik_link'] ?>"
                               class="has-popup-music hover-animated">
                                <img src="admin/resimler/muzik_resimler/<?php echo $muzik_cek['muzik_kapak_resim'] ?>" class="wp-post-image" alt=""/>
                                <span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-music"></span>
												<span class="desc">
													<span class="category">Müzik</span>
													<span class="name"><?php echo $muzik_cek['muzik_kapak_baslik'] ?></span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                    </div>
                    <?php } ?>


                    <?php
                    $yazilarim = $conn->prepare("SELECT * FROM yazilarim WHERE  yazilarim_durum = '0'");
                    $yazilarim->execute(['yazilarim_durum' => '0']);
                    $say =0;
                    while ($yazilarim_cek = $yazilarim->fetch(PDO::FETCH_ASSOC)){
                    $say++;
                    ?>
                    <div class="box-item f-content">
                        <div class="image">
                            <a href="#popup-<?php echo $say ?>" class="has-popup-media hover-animated">
                                <img src="admin/resimler/yazilarim_resimler/<?php echo $yazilarim_cek['yazilarim_resim'] ?>" class="wp-post-image" alt="sjdfjaskdfjk"/>
                                <span class="info circle">
			 							<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-plus"></span>
												<span class="desc">
													<span class="category">Yazılarım</span>
													<span class="name"><?php echo $yazilarim_cek['yazilarim_kapak_baslik'] ?></span>
												</span>
											</span>
										</span>
									</span>
                            </a>
                        </div>
                        <div id="popup-<?php echo $say ?>" class="popup-box mfp-fade mfp-hide">
                            <div class="content">
                                <div class="image" style="background-image: url(admin/resimler/yazilarim_resimler/<?php echo $yazilarim_cek['yazilarim_resim'] ?>);"></div>
                                <div class="desc single-post-text">
                                    <?php echo $yazilarim_cek['yazilarim_yazi'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

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
                    <?php
                    $iletisim = $conn->prepare("SELECT * FROM iletisim WHERE  iletisim_durum= '0'");
                    $iletisim->execute(['isler_durum' => '0']);
                    while ($iletisim_cek = $iletisim->fetch(PDO::FETCH_ASSOC)){
                    ?>

                    <div class="service-col">
                        <div class="service-item content-box">
                            <div class="icon"><span class="<?php echo $iletisim_cek['iletisim_ikon']?>"</span></div>
                            <div class="name"><?php echo $iletisim_cek['iletisim_baslik'] ?></div>
                            <div class="text"><?php echo $iletisim_cek['iletisim_aciklama'] ?></div>
                        </div>
                    </div>

                    <?php } ?>

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
                    <form  method="POST" action="admin/islem.php">
                        <div class="group-val">
                            <input type="text" name="isim" placeholder="İsim"/>
                        </div>
                        <div class="group-val">
                            <input type="email" name="mail" placeholder="Mail"/>
                        </div>
                        <div class="group-val">
                            <input type="number" name="numara" placeholder="Numara"/>
                        </div>
                        <div class="group-val ct-gr">
                            <textarea name="mesaj" placeholder="Mesaj"></textarea>
                        </div>

                            <a><button name="rezervasyon_gonder" type="submit" class="btn hocer-animated"> <span class="circle"></span> <span class="lnk">Randevu Al</span></button> </a>

                    </form>

                </div>

            </div>
            <div class="clear"></div>
        </div>

        <!-- Section Started -->


    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="soc-box">
            <div class="follow-label">Beni Takip Et</div>
            <div class="soc">
                <?php
                $iletisim = $conn->prepare("SELECT * FROM iletisim WHERE  iletisim_durum= '0'");
                $iletisim->execute(['isler_durum' => '0']);
                while ($iletisim_cek = $iletisim->fetch(PDO::FETCH_ASSOC)){
                ?>
                <a target="_blank" href="<?php echo $iletisim_cek['iletisim_aciklama']  ?>">
                    <span class="<?php echo $iletisim_cek['iletisim_ikon'] ?>"></span>
                </a>
                <?php } ?>
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