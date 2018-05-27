<?php
    include ("koneksi.php");


    $id = $_POST['no'];
    $keterangan = $_POST['keterangan'];
    $partner = $_POST['partner']; //<!--baru diubah-->
    $partner1 = $_POST['partner1'];

    $update = mysqli_query($db,"UPDATE `tbtipekepribadian` SET `keterangan`='$keterangan' WHERE `tbtipekepribadian`.`tipe_kepribadian`='$id'");
    $update = mysqli_query($db,"UPDATE `tbtipekepribadian` SET `partner`='$partner' WHERE `tbtipekepribadian`.`tipe_kepribadian`='$id'"); //<!--baru diubah-->
    $update = mysqli_query($db,"UPDATE `tbtipekepribadian` SET `partner1`='$partner1' WHERE `tbtipekepribadian`.`tipe_kepribadian`='$id'"); //<!--baru diubah-->

    if($update){
    echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin_deskripsi.php';</script>"); //<!--baru diubah-->
    }else{
    echo $no;

    echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin_deskripsi.php';</script>"); //<!--baru diubah-->
    echo("Error description: " . mysqli_error($db));
    }

    //*system upload

?>
