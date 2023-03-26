
<?php include  'header.php' ?>


<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Yazılarım </h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Yazılarım Kapak Başlığı </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="yazilarim_kapak_baslik" autocomplete="off"  placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>

                        <textarea name="yazilarim_yazi" id="metin" class="ckeditor"></textarea><br>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="yazilarim_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0">Aktif</option>
                                <option value="1" >Pasif</option>

                            </select>
                        </div>
                        <div class="mb-3">

                            <input type="file"  class="form-control"  autocomplete="off" name="yazilarim_resim" required>
                        </div>



                        <button type="submit" name="yazilarim_ekle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>