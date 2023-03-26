<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="yazilarim-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Yazılarım</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Yayınlanan Özellik </th>
                                <th>Yayınlanma Durumu</th>

                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $yazilarim = $conn->prepare("SELECT * FROM yazilarim order by yazilarim_id DESC ");
                                $yazilarim->execute();

                                $say = 0;

                                while ($yazilarim_cek = $yazilarim->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $yazilarim_cek['yazilarim_kapak_baslik'] ?></td>
                                <td><?php if( $yazilarim_cek['yazilarim_durum'] == 0){ ?>
                                        Aktif <?php } if($yazilarim_cek['yazilarim_durum'] == 1){  ?> Pasif <?php } ?></td>

                                <td><a href="islem.php?yazilarim_sil&id=<?php echo $yazilarim_cek['yazilarim_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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