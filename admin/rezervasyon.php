<?php require_once 'header.php' ?>


    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">

                    <h6 class="card-title">Rezervasyon </h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>İsim  </th>
                                <th>Telefon</th>
                                <th>Mail</th>
                                <th>Sil</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php

                                $rezervasyon = $conn->prepare("SELECT * FROM rezervasyon order by rezervasyon_id DESC ");
                                $rezervasyon->execute();

                                $say = 0;

                                while ($rezervasyon_cek = $rezervasyon->fetch(PDO::FETCH_ASSOC)) {
                                $say++;

                                ?>
                                <th><?php echo $say ?></th>
                                <td><?php echo $rezervasyon_cek['isim'] ?></td>
                                <td><?php echo $rezervasyon_cek['numara'] ?></td>
                                <td><?php echo $rezervasyon_cek['mail'] ?></td>

                                <td><a href="islem.php?rezervasyon_sil&id=<?php echo $rezervasyon_cek['rezervasyon_id'] ?>"><button type="submit" class="btn btn-danger">Sil</button> </a> </td>


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