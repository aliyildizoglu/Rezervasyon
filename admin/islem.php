<?php include 'conn.php' ?>
<?php

if(isset($_POST['anasayfa_gonder'])){

    $anasayfa_isim = $_POST['anasayfa_isim'];
    $anasayfa_mesaj = $_POST['anasayfa_mesaj'];
    $anasayfa_aciklama1 = $_POST['anasayfa_aciklama1'];
    $anasayfa_aciklama2 = $_POST['anasayfa_aciklama2'];
    $anasayfa_aciklama3 = $_POST['anasayfa_aciklama3'];

    $duzenle = $conn->prepare("UPDATE anasayfa SET 
                    
            anasayfa_isim=:anasayfa_isim,
            anasayfa_mesaj=:anasayfa_mesaj,
            anasayfa_aciklama1=:anasayfa_aciklama1,
            anasayfa_aciklama2=:anasayfa_aciklama2,
            anasayfa_aciklama3=:anasayfa_aciklama3

        WHERE anasayfa_id = 1
    
                             ");


    $update = $duzenle->execute([


        'anasayfa_isim' => $anasayfa_isim,
        'anasayfa_mesaj' => $anasayfa_mesaj,
        'anasayfa_aciklama1' => $anasayfa_aciklama1,
        'anasayfa_aciklama2' => $anasayfa_aciklama2,
        'anasayfa_aciklama3' => $anasayfa_aciklama3

    ]);
    if ($update) {


        header("Location:anasayfa.php?yuklenme=basarili");
    } else {
        header("Location:anasyafa.php?yuklenme=basarisiz");
    }





}






?>
