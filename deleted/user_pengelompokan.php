<?php
session_start();
    include ("koneksi.php");
    $_SESSION['username'];

// DIGANTI SESUAI DATA LOGIN
$qry=mysqli_query($db, "SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."'");
$id_penghuni_butuh_kamar = isset($_GET['id_penghuni']) ? $_GET['id_penghuni'] : '';
$tipe_penghuni_butuh_kamar = isset($_GET['tipe_kepribadian']) ? $_GET['tipe_kepribadian'] : '';

$sql = "SELECT * FROM tbkamar";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id_kamar = $row['id_kamar'];
        $sql2 = "SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar'";
        $result2 = mysqli_query($db, $sql2);
        if (mysqli_num_rows($result2) > 0 && mysqli_num_rows($result2) < 4) {
          while($row2 = mysqli_fetch_assoc($result2)) {
            $id_penghuni = $row2['id_penghuni'];
            $sql3 = "SELECT * FROM tbpenghuni WHERE id_penghuni = '$id_penghuni'";
            $result3 = mysqli_query($db, $sql3);
            while($row3 = mysqli_fetch_assoc($result3)) {
              if (substr($tipe_penghuni_butuh_kamar,1,2) == "SF" && substring($row3[3],1,2) == "NT") {
                break;
              }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NT" && substring($row3[3],1,2) == "SF"){
                break;
              }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NF" && substring($row3[3],1,2) == "ST"){
                break;
              }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "ST" && substring($row3[3],1,2) == "NF"){
                break;
              }else{
                $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
                $result4 = mysqli_query($db, $sql4);
                break;
                header("location: ../user_lihatkamar.php");
              }
            }
          }
        }else{
          $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
          $result4 = mysqli_query($db, $sql4);
          break;
          header("location: ../user_lihatkamar.php");
        }
    }
} else {
    echo "0 results";
}
?>
