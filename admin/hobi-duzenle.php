
<?php include  'header.php' ?>
<?php
$hobi_id = $_GET['id'];
$hobi = $conn->prepare("SELECT * FROM  hobi WHERE hobi_id = '$hobi_id'");
$hobi->execute();
$hobi_cek = $hobi->fetch(PDO::FETCH_ASSOC);




?>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sahip Olunan Hobiler</h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Hobi İkon </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="hobi_ikon" autocomplete="off" value="<?php echo $hobi_cek['hobi_ikon'] ?>" placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Hobi Başlık</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hobi_baslik" value="<?php echo $hobi_cek['hobi_baslik'] ?>" required placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Hobi Açıklama </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="hobi_aciklama" value="<?php echo $hobi_cek['hobi_aciklama'] ?>" placeholder="Yaptığınız İşler İle Alakalı Açıklama Oluşturunuz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="hobi_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0" <?php
                                if ($hobi_cek['hobi_durum'] == 0){
                                    echo "selected";
                                }
                                ?> >Aktif</option>
                                <option value="1" <?php
                                if ($hobi_cek['hobi_durum'] == 1){
                                    echo "selected";
                                }
                                ?> >Pasif</option>

                            </select>
                        </div>


                        <input type="hidden" name="hobi_id" value="<?php echo $hobi_id ?>">
                        <button type="submit" name="hobi_duzenle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>