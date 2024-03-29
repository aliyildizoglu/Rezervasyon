<?php include 'conn.php';
session_start();
?>

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

if (isset($_GET['bilgi_sil'])){

    $bilgi_sil = $conn->prepare("DELETE FROM bilgi  WHERE bilgi_id=:bilgi_id");

    $bilgi_sil->execute(['bilgi_id'=> $_GET['id']]);


    if (bilgi_sil) {
        header("Location:bilgi.php?durum=basarili");

    } else {
        header("Location:bilgi.php?durum=basarisiz");
    }


}

if (isset($_POST['bilgi_ekle_gonder'])) {



    $bilgi_aciklama = $_POST['bilgi_aciklama'];
    $bilgi_durum = $_POST['bilgi_durum'];


    $duzenle = $conn->prepare("INSERT INTO bilgi SET
    
     
        bilgi_aciklama=:bilgi_aciklama,
        bilgi_durum=:bilgi_durum
       

            
                 
                 ");

    $insert = $duzenle->execute([

        'bilgi_aciklama' => $bilgi_aciklama,
        'bilgi_durum' => $bilgi_durum
    ]);


    if ($insert) {


        header("Location:bilgi.php?yuklenme=basarili");
    } else {
        header("Location:bilgi.php?yuklenme=basarisiz");
    }

}

if (isset($_POST['bilgi_duzenle_gonder'])) {


    $bilgi_id = $_POST['bilgi_id'];
    $bilgi_aciklama = $_POST['bilgi_aciklama'];
    $bilgi_durum = $_POST['bilgi_durum'];


    $duzenle = $conn->prepare("UPDATE bilgi SET
    
      
        bilgi_aciklama=:bilgi_aciklama,
        bilgi_durum=:bilgi_durum
       

        WHERE bilgi_id ='$bilgi_id'
                 
                 ");

    $update = $duzenle->execute([


        'bilgi_aciklama' => $bilgi_aciklama,
        'bilgi_durum' => $bilgi_durum
    ]);


    if ($update) {



        header("Location:bilgi-duzenle.php?id=$bilgi_id?yuklenme=basarili");
    } else {
        header("Location:bilgi-duzenle.php?id='$bilgi_id'?yuklenme=basarisiz");
    }

}


if (isset($_POST['hobi_duzenle_gonder'])) {


    $hobi_id = $_POST['hobi_id'];
    $hobi_ikon = $_POST['hobi_ikon'];
    $hobi_baslik = $_POST['hobi_baslik'];
    $hobi_aciklama = $_POST['hobi_aciklama'];
    $hobi_durum = $_POST['hobi_durum'];

    $duzenle = $conn->prepare("UPDATE hobi SET
    
        hobi_ikon=:hobi_ikon,
        hobi_baslik=:hobi_baslik,
        hobi_aciklama=:hobi_aciklama,
        hobi_durum=:hobi_durum

        WHERE hobi_id = '$hobi_id'
                 
                 ");

    $update = $duzenle->execute([

        'hobi_ikon' => $hobi_ikon,
        'hobi_baslik' => $hobi_baslik,
        'hobi_aciklama' => $hobi_aciklama,
        'hobi_durum' => $hobi_durum
    ]);


    if ($update) {


        header("Location:hobi-duzenle.php?id=$hobi_id?yuklenme=basarili");
    } else {
        header("Location:hobi-duzenle.php?id='$hobi_id'&yuklenme=basarisiz");
    }

}



if (isset($_POST['hobi_ekle_gonder'])) {


    $hobi_ikon = $_POST['hobi_ikon'];
    $hobi_baslik = $_POST['hobi_baslik'];
    $hobi_aciklama = $_POST['hobi_aciklama'];
    $hobi_durum = $_POST['hobi_durum'];

    $duzenle = $conn->prepare("INSERT INTO hobi SET
    
        hobi_ikon=:hobi_ikon,
        hobi_baslik=:hobi_baslik,
        hobi_aciklama=:hobi_aciklama,
        hobi_durum=:hobi_durum

            
                 
                 ");

    $insert = $duzenle->execute([

        'hobi_ikon' => $hobi_ikon,
        'hobi_baslik' => $hobi_baslik,
        'hobi_aciklama' => $hobi_aciklama,
        'hobi_durum' => $hobi_durum
    ]);


    if ($insert) {


        header("Location:hobi.php?yuklenme=basarili");
    } else {
        header("Location:hobi.php?yuklenme=basarisiz");
    }

}


if (isset($_GET['hobi_sil'])){

    $hobi_sil = $conn->prepare("DELETE FROM hobi  WHERE hobi_id=:hobi_id");

    $hobi_sil->execute(['hobi_id'=> $_GET['id']]);


    if (hobi_sil) {
        header("Location:hobi.php?durum=basarili");

    } else {
        header("Location:hobi.php?durum=basarisiz");
    }


}


if (isset($_GET['insanlar_sil'])){

    $insanlar_sil = $conn->prepare("DELETE FROM insanlar  WHERE insanlar_id=:insanlar_id");

    $insanlar_sil->execute(['insanlar_id'=> $_GET['id']]);


    if (insanlar_sil) {
        header("Location:insanlar.php?durum=basarili");

    } else {
        header("Location:insanlar.php?durum=basarisiz");
    }


}


if (isset($_POST['insanlar_ekle_gonder'])) {


    $insanlar_isim = $_POST['insanlar_isim'];
    $insanlar_is = $_POST['insanlar_is'];
    $insanlar_yorum = $_POST['insanlar_yorum'];
    $insanlar_durum = $_POST['insanlar_durum'];

    $duzenle = $conn->prepare("INSERT INTO insanlar SET
    
        insanlar_isim=:insanlar_isim,
        insanlar_is=:insanlar_is,
        insanlar_yorum=:insanlar_yorum,
        insanlar_durum=:insanlar_durum

            
                 
                 ");

    $insert = $duzenle->execute([

        'insanlar_isim' => $insanlar_isim,
        'insanlar_is' => $insanlar_is,
        'insanlar_yorum' => $insanlar_yorum,
        'insanlar_durum' => $insanlar_durum
    ]);


    if ($insert) {


        header("Location:insanlar.php?yuklenme=basarili");
    } else {
        header("Location:insanlar.php?yuklenme=basarisiz");
    }

}


if (isset($_POST['yazi_alani_gonder'])) {



    $yazi_alani_baslik = $_POST['yazi_alani_baslik'];
    $yazi_alani_aciklama = $_POST['yazi_alani_aciklama'];
    $yazi_alani_durum = $_POST['yazi_alani_durum'];


    $duzenle = $conn->prepare("UPDATE yazi_alani SET
    
 
        yazi_alani_baslik=:yazi_alani_baslik,
        yazi_alani_aciklama=:yazi_alani_aciklama,
        yazi_alani_durum=:yazi_alani_durum

        WHERE yazi_alani_id = 1
                 
                 ");

    $update = $duzenle->execute([


        'yazi_alani_baslik' => $yazi_alani_baslik,
        'yazi_alani_aciklama' => $yazi_alani_aciklama,
        'yazi_alani_durum' => $yazi_alani_durum
    ]);


    if ($update) {


        header("Location:yazi-alani.php?yuklenme=basarili");
    } else {
        header("Location:yazi-alani.php?yuklenme=basarisiz");
    }

}


if (isset($_POST['video_ekle_gonder'])) {


    $video_kapak_baslik = $_POST['video_kapak_baslik'];
    $video_link = $_POST['video_link'];
    $video_durum = $_POST['video_durum'];
    $uploads_dir1 = 'resimler/video_resimler';
    @$tmp_name = $_FILES['video_kapak_resim']["tmp_name"];
    @$name = $_FILES['video_kapak_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir1/$sayi1$name");

    $duzenle = $conn->prepare("INSERT INTO video SET
    
        video_kapak_baslik=:video_kapak_baslik,
        video_link=:video_link,
        video_durum=:video_durum,
        video_kapak_resim=:video_kapak_resim

            
                 
                 ");

    $insert = $duzenle->execute([

        'video_kapak_baslik' => $video_kapak_baslik,
        'video_link' => $video_link,
        'video_durum' => $video_durum,
        'video_kapak_resim' => $resimyolu1
    ]);


    if ($insert) {


        header("Location:video.php?yuklenme=basarili");
    } else {
        header("Location:video.php?yuklenme=basarisiz");
    }

}


if (isset($_GET['video_sil'])){

    $videoo = $_GET['id'];
    $video = $conn->prepare("SELECT * FROM video WHERE video_id='$videoo'");
    $video->execute();
    $video_cek = $video->fetch(PDO::FETCH_ASSOC);
    $resimsil1 = $video_cek['video_kapak_resim'];


    $video_sil = $conn->prepare("DELETE FROM video  WHERE video_id=:video_id");

    $video_sil->execute(['video_id'=> $_GET['id']]);


    if (video_sil) {
        unlink("resimler/video_resimler/$resimsil1");
        header("Location:video.php?durum=basarili");

    } else {
        header("Location:video.php?durum=basarisiz");
    }


}


if (isset($_GET['muzik_sil'])){

    $muzikk = $_GET['id'];
    $muzik = $conn->prepare("SELECT * FROM muzik WHERE muzik_id='$muzikk'");
    $muzik->execute();
    $muzik_cek = $muzik->fetch(PDO::FETCH_ASSOC);
    $resimsil1 = $muzik_cek['muzik_kapak_resim'];


    $muzik_sil = $conn->prepare("DELETE FROM muzik  WHERE muzik_id=:muzik_id");

    $muzik_sil->execute(['muzik_id'=> $_GET['id']]);


    if (muzik_sil) {
        unlink("resimler/muzik_resimler/$resimsil1");
        header("Location:muzik.php?durum=basarili");

    } else {
        header("Location:muzik.php?durum=basarisiz");
    }


}





if (isset($_POST['muzik_ekle_gonder'])) {


    $muzik_kapak_baslik = $_POST['muzik_kapak_baslik'];
    $muzik_link = $_POST['muzik_link'];
    $muzik_durum = $_POST['muzik_durum'];
    $uploads_dir1 = 'resimler/muzik_resimler';
    @$tmp_name = $_FILES['muzik_kapak_resim']["tmp_name"];
    @$name = $_FILES['muzik_kapak_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir1/$sayi1$name");

    $duzenle = $conn->prepare("INSERT INTO muzik SET
    
        muzik_kapak_baslik=:muzik_kapak_baslik,
        muzik_link=:muzik_link,
        muzik_durum=:muzik_durum,
        muzik_kapak_resim=:muzik_kapak_resim

            
                 
                 ");

    $insert = $duzenle->execute([

        'muzik_kapak_baslik' => $muzik_kapak_baslik,
        'muzik_link' => $muzik_link,
        'muzik_durum' => $muzik_durum,
        'muzik_kapak_resim' => $resimyolu1
    ]);


    if ($insert) {


        header("Location:muzik.php?yuklenme=basarili");
    } else {
        header("Location:muzik.php?yuklenme=basarisiz");
    }

}


if (isset($_POST['link_ekle_gonder'])) {


    $link_kapak_baslik = $_POST['link_kapak_baslik'];
    $link_link = $_POST['link_link'];
    $link_durum = $_POST['link_durum'];
    $uploads_dir1 = 'resimler/link_resimler';
    @$tmp_name = $_FILES['link_kapak_resim']["tmp_name"];
    @$name = $_FILES['link_kapak_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir1/$sayi1$name");

    $duzenle = $conn->prepare("INSERT INTO link SET
    
        link_kapak_baslik=:link_kapak_baslik,
        link_link=:link_link,
        link_durum=:link_durum,
        link_kapak_resim=:link_kapak_resim

            
                 
                 ");

    $insert = $duzenle->execute([

        'link_kapak_baslik' => $link_kapak_baslik,
        'link_link' => $link_link,
        'link_durum' => $link_durum,
        'link_kapak_resim' => $resimyolu1
    ]);


    if ($insert) {


        header("Location:link.php?yuklenme=basarili");
    } else {
        header("Location:link.php?yuklenme=basarisiz");
    }
}

if (isset($_GET['link_sil'])){

    $linkk = $_GET['id'];
    $link = $conn->prepare("SELECT * FROM link WHERE link_id='$linkk'");
    $link->execute();
    $link_cek = $link->fetch(PDO::FETCH_ASSOC);
    $resimsil1 = $link_cek['link_kapak_resim'];


    $link_sil = $conn->prepare("DELETE FROM link  WHERE link_id=:link_id");

    $link_sil->execute(['link_id'=> $_GET['id']]);


    if (link_sil) {
        unlink("resimler/link_resimler/$resimsil1");
        header("Location:link.php?durum=basarili");

    } else {
        header("Location:link.php?durum=basarisiz");
    }


}



if (isset($_GET['yazilarim_sil'])){

    $yazilarimm = $_GET['id'];
    $yazilarim = $conn->prepare("SELECT * FROM yazilarim WHERE yazilarim_id='$yazilarimm'");
    $yazilarim->execute();
    $yazilarim_cek = $yazilarim->fetch(PDO::FETCH_ASSOC);
    $resimsil1 = $yazilarim_cek['yazilarim_resim'];


    $yazilarim_sil = $conn->prepare("DELETE FROM yazilarim  WHERE yazilarim_id=:yazilarim_id");

    $yazilarim_sil->execute(['yazilarim_id'=> $_GET['id']]);


    if (yazilarim_sil) {
        unlink("resimler/yazilarim_resimler/$resimsil1");
        header("Location:yazilarim.php?durum=basarili");

    } else {
        header("Location:yazilarim.php?durum=basarisiz");
    }


}


if (isset($_POST['yazilarim_ekle_gonder'])) {


    $yazilarim_kapak_baslik = $_POST['yazilarim_kapak_baslik'];
    $yazilarim_yazi = $_POST['yazilarim_yazi'];
    $yazilarim_durum = $_POST['yazilarim_durum'];
    $uploads_dir = 'resimler/yazilarim_resimler';
    @$tmp_name = $_FILES['yazilarim_resim']["tmp_name"];
    @$name = $_FILES['yazilarim_resim']["name"];
    $sayi1 = rand(1, 9999);
    $resimyolu1 = $sayi1 . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayi1$name");

    $duzenle = $conn->prepare("INSERT INTO yazilarim SET
    
        yazilarim_kapak_baslik=:yazilarim_kapak_baslik,
        yazilarim_yazi=:yazilarim_yazi,
        yazilarim_durum=:yazilarim_durum,
        yazilarim_resim=:yazilarim_resim

            
                 
                 ");

    $insert = $duzenle->execute([

        'yazilarim_kapak_baslik' => $yazilarim_kapak_baslik,
        'yazilarim_yazi' => $yazilarim_yazi,
        'yazilarim_durum' => $yazilarim_durum,
        'yazilarim_resim' => $resimyolu1
    ]);


    if ($insert) {


        header("Location:yazilarim.php?yuklenme=basarili");
    } else {
        header("Location:yazilarim.php?yuklenme=basarisiz");
    }
}


if (isset($_POST['iletisim_duzenle_gonder'])) {


    $iletisim_id = $_POST['iletisim_id'];
    $iletisim_ikon = $_POST['iletisim_ikon'];
    $iletisim_baslik = $_POST['iletisim_baslik'];
    $iletisim_aciklama = $_POST['iletisim_aciklama'];
    $iletisim_durum = $_POST['iletisim_durum'];

    $duzenle = $conn->prepare("UPDATE iletisim SET
    
        iletisim_ikon=:iletisim_ikon,
        iletisim_baslik=:iletisim_baslik,
        iletisim_aciklama=:iletisim_aciklama,
        iletisim_durum=:iletisim_durum

        WHERE iletisim_id = '$iletisim_id'
                 
                 ");

    $update = $duzenle->execute([

        'iletisim_ikon' => $iletisim_ikon,
        'iletisim_baslik' => $iletisim_baslik,
        'iletisim_aciklama' => $iletisim_aciklama,
        'iletisim_durum' => $iletisim_durum
    ]);


    if ($update) {


        header("Location:iletisim.php?yuklenme=basarili");
    } else {
        header("Location:iletisim.php?yuklenme=basarisiz");
    }

}



if (isset($_POST['iletisim_ekle_gonder'])) {


    $iletisim_ikon = $_POST['iletisim_ikon'];
    $iletisim_baslik = $_POST['iletisim_baslik'];
    $iletisim_aciklama = $_POST['iletisim_aciklama'];
    $iletisim_durum = $_POST['iletisim_durum'];

    $duzenle = $conn->prepare("INSERT INTO iletisim SET
    
        iletisim_ikon=:iletisim_ikon,
        iletisim_baslik=:iletisim_baslik,
        iletisim_aciklama=:iletisim_aciklama,
        iletisim_durum=:iletisim_durum

            
                 
                 ");

    $insert = $duzenle->execute([

        'iletisim_ikon' => $iletisim_ikon,
        'iletisim_baslik' => $iletisim_baslik,
        'iletisim_aciklama' => $iletisim_aciklama,
        'iletisim_durum' => $iletisim_durum
    ]);


    if ($insert) {


        header("Location:iletisim.php?yuklenme=basarili");
    } else {
        header("Location:iletisim.php?yuklenme=basarisiz");
    }

}

if (isset($_GET['iletisim_sil'])){

    $iletisim_sil = $conn->prepare("DELETE FROM iletisim  WHERE iletisim_id=:iletisim_id");

    $iletisim_sil->execute(['iletisim_id'=> $_GET['id']]);


    if (iletisim_sil) {
        header("Location:iletisim.php?durum=basarili");

    } else {
        header("Location:iletisim.php?durum=basarisiz");
    }




}

if(isset($_POST['tema_rengi_gonder'])){

    $tema_rengi_durum = $_POST['tema_rengi_durum'];

    $duzenle = $conn->prepare("UPDATE tema SET 
                    
     tema_rengi_durum=:tema_rengi_durum
                
      WHERE tema_id = 1
                          
                             ");

    $update = $duzenle->execute([

        'tema_rengi_durum' => $tema_rengi_durum

    ]);

    if ($update){

        header("Location:tema-rengi.php?durum=basarili");

    }else{

        header("Location:tema-rengi.php?durum=basarisiz");
    }


}

if(isset($_POST['rezervasyon_gonder'])){

    $isim = $_POST['isim'];
    $numara = $_POST['numara'];
    $mesaj= $_POST['mesaj'];
    $mail= $_POST['mail'];


    $duzenle = $conn->prepare("INSERT INTO rezervasyon SET
    
        isim=:isim,
        numara=:numara,
        mesaj=:mesaj,  
        mail=:mail      
                 
                 ");

    $insert = $duzenle->execute([

        'isim' => $isim,
        'numara' => $numara,
        'mesaj' => $mesaj,
        'mail' =>  $mail

    ]);



    function mailgonder()
    {

        $hakkimizda = $conn->prepare("SELECT * FROM  hakkimizda WHERE hakkimizda_id=1");
        $hakkimizda->execute();
        $hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);


        require "inc/class.phpmailer.php"; // PHPMailer dosyamızı çağırıyoruz
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->setFrom($_POST['mail'],$_POST['isim']);
        $mail->Host = "smtp.gmail.com"; //SMTP server adresi
        $mail->SMTPAuth = true;
        $mail->Username =$hakkimizda_cek['hakkimizda_mail']; //SMTP kullanıcı adı
        $mail->Password = "qqtxjrmrnlhpxrkz"; //SMTP şifre
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->CharSet = "utf-8";
        $mail->WordWrap = 50;
        $mail->IsHTML(true); //Mailin HTML formatında hazırlanacağını bildiriyoruz.
        $mail->Subject = "Rezervasyon ".$_POST['isim']."istedi.";
        $mail->Body = $_POST['mesaj'];
        $mail->AltBody = strip_tags("mesaj");
        $mail->AddAddress($hakkimizda_cek['hakkimizda_mail']);
        return ($mail->Send()) ? true : false;
        $mail->ClearAddresses();

    }

    if (mailgonder() && $insert) {

        header("Location:../index.php");
    }
    else{
        header("Location:../index.php");
    }



}

if (isset($_GET['rezervasyon_sil'])){

    $rezervasyon_sil = $conn->prepare("DELETE FROM rezervasyon  WHERE rezervasyon_id=:rezervasyon_id");

    $rezervasyon_sil->execute(['rezervasyon_id'=> $_GET['id']]);


    if ($rezervasyon_sil) {
        header("Location:rezervasyon.php?durum=basarili");

    } else {
        header("Location:rezervasyon.php?durum=basarisiz");
    }




}



if(isset($_POST['wp_gonder'])){

    $wp_durum = $_POST['wp_durum'];
    $wp_mesaj = $_POST['wp_mesaj'];

    $duzenle = $conn->prepare("UPDATE wp SET 
                    
     wp_durum=:wp_durum,
     wp_mesaj=:wp_mesaj
                
      WHERE wp_id = 1
                          
                             ");

    $update = $duzenle->execute([

        'wp_durum' => $wp_durum,
        'wp_mesaj' => $wp_mesaj

    ]);

    if ($update){

        header("Location:wp.php?durum=basarili");

    }else{

        header("Location:wp.php?durum=basarisiz");
    }


}

if(isset($_POST['kullanici_ekle'])){

    $kullanici_adi = $_POST['kullanici_adi'];
    $kullanici_sifre = $_POST['kullanici_sifre'];
    $kullanici_sifre1 = $_POST['kullanici_sifre1'];

    if ($kullanici_sifre ==  $kullanici_sifre1){


        $hashed_sifre = password_hash($kullanici_sifre, PASSWORD_BCRYPT);

        $duzenle = $conn->prepare("INSERT INTO kullanici SET 
                    
        kullanici_adi =:kullanici_adi,
        kullanici_sifre =:kullanici_sifre
                          
                          ");
        $insert = $duzenle->execute([

            'kullanici_adi' => $kullanici_adi,
            'kullanici_sifre' => $hashed_sifre
        ]);


        if ($insert){
            header("Location:kullanicilar.php");
        }else{
            header("Locotion:kullanicilar.php");
        }

    }else{
        header("Location:kullanici.php");
    }

}
if (isset($_POST['giris_yap'])) {

    $kullanici = $conn->prepare("SELECT * FROM kullanici WHERE kullanici_adi = ?");
    $kullanici->execute(array($_POST['kullanici_adi']));
    $kullanici_cek = $kullanici->fetch(PDO::FETCH_ASSOC);

    if ($kullanici->rowCount() == 1) {
        $hashed_sifre = $kullanici_cek['kullanici_sifre'];

        // Şifreyi doğrulayın
        if (password_verify($_POST['kullanici_sifre'], $hashed_sifre)) {
            // Giriş başarılı, oturum başlatın ve ana sayfaya yönlendirin
            $_SESSION['kullanici_adi'] = $kullanici_cek['kullanici_adi'];
            header("Location: index.php");
            exit();
        } else {
            // Giriş başarısız, hata mesajı gösterin
            header("Location: login.php");
        }
    } else {
        // Kullanıcı bulunamadı, hata mesajı gösterin
        header("Location: login.php");
    }
}


if (isset($_GET['kullanici_sil'])){

    $kullanici_sil = $conn->prepare("DELETE FROM kullanici  WHERE kullanici_id=:kullanici_id");

    $kullanici_sil->execute(['kullanici_id'=> $_GET['id']]);


    if (kullanici_sil) {
        header("Location:kullanicilar.php?durum=basarili");

    } else {
        header("Location:kullanicilar.php?durum=basarisiz");
    }




}

if(isset($_GET['hepsini_sil_rezervasyon'])){

    $hrezervasyon_sil = $conn->prepare("DELETE FROM rezervasyon");
    $hrezervasyon_sil ->execute([]);

    if ($hrezervasyon_sil){
        header("LOcation:rezervasyon.php?durum=basarili");
    }else{

        header("LOcation:rezervasyon.php?durum=basarisiz");

    }









}



?>
