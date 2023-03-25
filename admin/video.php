<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">
                    <a href="video-ekle.php"><button style="float: right" type="submit" class="btn btn-primary">Ekle</button> </a>
                    <h6 class="card-title"> Video </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Video Baslik </th>
                                <th>Yayınlanma Durumu</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $video = $conn->prepare("SELECT * FROM video order by video_id DESC ");
                                $video->execute();

                                $say = 0;

                                while ($video_cek = $video->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $video_cek['video_kapak_baslik'] ?></td>
                                <td><?php if( $video_cek['video_durum'] == 0){ ?>
                                        Aktif <?php } if($video_cek['video_durum'] == 1){  ?> Pasif <?php } ?></td>
                                <td><a href="islem.php?video_sil&id=<?php echo $video_cek['video_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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