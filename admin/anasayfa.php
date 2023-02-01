<?php include  'header.php' ?>

    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Anasayfa Ayarları</h6>
                        <form class="forms-sample" method="POST" action="islem.php">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Hitap Edilme Şekliniz (İsim)</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" name="anasayfa_isim" autocomplete="off" placeholder="İsminizi Giriniz.">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Karşılama Mesajınızı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_mesaj" placeholder="Karşılama Mesajınızı Veya Tanıtım Mesajını Giriniz.">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 1. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama1" placeholder="Slider Üstüne Gelen Resimler İçin Açıklama Giriniz.">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 2. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama2" placeholder="Slider Üstüne Gelen Resimler İçin Açıklama Giriniz.">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Slider Açıklama 3. Kısımı Giriniz.</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" name="anasayfa_aciklama3" placeholder="Slider Üstüne Gelen Resimler İçin Açıklama Giriniz.">
                            </div>



                            <button type="submit" name="anasayfa_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>

<?php include 'footer.php'?>