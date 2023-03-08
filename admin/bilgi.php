<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="bilgi-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Bilgiler</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Bilgi Açıklama  </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $bilgi = $conn->prepare("SELECT * FROM bilgi order by bilgi_id DESC ");
                                $bilgi->execute();

                                $say = 0;

                                while ($bilgi_cek = $bilgi->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $bilgi_cek['bilgi_aciklama'] ?></td>
                                <td><?php if( $bilgi_cek['bilgi_durum'] == 0){ ?>
                                        Aktif <?php } if($bilgi_cek['bilgi_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="bilgi-duzenle.php?id=<?php echo $bilgi_cek['bilgi_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?bilgi_sil&id=<?php echo $bilgi_cek['bilgi_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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