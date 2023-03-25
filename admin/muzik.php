<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="muzik-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title"> Müzik </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Müzik Baslik </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $muzik = $conn->prepare("SELECT * FROM muzik order by muzik_id DESC ");
                                $muzik->execute();

                                $say = 0;

                                while ($muzik_cek = $muzik->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $muzik_cek['muzik_kapak_baslik'] ?></td>
                                <td><?php if( $muzik_cek['muzik_durum'] == 0){ ?>
                                        Aktif <?php } if($muzik_cek['muzik_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="islem.php?muzik_sil&id=<?php echo $muzik_cek['muzik_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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