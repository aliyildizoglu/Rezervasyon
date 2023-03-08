<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="beceri-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Yaptığım İşler</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Beceri İsmi </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $beceri = $conn->prepare("SELECT * FROM beceri order by beceri_id DESC ");
                                $beceri->execute();

                                $say = 0;

                                while ($beceri_cek = $beceri->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $beceri_cek['beceri_baslik'] ?></td>
                                <td><?php if( $beceri_cek['beceri_durumu'] == 0){ ?>
                                        Aktif <?php } if($beceri_cek['beceri_durumu'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="beceri-duzenle.php?id=<?php echo $beceri_cek['beceri_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?isler_sil&id=<?php echo $beceri_cek['beceri_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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