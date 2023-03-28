<?php include  'header.php' ?>







    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tema Rengi</h6>
                        <form class="forms-sample" method="POST" action="islem.php">
                            <div class="mb-3">
                                <br>
                                <label for="exampleFormControlSelect1" class="form-label">Yayınlanma Durumunu Seçiniz</label>
                                <select name="tema_rengi_durum" class="form-select" id="exampleFormControlSelect1" required>
                                    <option selected disabled>Yayınlanma Durumunu Seçiniz</option>
                                    <option value="0">Mavi</option>
                                    <option value="1" >Yeşil</option>
                                    <option value="2" >Turuncu</option>
                                    <option value="3" >Kahverengi</option>
                                    <option value="4" >Pembe</option>
                                    <option value="5" >Kırmızı</option>
                                    <option value="6" >Bej</option>
                                    <option value="7" >Açık Yeşil</option>
                                    <option value="8" >Sarı</option>
                                    <option value="9" >Açık Yeşil</option>
                                </select>
                            </div>


                            <button type="submit" name="tema_rengi_gonder" class="btn btn-primary me-2">Gönder</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>

<?php include 'footer.php'?>