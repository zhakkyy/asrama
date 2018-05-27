<?php
session_start();
include ("koneksi.php");
$_SESSION['username'];

//QUERY UNTUK GET DATA PENGHUNI YANG LOGIN
$qry="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
$result = mysqli_query($db, $qry);
$row = mysqli_fetch_assoc($result);
$id_penghuni_butuh_kamar = $row['id_penghuni'];
echo $id_penghuni_butuh_kamar;

$qry5= "SELECT * FROM tbhasiltes INNER JOIN tbpenghuni ON tbhasiltes.id_penghuni=tbpenghuni.id_penghuni WHERE tbhasiltes.id_penghuni=$id_penghuni_butuh_kamar";
$result5 = mysqli_query($db, $qry5);
$row5 = mysqli_fetch_assoc($result5);
$tipe_kepribadian_butuh_kamar = $row5['tipe_kepribadian'];

// //UNTUK INISIASI
// $id_penghuni_butuh_kamar = 10;
// $tipe_penghuni_butuh_kamar = 'ENFJ';

//GET DATA KAMAR
$sql = "SELECT * FROM tbkamar";
$result = mysqli_query($db, $sql);

// CEK KAMAR ADA ATAU ENGGA, KALO ADA
if (mysqli_num_rows($result) > 0){
  //LOOPING LIHAT DATA KAMAR DARI TBKAMAR
    while($row5 = mysqli_fetch_assoc($result)){
        //GET DATA ID KAMAR DARI TBKAMAR
        $id_kamar = $row5['id_kamar'];
        //GET DATA DARI TBISIKAMAR DIMANA KAMAR DI TBISIKAMAR = IDKAMAR YANG ADA DI TBKAMAR
        $sql2 = "SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar' ORDER BY id_kamar ASC";
        $result2 = mysqli_query($db, $sql2);
        //KALAU KAMAR DI TBISIKAMAR LEBIH DARI ATAU 0 DAN KURANG DARI 4, ARTINYA MASIH BISA DIINPUT
        if (mysqli_num_rows($result2) > 0 && mysqli_num_rows($result2) < 4){
            //LOOPING UNTUK CEK PER PENGHUNINYA
            while($row2 = mysqli_fetch_assoc($result2)){
                //GET PENGHUNI DARI TBISIKAMAR
                $id_penghuni = $row2['id_penghuni'];

                //GET DATA PENGHUNI DARI TABEL PENGHUNI DIMANA ID PENGHUNI DI TBKAMAR SAMA DENGAN
                //IDPENGHUNI YANG ADA DI ISIKAMAR
                $sql3 = "SELECT * FROM tbpenghuni INNER JOIN tbisikamar ON tbpenghuni.id_penghuni = tbisikamar.id_penghuni WHERE tbisikamar.id_penghuni = '$id_penghuni'";
                $result3 = mysqli_query($db, $sql3);
                //$row3 = mysqli_fetch_assoc($result3);

                // print $tipe_kepribadian;
                //LOOPING UNTUK CEK TIPE KEPRIBADIAN PENGHUNI
                  while($row3 = mysqli_fetch_array($result3)){
                    $tipe_kepribadian = $row3['tipe_kepribadian'];
                    echo $tipe_penghuni_butuh_kamar ;
                    echo $tipe_kepribadian ;
                      //JIKA SI BUTUH KAMAR = SF DAN YANG ADA DI ISI KAMAR = NT, BREAK
                      if (substr($tipe_penghuni_butuh_kamar,1,2) == "ST" && substr($tipe_kepribadian,1,2) == "ST") {
                        echo "1 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "ST" && substr($tipe_kepribadian,1,2) == "NF"){
                        echo "2 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "SF" && substr($tipe_kepribadian,1,2) == "SF"){
                        echo "3 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "SF" && substr($tipe_kepribadian,1,2) == "NT"){
                        echo "4 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NT" && substr($tipe_kepribadian,1,2) == "NT"){
                        echo "5 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NF" && substr($tipe_kepribadian,1,2) == "NF"){
                        echo "6 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NF" && substr($tipe_kepribadian,1,2) == "ST"){
                        echo "7 ";
                        break;
                      }else if(substr($tipe_penghuni_butuh_kamar,1,2) == "NT" && substr($tipe_kepribadian,1,2) == "SF"){
                        echo "8 ";
                        break;
                      }else{
                        $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
                        $result4 = mysqli_query($db, $sql4);
                        echo "masuk 1 ";
                        header("location: ../user_lihatkamar.php");
                        break;
                        // echo "3";
                        // break;
                    }
                }
            }
            //KALO KAMAR KOSONG MASIH BISA INPUT
            // $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
            // $result4 = mysqli_query($db, $sql4);
            // echo "tes";
            // break;
        //TAPI KALAU 4 BERARTI CONTINUE LOOPING LG CARI YG KAMAR KURANG DARI 4
      }else if(mysqli_num_rows($result2) == 0 ){

           $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
           $result4 = mysqli_query($db, $sql4);
           echo "masuk 2 ";
           header("location: ../user_tipekepribadian.php");
           break;

        }else {
          echo "cari kamar lain ";
           continue;

        }
    }
//KALO GAADA KAMAR YA GAGAL
}else{
  echo "0 results";
}

//JIKA KAMAR SUDAH ADA DATANYA
// if (mysqli_num_rows($result) > 0) {
//   $sql2 = "SELECT COUNT(id_penghuni), id_penghuni FROM tbisikamar GROUP BY id_kamar";
//   $result2 = mysqli_query($db, $sql2);
//   //PENGULANGAN CEK JUMLAH PENGHUNI YG ADA
//   while($row2 = mysqli_fetch_assoc($result2)){
//     if (mysqli_num_rows($row2['id_penghuni']) > 0 && mysqli_num_rows($row2['id_penghuni']) < 4){
//       while($row2= mysqli_fetch_assoc($result3)){
//         $id_penghuni = $row2['id_penghuni'];
//         $sql3 = "SELECT * FROM tbpenghuni INNER JOIN tbisikamar ON tbpenghuni.id_penghuni = tbisikamar.id_penghuni";
//         $result3 = mysqli_query($db, $sql3);
//       }
//       while($row3 = mysqli_fetch_assoc($result3)) {
//         if (substr($tipe_penghuni_butuh_kamar,1,2) == "NT" && substr($row3['tipe_kepribadian'],1,2) == "SF") {
//           break;
//         }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "SF" && substr($row3['tipe_kepribadian'],1,2) == "NT"){
//           break;
//         }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "NF" && substr($row3['tipe_kepribadian'],1,2) == "ST"){
//           break;
//         }elseif(substr($tipe_penghuni_butuh_kamar,1,2) == "ST" && substr($row3['tipe_kepribadian'],1,2) == "NF"){
//           break;
//         }else{
//           echo "1";
//           // $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
//           // $result4 = mysqli_query($db, $sql4);
//           // break;
//         }
//       }
//     }else{
//       // $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
//       // $result4 = mysqli_query($db, $sql4);
//       // break;
//       echo "2";
//     }
//
//   }
//   //INSERT PENGHUNI JIKA KAMAR MASIH KOSONG
// }else{
//   $sql4 = "INSERT INTO tbisikamar (id_penghuni, id_kamar) VALUES ($id_penghuni_butuh_kamar, $id_kamar)";
//   $result4 = mysqli_query($db, $sql4);
// // echo "3";
// }
?>
