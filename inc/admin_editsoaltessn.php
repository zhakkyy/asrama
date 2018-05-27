<?php
    include ("koneksi.php");


    $id = $_POST['no'];
    $soal_s = $_POST['soal_s'];
    $soal_n = $_POST['soal_n']; //<!--baru diubah-->

    $update = mysqli_query($db,"UPDATE `soal_sn` SET `soal_s`='$soal_s' WHERE `soal_sn`.`idsoal_sn`='$id'");
    $update = mysqli_query($db,"UPDATE `soal_sn` SET `soal_n`='$soal_n' WHERE `soal_sn`.`idsoal_sn`='$id'"); //<!--baru diubah-->


    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_soalsn.php';</script>"); //<!--baru diubah-->
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_soalsn.php';</script>"); //<!--baru diubah-->
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
