<?php
session_start();
include ("koneksi.php");
$_SESSION['username'];


$id_penghuni_butuh_kamar = 41;
$tipe_penghuni_butuh_kamar = 'INTJ';
$jenis_kelamin_butuh_kamar = 'Perempuan';

$sql = "SELECT * FROM tbkamar JOIN tbgedung WHERE tbkamar.id_gedung = tbgedung.id_gedung";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
          $id_kamar = $row['id_kamar'];
          $sql2 = "SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar' ORDER BY id_kamar ASC";
          $result2 = mysqli_query($db, $sql2);
          if (mysqli_num_rows($result2) >= 0 && mysqli_num_rows($result2) < 4){

          }else{
            echo "cari kamar lain ";
             continue;
          }
      }
}else{
  echo "0 results";
}
?>
