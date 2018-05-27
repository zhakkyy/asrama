<?php

    include ("koneksi.php");

    $nama_kamar = $_POST['nama_kamar'];
    $id_gedung = $_POST['id_gedung'];
    $nama_gedung = $_POST['nama_gedung'];

        $tes=mysqli_query($db,"insert into tbkamar(id_kamar, nama_kamar, id_gedung)values(NULL, '$nama_kamar','( SELECT id_gedung FROM tbgedung WHERE tbgedung.id_gedung = $nama_gedung )')")or die(mysqli_error($db));
        if($tes){
        echo ("<script>alert('Data Telah Ditambah!!');window.location.href='../admin_datakamar.php';</script>");
        }else{
        echo ("<script>alert('Data Gagal Ditambah!!');window.location.href='../admin_datakamar.php';</script>");

      }

    //*system upload

?>
