<?php include 'conn.php' ?>
<?php

if (isset($_POST['anasayfa_gonder'])) {

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

if (isset($_POST['anasayfa_resim_gonder'])) {


    $uploads_dir1 = 'resimler/anasayfa_resimler';
    @$tmp_name = $_FILES['anasayfa_resim']["tmp_name"];
    @$name = $_FILES['anasayfa_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir1/$sayi1$name");


    $duzenle = $conn->prepare("UPDATE anasayfa SET 
                    
     anasayfa_resim=:anasayfa_resim
                
      WHERE anasayfa_id = 1
                          
                             ");


    $update = $duzenle->execute([
        'anasayfa_resim' => $resimyolu1


    ]);


    if ($update) {

        $resimsil1 = $_POST['eski_resim1'];
        unlink("resimler/anasayfa_resimler/$resimsil1");

        header("Location:anasayfa.php?yuklenme=basarili");
    } else {
        header("Location:anasayfa.php?yuklenme=basarisiz");
    }
}


if (isset($_POST['hakkimizda_gonder'])) {

    $hakkimizda_tanitim = $_POST['hakkimizda_tanitim'];
    $hakkimizda_yas = $_POST['hakkimizda_yas'];
    $hakkimizda_adres = $_POST['hakkimizda_adres'];
    $hakkimizda_mail = $_POST['hakkimizda_mail'];
    $hakkimizda_telefon = $_POST['hakkimizda_telefon'];

    $duzenle = $conn->prepare("UPDATE hakkimizda SET 
                    
            hakkimizda_tanitim=:hakkimizda_tanitim,
            hakkimizda_yas=:hakkimizda_yas,
            hakkimizda_adres=:hakkimizda_adres,
            hakkimizda_mail=:hakkimizda_mail,
            hakkimizda_telefon=:hakkimizda_telefon
         

        WHERE hakkimizda_id = 1
    
                             ");


    $update = $duzenle->execute([

        'hakkimizda_tanitim' => $hakkimizda_tanitim,
        'hakkimizda_yas' => $hakkimizda_yas,
        'hakkimizda_adres' => $hakkimizda_adres,
        'hakkimizda_mail' => $hakkimizda_mail,
        'hakkimizda_telefon' => $hakkimizda_telefon


    ]);


    if ($update) {

        header("Location:hakkimda.php?yuklenme=basarili");
    } else {
        header("Location:hakkimda.php?yuklenme=basarisiz");
    }
}


if (isset($_POST['hakkimizda_resim_gonder'])) {


    $uploads_dir1 = 'resimler/hakkimizda_resimler';
    @$tmp_name = $_FILES['hakkimizda_resim']["tmp_name"];
    @$name = $_FILES['hakkimizda_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir1/$sayi1$name");


    $duzenle = $conn->prepare("UPDATE hakkimizda SET 
                    
     hakkimizda_resim=:hakkimizda_resim
                
      WHERE hakkimizda_id = 1
                          
                             ");


    $update = $duzenle->execute([
        'hakkimizda_resim' => $resimyolu1


    ]);


    if ($update) {

        $resimsil1 = $_POST['eski_resim'];
        unlink("resimler/hakkimizda_resimler/$resimsil1");

        header("Location:hakkimda.php?yuklenme=basarili");
    } else {
        header("Location:hakkimda.php?yuklenme=basarisiz");
    }
}


if (isset($_POST['isler_duzenle_gonder'])) {


    $isler_id = $_POST['isler_id'];
    $isler_ikon = $_POST['isler_ikon'];
    $isler_baslik = $_POST['isler_baslik'];
    $isler_aciklama = $_POST['isler_aciklama'];
    $isler_durum = $_POST['isler_durum'];

    $duzenle = $conn->prepare("UPDATE isler SET
    
        isler_ikon=:isler_ikon,
        isler_baslik=:isler_baslik,
        isler_aciklama=:isler_aciklama,
        isler_durum=:isler_durum

        WHERE isler_id = '$isler_id'
                 
                 ");

    $update = $duzenle->execute([

        'isler_ikon' => $isler_ikon,
        'isler_baslik' => $isler_baslik,
        'isler_aciklama' => $isler_aciklama,
        'isler_durum' => $isler_durum
    ]);


    if ($update) {


        header("Location:isler-duzenle.php?id=$isler_id?yuklenme=basarili");
    } else {
        header("Location:isler-duzenle.php?id='$isler_id'&yuklenme=basarisiz");
    }

}



if (isset($_POST['isler_ekle_gonder'])) {


    $isler_ikon = $_POST['isler_ikon'];
    $isler_baslik = $_POST['isler_baslik'];
    $isler_aciklama = $_POST['isler_aciklama'];
    $isler_durum = $_POST['isler_durum'];

    $duzenle = $conn->prepare("INSERT INTO isler SET
    
        isler_ikon=:isler_ikon,
        isler_baslik=:isler_baslik,
        isler_aciklama=:isler_aciklama,
        isler_durum=:isler_durum

            
                 
                 ");

    $insert = $duzenle->execute([

        'isler_ikon' => $isler_ikon,
        'isler_baslik' => $isler_baslik,
        'isler_aciklama' => $isler_aciklama,
        'isler_durum' => $isler_durum
    ]);


    if ($insert) {


        header("Location:isler.php?yuklenme=basarili");
    } else {
        header("Location:isler.php?yuklenme=basarisiz");
    }

}

if (isset($_GET['isler_sil'])){

    $isler_sil = $conn->prepare("DELETE FROM isler  WHERE isler_id=:isler_id");

    $isler_sil->execute(['isler_id'=> $_GET['id']]);


    if (isler_sil) {
        header("Location:isler.php?durum=basarili");

    } else {
        header("Location:isler.php?durum=basarisiz");
    }




}



if (isset($_POST['beceri_ekle_gonder'])) {



    $beceri_baslik = $_POST['beceri_baslik'];
    $beceri_bilgi = $_POST['beceri_bilgi'];
    $beceri_durumu = $_POST['beceri_durumu'];

    $duzenle = $conn->prepare("INSERT INTO beceri SET
    
     
        beceri_baslik=:beceri_baslik,
        beceri_bilgi=:beceri_bilgi,
        beceri_durumu=:beceri_durumu

            
                 
                 ");

    $insert = $duzenle->execute([

        'beceri_baslik' => $beceri_baslik,
        'beceri_bilgi' => $beceri_bilgi,
        'beceri_durumu' => $beceri_durumu
    ]);


    if ($insert) {


        header("Location:beceri.php?yuklenme=basarili");
    } else {
        header("Location:beceri.php?yuklenme=basarisiz");
    }

}


if (isset($_GET['beceri_sil'])){

    $beceri_sil = $conn->prepare("DELETE FROM beceri  WHERE beceri_id=:beceri_id");

    $beceri_sil->execute(['beceri_id'=> $_GET['id']]);


    if (beceri_sil) {
        header("Location:beceri.php?durum=basarili");

    } else {
        header("Location:beceri.php?durum=basarisiz");
    }


}



if (isset($_POST['dil_duzenle_gonder'])) {


    $dil_id = $_POST['dil_id'];
    $dil_ismi = $_POST['dil_ismi'];
    $dil_yuzdesi = $_POST['dil_yuzdesi'];
    $dil_durumu = $_POST['dil_durumu'];

    $duzenle = $conn->prepare("UPDATE dil SET
    
      
        dil_ismi=:dil_ismi,
        dil_yuzdesi=:dil_yuzdesi,
        dil_durumu=:dil_durumu

        WHERE dil_id = '$dil_id'
                 
                 ");

    $update = $duzenle->execute([


        'dil_ismi' => $dil_ismi,
        'dil_yuzdesi' => $dil_yuzdesi,
        'dil_durumu' => $dil_durumu
    ]);


    if ($update) {


        header("Location:dil-duzenle.php?id=$dil_id?yuklenme=basarili");
    } else {
        header("Location:dil-duzenle.php?id='$dil_id'?yuklenme=basarisiz");
    }

}


if (isset($_POST['dil_ekle_gonder'])) {



    $dil_ismi = $_POST['dil_ismi'];
    $dil_yuzdesi = $_POST['dil_yuzdesi'];
    $dil_durumu = $_POST['dil_durumu'];

    $duzenle = $conn->prepare("INSERT INTO dil SET
    
     
        dil_ismi=:dil_ismi,
        dil_yuzdesi=:dil_yuzdesi,
        dil_durumu=:dil_durumu

            
                 
                 ");

    $insert = $duzenle->execute([

        'dil_ismi' => $dil_ismi,
        'dil_yuzdesi' => $dil_yuzdesi,
        'dil_durumu' => $dil_durumu
    ]);


    if ($insert) {


        header("Location:dil.php?yuklenme=basarili");
    } else {
        header("Location:dil.php?yuklenme=basarisiz");
    }

}


if (isset($_GET['dil_sil'])){

    $dil_sil = $conn->prepare("DELETE FROM dil  WHERE dil_id=:dil_id");

    $dil_sil->execute(['dil_id'=> $_GET['id']]);


    if (dil_sil) {
        header("Location:dil.php?durum=basarili");

    } else {
        header("Location:dil.php?durum=basarisiz");
    }


}





?>
