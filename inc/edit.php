<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("koneksi.php");

$iddata = $_POST['no'];
$gedung = $_POST['gedung'];
$kamar = $_POST['kamar'];
$mahasiswa = $_POST['mahasiswa'];

$update = mysqli_query($db,"UPDATE `tbdata` SET `gedung`='$gedung',`kamar`='$kamar',`mahasiswa`='$mahasiswa' WHERE `tbdata`.`iddata`='$iddata'");


if($update){
echo("<script>alert('Data Telah Diubah!!');window.location.href='../admin.php';</script>");
}else{
echo $no;

echo("<script>alert('Data Gagal Diubah !!');window.location.href='../admin.php';</script>");
echo("Error description: " . mysqli_error($db));
}
?>
