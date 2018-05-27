<?php
    include ("koneksi.php");


    $id_gedung = $_POST['no'];
    $nama_gedung = $_POST['nama_gedung'];
    $tipe_gedung = $_POST['tipe_gedung'];

    $update = mysqli_query($db,"UPDATE `tbgedung` SET `nama_gedung`='$nama_gedung',`tipe_gedung`='$tipe_gedung' WHERE `tbgedung`.`id_gedung`='$id_gedung'");


    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_datagedung.php';</script>");
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_datagedung.php';</script>");
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
