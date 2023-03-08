<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="dil-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title">Sahip Olunan Diller</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Dil İsmi </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Düzenle</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $beceri = $conn->prepare("SELECT * FROM dil order by dil_id DESC ");
                                $beceri->execute();

                                $say = 0;

                                while ($dil_cek = $beceri->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $dil_cek['dil_ismi'] ?></td>
                                <td><?php if( $dil_cek['dil_durumu'] == 0){ ?>
                                        Aktif <?php } if($dil_cek['dil_durumu'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="dil-duzenle.php?id=<?php echo $dil_cek['dil_id'] ?>"><button type="submit" class="btn btn-warning">Düzenle</button> </a> </td>
                                <td><a href="islem.php?dil_sil&id=<?php echo $dil_cek['dil_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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