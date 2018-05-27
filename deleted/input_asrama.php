<?php
include ("koneksi.php");

// INISIASI ID DAN TIPE KEPRIBADIAN PENGHUNI YANG MAU DIMASUKKAN KE KAMAR
$id_penghuni_butuh_kamar = 1;
$tipe_penghuni_butuh_kamar = 'INTP';

$sql = "SELECT * FROM tbkamar";
$result = mysqli_query($db, $sql);

// CEK DATA KAMAR ADA ATAU ENGGA
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      // HITUNG PENGHUNI YANG UDAH ADA DI TABEL ISI KAMAR
        $id_kamar = $row['id_kamar'];
        $sql2 = "SELECT COUNT(id_penghuni), id_penghuni FROM tbisikamar GROUP BY id_kamar";
        $result2 = mysqli_query($db, $sql2);
        // KALAU PENGHUNI KURANG DARI 4 DAN LEBIH DARI 0, ARTINYA MASIH BISA DIMASUKKIN
        if (mysqli_num_rows($result2)['id_penghuni'] > 0 && mysqli_num_rows($result2)['id_penghuni'] < 4) {
          while($row2 = mysqli_fetch_assoc($result2)) {
            $id_penghuni = $row2['id_penghuni'];
            $sql3 = "SELECT * FROM tbpenghuni INNER JOIN tbisikamar ON tbpenghuni.id_penghuni = tbisikamar.id_penghuni";
            $result3 = mysqli_query($db, $sql3);
            while($row3 = mysqli_fetch_assoc($result3)) {
              if (substr($tipe_penghuni_butuh_kamar,1,2) == "NT" && substr($row3['tipe_kepribadian'],1,2) == "SF") {
                break;
              }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "SF" && substr($row3['tipe_kepribadian'],1,2) == "NT"){
                break;
              }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "NF" && substr($row3['tipe_kepribadian'],1,2) == "ST"){
                break;
              }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "ST" && substr($row3['tipe_kepribadian'],1,2) == "NF"){
                break;
              }else{
                // $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
                // $result4 = mysqli_query($db, $sql4);
                // break;
                echo "1";
              }
            }
          }
        }else{
          // $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
          // $result4 = mysqli_query($db, $sql4);
          // break;
          echo "2";
        }
    }
} else {
    echo "0 results";
}
?>
