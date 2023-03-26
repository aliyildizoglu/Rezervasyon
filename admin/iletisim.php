<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="iletisim-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">İletişim</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Yayınlanan Özellik </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $iletisim = $conn->prepare("SELECT * FROM iletisim order by iletisim_id DESC ");
                                $iletisim->execute();

                                $say = 0;

                                while ($iletisim_cek = $iletisim->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $iletisim_cek['iletisim_baslik'] ?></td>
                                <td><?php if( $iletisim_cek['iletisim_durum'] == 0){ ?>
                                        Aktif <?php } if($iletisim_cek['iletisim_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="iletisim-duzenle.php?id=<?php echo $iletisim_cek['iletisim_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?iletisim_sil&id=<?php echo $iletisim_cek['iletisim_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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