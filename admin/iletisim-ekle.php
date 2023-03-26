
<?php include  'header.php' ?>


<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sahip Olunan Özellikler</h6>
                    <form class="forms-sample" method="POST" action="islem.php">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler İkon </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="iletisim_ikon" autocomplete="off"  placeholder="Aşağıdaki ikonu seçiniz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler Başlık</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="iletisim_baslik"  required placeholder="Yaptığınız İşler ile Alakalı Başlık Oluşturunuz">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">İşler Açıklama </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="iletisim_aciklama" placeholder="Yaptığınız İşler İle Alakalı Açıklama Oluşturunuz" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                            <select name="iletisim_durum" class="form-select" id="exampleFormControlSelect1" required>
                                <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                <option value="0">Aktif</option>
                                <option value="1" >Pasif</option>

                            </select>
                        </div>



                        <button type="submit" name="iletisim_ekle_gonder" class="btn btn-primary me-2">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include 'footer.php'?>