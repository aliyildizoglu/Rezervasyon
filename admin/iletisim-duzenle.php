
<?php include  'header.php' ?>
<?php
$iletisim_id = $_GET['id'];
$iletisim = $conn->prepare("SELECT * FROM  iletisim WHERE iletisim_id = '$iletisim_id'");
$iletisim->execute();
$iletisim_cek = $iletisim->fetch(PDO::FETCH_ASSOC);




?>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sahip Olunan Özellikler</h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler İkon </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="iletisim_ikon" autocomplete="off" value="<?php echo $iletisim_cek['iletisim_ikon'] ?>" placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler Başlık</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="iletisim_baslik" value="<?php echo $iletisim_cek['iletisim_baslik'] ?>" required placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler Açıklama </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="iletisim_aciklama" value="<?php echo $iletisim_cek['iletisim_aciklama'] ?>" placeholder="Yaptığınız İşler İle Alakalı Açıklama Oluşturunuz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="iletisim_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0" <?php
                                if ($iletisim_cek['iletisim_durum'] == 0){
                                    echo "selected";
                                }
                                ?> >Aktif</option>
                                <option value="1" <?php
                                if ($iletisim_cek['iletisim_durum'] == 1){
                                    echo "selected";
                                }
                                ?> >Pasif</option>

                            </select>
                        </div>


                        <input type="hidden" name="iletisim_id" value="<?php echo $iletisim_id ?>">
                        <button type="submit" name="iletisim_duzenle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php' ?>