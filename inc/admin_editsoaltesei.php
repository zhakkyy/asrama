<?php
    include ("koneksi.php");


    $id = $_POST['no'];
    $soal_e = $_POST['soal_e'];
    $soal_i = $_POST['soal_i']; //<!--baru diubah-->

    $update = mysqli_query($db,"UPDATE `soal_ei` SET `soal_e`='$soal_e' WHERE `soal_ei`.`idsoal_ei`='$id'");
    $update = mysqli_query($db,"UPDATE `soal_ei` SET `soal_i`='$soal_i' WHERE `soal_ei`.`idsoal_ei`='$id'"); //<!--baru diubah-->


    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_soalei.php';</script>"); //<!--baru diubah-->
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_soalei.php';</script>"); //<!--baru diubah-->
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
