
<?php include  'header.php' ?>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Link</h6>
                    <form class="forms-sample" method="POST" action="islem.php"  enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Link Başlık </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="link_kapak_baslik" autocomplete="off"  placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Link</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="link_link"  required placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="link_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0">Aktif</option>
                                <option value="1" >Pasif</option>

                            </select>
                        </div>

                        <div class="mb-3">

                            <input type="file"  class="form-control"  autocomplete="off" name="link_kapak_resim" required>
                        </div>

                        <button type="submit" name="link_ekle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>