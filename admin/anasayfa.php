<?php include  'header.php' ?>
<?php
$anasayfa = $conn->prepare("SELECT * FROM  anasayfa WHERE anasayfa_id=1");
$anasayfa->execute();
$anasayfa_cek = $anasayfa->fetch(PDO::FETCH_ASSOC);




?>

    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Anasayfa Ayarları</h6>
                        <form class="forms-sample" method="POST" action="islem.php">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Hitap Edilme Şekliniz (İsim)</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfa_isim" autocomplete="off" value="<?php echo $anasayfa_cek['anasayfa_isim'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Karşılama Mesajınızı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_mesaj" value="<?php echo $anasayfa_cek['anasayfa_mesaj'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 1. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama1" value="<?php echo $anasayfa_cek['anasayfa_aciklama1'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 2. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama2" value="<?php echo $anasayfa_cek['anasayfa_aciklama2'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 3. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama3" value="<?php echo $anasayfa_cek['anasayfa_aciklama3'] ?> " required>
                            </div>

                            <button type="submit" name="anasayfa_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Anasayfa Ayarları</h6>
                        <form class="forms-sample" method="POST" action="islem.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-group">
                                    <img style="width: 25%;"
                                         src="resimler/anasayfa_resimler/<?php echo $anasayfa_cek['anasayfa_resim'] ?>">
                                </div>
                                <br>
                                <input type="hidden" name="eski_resim1"  value="<?php echo $anasayfa_cek['anasayfa_resim']?> ">
                                <input type="file"  class="form-control"  autocomplete="off" name="anasayfa_resim" required>
                            </div>
                            <button type="submit" name="anasayfa_resim_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>

<?php include 'footer.php'?>