<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="hobi-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Hobilerim</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Yayınlanan Hobi </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $hobi = $conn->prepare("SELECT * FROM hobi order by hobi_id DESC ");
                                $hobi->execute();

                                $say = 0;

                                while ($hobi_cek = $hobi->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $hobi_cek['hobi_baslik'] ?></td>
                                <td><?php if( $hobi_cek['hobi_durum'] == 0){ ?>
                                        Aktif <?php } if($hobi_cek['hobi_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="hobi-duzenle.php?id=<?php echo $hobi_cek['hobi_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?hobi_sil&id=<?php echo $hobi_cek['hobi_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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