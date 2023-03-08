<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="isler-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Yaptığım İşler</h6>
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

                            $isler = $conn->prepare("SELECT * FROM isler order by isler_id DESC ");
                            $isler->execute();

                            $say = 0;

                            while ($isler_cek = $isler->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $isler_cek['isler_baslik'] ?></td>
                                <td><?php if( $isler_cek['isler_durum'] == 0){ ?>
                                    Aktif <?php } if($isler_cek['isler_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="isler-duzenle.php?id=<?php echo $isler_cek['isler_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?isler_sil&id=<?php echo $isler_cek['isler_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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