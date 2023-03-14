<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="insanlar-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">  Benim Hakkında Söylenenler </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Yayınlanan İsim </th>
                                <th>Yayınlanan İs </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $insanlar = $conn->prepare("SELECT * FROM insanlar order by insanlar_id DESC ");
                                $insanlar->execute();

                                $say = 0;

                                while ($insanlar_cek = $insanlar->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $insanlar_cek['insanlar_isim'] ?></td>
                                <td><?php echo $insanlar_cek['insanlar_is'] ?></td>
                                <td><?php if( $insanlar_cek['insanlar_durum'] == 0){ ?>
                                        Aktif <?php } if($insanlar_cek['insanlar_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="islem.php?insanlar_sil&id=<?php echo $insanlar_cek['insanlar_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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