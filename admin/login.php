<?php include 'conn.php'?>

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
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Buta</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="resimler/profil_resim/buta6.png" />
</head>
<body>
<div class="main-wrapper">

    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <?php
            $hakkimizda = $conn->prepare("SELECT * FROM  hakkimizda WHERE hakkimizda_id=1");
            $hakkimizda->execute();
            $hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

            ?>


            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pe-md-0">
                                <div style="width:100%; height:452px;object-fit:cover" class="auth-side-wrapper">
                                    <img style="width:100%; height:100%;" src="resimler/hakkimizda_resimler/<?php echo $hakkimizda_cek['hakkimizda_resim']?>">

                                </div>
                            </div>
                            <div class="col-md-8 ps-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">ALİ <span>YILDIZOĞLU</span></a>
                                    <h5 class="text-muted fw-normal mb-4">Tekrar hoşgeldiniz! Hesabınıza giriş yapın.</h5>
                                    <form action="islem.php" method="post" class="forms-sample">
                                        <div class="mb-3">
                                            <label for="userEmail" class="form-label">Kullanıcı Adı</label>
                                            <input  name="kullanici_adi" type="text" class="form-control" id="userEmail" placeholder="Kullanıcı Adınızı Giriniz">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userPassword" class="form-label">Şifre</label>
                                            <input name="kullanici_sifre" type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Şifrenizi Giriniz">
                                        </div>

                                        <div>
                                            <button  type="submit" name="giris_yap" class="btn btn-primary btn-block">Giriş Yap</button>
                                        </div>

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

<!-- core:js -->
<script src="assets/vendors/core/core.js"></script>

<!-- endinject -->

<!-- Plugin js for this page -->
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="assets/vendors/feather-icons/feather.min.js"></script>
<script src="assets/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<!-- End custom js for this page -->

</body>
</html>
