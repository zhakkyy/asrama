<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

include ("koneksi.php");

$login = mysqli_query($db,"SELECT * FROM tbpenghuni WHERE
(username = '" . $_POST['username'] . "') AND
(password = '" . $_POST['password'] . "') ");
$rowcount = mysqli_num_rows($login);

$qry="SELECT * FROM tbpenghuni WHERE username ='".$_POST['username']."'";
$result = mysqli_query($db, $qry);
//$row= mysqli_num_rows($qry);
//if(mysqli_num_rows($rowcount)!=0){
  //$_SESSION['username'] = $row['username'];
  //setcookie($username);
  //header("location: ../user.php");
//}else{
//echo("<script>alert('Periksa kembali Username dan Password anda!!');window.location.href='../user_login.php';</script>");
//setcookie('gagal', 1);
//}
// $data_user = mysqli_fetch_assoc($qry);
// $_SESSION['username'] = $_POST['username'];
// $_SESSION['id_penghuni'] = $_POST ['id_penghuni'];
// if ($data_user['tipe_kepribadian'] == "") {
//   header("location: ../user.php");
// }else {
//   header("location: ../user_inputkepribadian.php");
// }



$tipe_kepribadian = $row['tipe_kepribadian'];
$_SESSION['username'] = $_POST['username'];
//$_SESSION['id_penghuni'] = $_POST['id_penghuni'];

$_SESSION['id_penghuni']= $row['id_penghuni'];

if ($rowcount == 1 && $tipe_kepribadian == ""){
header("location: ../user_indextes.php"); //

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['id_penghuni']= $row['id_penghuni'];
    }
} else {
    echo "0 results";
}

$_SESSION['status_login'] = 'pretes'; //status sebelum, sedang atau sesudah dilakukanya tes
$_SESSION['login'] = 'true'; //status apakah sudah login atau belum
}else if ($rowcount == 1 && $tipe_kepribadian != ""){
header("location: ../user.php?id=" . $_SESSION['username']."");
}else{
echo("<script>alert('Periksa kembali Username dan Password anda!!');window.location.href='../user_login.php';</script>");
}

?>
