
<?php include  'header.php' ?>
<?php
$beceri_id = $_GET['id'];
$beceri = $conn->prepare("SELECT * FROM  beceri WHERE beceri_id = '$beceri_id'");
$beceri->execute();
$beceri_cek = $beceri->fetch(PDO::FETCH_ASSOC);




?>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sahip Olunan Özellikler</h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Beceri Başlık </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="beceri_baslik" autocomplete="off" value="<?php echo $beceri_cek['beceri_baslik'] ?>" placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Beceri Bilgi Yüzdesi</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="beceri_bilgi" value="<?php echo $isler_cek['beceri_bilgi'] ?>" required placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="isler_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0" <?php
                                if ($beceri_cek['beceri_durumu'] == 0){
                                    echo "selected";
                                }
                                ?> >Aktif</option>
                                <option value="1" <?php
                                if ($beceri_cek['beceri_durumu'] == 1){
                                    echo "selected";
                                }
                                ?> >Pasif</option>

                            </select>
                        </div>


                        <input type="hidden" name="beceri_id" value="<?php echo $beceri_id ?>">
                        <button type="submit" name="beceri_duzenle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>