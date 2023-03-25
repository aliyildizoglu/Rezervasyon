<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="link-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title"> Link </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Link Başlık </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $link = $conn->prepare("SELECT * FROM link order by link_id DESC ");
                                $link->execute();

                                $say = 0;

                                while ($link_cek = $link->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $link_cek['link_kapak_baslik'] ?></td>
                                <td><?php if( $link_cek['link_durum'] == 0){ ?>
                                        Aktif <?php } if($link_cek['link_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="islem.php?link_sil&id=<?php echo $link_cek['link_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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