<?php include  'header.php' ?>
<?php
$hakkimizda = $conn->prepare("SELECT * FROM  hakkimizda WHERE hakkimizda_id=1");
$hakkimizda->execute();
$hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);




?>

    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Hakkimizda Ayarları</h6>
                        <form class="forms-sample" method="POST" action="islem.php">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Kendinizi Tanıtın</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="hakkimizda_tanitim" autocomplete="off" value="<?php echo $hakkimizda_cek['hakkimizda_tanitim'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Yaşınızı Giriniz</label>
                                <input type="number" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hakkimizda_yas" value="<?php echo $hakkimizda_cek['hakkimizda_yas'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">İş Yeri Adresinizi Giriniz</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hakkimizda_adres" value="<?php echo $hakkimizda_cek['hakkimizda_adres'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mail Adresinizi Giriniz</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hakkimizda_mail" value="<?php echo $hakkimizda_cek['hakkimizda_mail'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Telefon Numarasını Giriniz</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hakkimizda_telefon" value="<?php echo $hakkimizda_cek['hakkimizda_telefon'] ?>" required>
                            </div>

                            <button type="submit" name="hakkimizda_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Hakkımızda Ayarları</h6>
                        <form class="forms-sample" method="POST" action="islem.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-group">
                                    <img style="width: 25%;"
                                         src="resimler/hakkimizda_resimler/<?php echo $hakkimizda_cek['hakkimizda_resim'] ?>">
                                </div>
                                <br>
                                <input type="hidden" name="eski_resim"  value="<?php echo $hakkimizda_cek['hakkimizda_resim']?> ">
                                <input type="file"  class="form-control"  autocomplete="off" name="hakkimizda_resim" required>
                            </div>
                            <button type="submit" name="hakkimizda_resim_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>

<?php include 'footer.php'?>