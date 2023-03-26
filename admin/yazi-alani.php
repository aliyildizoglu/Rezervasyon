<?php include  'header.php' ?>

    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Serbest Yazı Alanı</h6>
                        <form class="forms-sample" method="POST" action="islem.php">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Yazı Başlığı</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="yazi_alani_baslik" autocomplete="off"  required>
                            </div>
                            <textarea name="yazi_alani_aciklama" id="metin" class="ckeditor"></textarea>

                            <div class="mb-3">
                                <br>
                                <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                                <select name="yazi_alani_durum" class="form-select" id="exampleFormControlSelect1" required>
                                    <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                    <option value="0">Aktif</option>
                                    <option value="1" >Pasif</option>

                                </select>
                            </div>


                            <button type="submit" name="yazi_alani_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>

<?php include 'footer.php'?>