
<?php include  'header.php' ?>

<?php
$wp = $conn->prepare("SELECT * FROM  wp WHERE wp_id = 1");
$wp->execute();
$wp_cek = $wp->fetch(PDO::FETCH_ASSOC);

?>
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Whatsapp</h6>
                        <form class="forms-sample" method="POST" action="islem.php"  >
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Whatsapp Karşılama Mesajı</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="wp_mesaj"  value="<?php echo $wp_cek['wp_mesaj'] ?>" placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                                <select name="wp_durum" class="form-select" id="exampleFormControlSelect1" required>
                                    <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                    <option value="0">Aktif</option>
                                    <option value="1" >Pasif</option>

                                </select>
                            </div>

                            <button type="submit" name="wp_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>

<?php include 'footer.php'?>