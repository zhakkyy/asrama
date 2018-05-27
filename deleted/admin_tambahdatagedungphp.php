<?php

    include ("koneksi.php");

    $nama_gedung = $_POST['nama_gedung'];
    $tipe_gedung = $_POST['tipe_gedung'];

        $tes=mysqli_query($db,"insert into tbgedung(id_gedung, nama_gedung, tipe_gedung)values(NULL, '$nama_gedung','$tipe_gedung')")or die(mysqli_error($db));
        if($tes){
        echo ("<script>alert('Data Telah Ditambah!!');window.location.href='../admin_datagedung.php';</script>");
        }else{
        echo ("<script>alert('Data Gagal Ditambah!!');window.location.href='../admin_datagedung.php';</script>");

      }

    //*system upload

?>
