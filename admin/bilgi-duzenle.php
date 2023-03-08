

<?php include  'header.php' ?>
<?php
$bilgi_id = $_GET['id'];
$bilgi = $conn->prepare("SELECT * FROM  bilgi WHERE bilgi_id = '$bilgi_id'");
$bilgi->execute();
$bilgi_cek = $bilgi->fetch(PDO::FETCH_ASSOC);




?>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Bilgiler</h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Bilgi Açıklama </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="bilgi_aciklama" autocomplete="off" value="<?php echo $bilgi_cek['bilgi_aciklama'] ?>" placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="bilgi_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0" <?php
                                if ($bilgi_cek['bilgi_durum'] == 0){
                                    echo "selected";
                                }
                                ?> >Aktif</option>
                                <option value="1" <?php
                                if ($bilgi_cek['bilgi_durum'] == 1){
                                    echo "selected";
                                }
                                ?> >Pasif</option>

                            </select>
                        </div>


                        <input type="hidden" name="bilgi_id" value="<?php echo $bilgi_id ?>">
                        <button type="submit" name="bilgi_duzenle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>