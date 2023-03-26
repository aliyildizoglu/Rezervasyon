<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="galeri-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title"> Galeri </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Galeri Baslik </th>
                                <th>Yayınlanma Durumu</th>
                                <th>İçerik Ekle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $galeri = $conn->prepare("SELECT * FROM galeri order by galeri_id DESC ");
                                $galeri->execute();

                                $say = 0;

                                while ($galeri_cek = $galeri->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $galeri_cek['galeri_kapak_baslik'] ?></td>
                                <td><?php if( $galeri_cek['galeri_durum'] == 0){ ?>
                                        Aktif <?php } if($galeri_cek['galeri_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="galeri-resim?id=<?php echo $galeri_cek['galeri_id'] ?>"><button type="submit" class="btn btn-success">Ekle</button> </a> </td>
                                <td><a href="islem.php?galeri_sil&id=<?php echo $galeri_cek['galeri_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


                            </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include 'footer.php' ?>