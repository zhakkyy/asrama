<?php
    include ("koneksi.php");


    $id = $_POST['no'];
    $soal_j = $_POST['soal_j'];
    $soal_p = $_POST['soal_p']; //<!--baru diubah-->

    $update = mysqli_query($db,"UPDATE `soal_jp` SET `soal_j`='$soal_j' WHERE `soal_jp`.`idsoal_jp`='$id'");
    $update = mysqli_query($db,"UPDATE `soal_jp` SET `soal_p`='$soal_p' WHERE `soal_jp`.`idsoal_jp`='$id'"); //<!--baru diubah-->


    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_soaljp.php';</script>"); //<!--baru diubah-->
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_soaljp.php';</script>"); //<!--baru diubah-->
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
