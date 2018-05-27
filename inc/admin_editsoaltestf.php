<?php
    include ("koneksi.php");


    $id = $_POST['no'];
    $soal_t = $_POST['soal_t'];
    $soal_f = $_POST['soal_f']; //<!--baru diubah-->

    $update = mysqli_query($db,"UPDATE `soal_tf` SET `soal_t`='$soal_t' WHERE `soal_tf`.`idsoal_tf`='$id'");
    $update = mysqli_query($db,"UPDATE `soal_tf` SET `soal_f`='$soal_f' WHERE `soal_tf`.`idsoal_tf`='$id'"); //<!--baru diubah-->


    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_soaltf.php';</script>"); //<!--baru diubah-->
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_soaltf.php';</script>"); //<!--baru diubah-->
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
