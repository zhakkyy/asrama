<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
 session_start();

include ("koneksi.php");


$login = mysqli_query($db,"select * from tbadmin where
(username = '" . $_POST['username'] . "') and
(password = '" . $_POST['password'] . "') ");
$rowcount = mysqli_num_rows($login);
//youtube
//if(isset($_POST ['submit'])){
  //if(empty($_POST['username']) || empty ($_POST['password'])){

  //}else{
    //$username=$_POST['username'];
    //$password=$_POST['password'];

    //$username=stripslashes($username);
    //$password=stripslashes($password);
    //$username=mysql_real_escape_string($username);
    //$username=mysql_real_escape_string($username);

    //$query=mysqli_query("SELECT * FROM tbpenghuni WHERE password='$password' AND username='$username'");
    //$row=mysqli_num_rows($query);
    //if($row==1){
      //$_SESSION['login_user']=$username;
      //header("location: ../admin.php");
    //}else{
      //$error="username invalid";

    //}
  //}
//}
//tony
//if($rowcount==1){
  //$row = mysqli_fetch_array($rowcount);
  //$_SESSION['username'] = $rowcount['username'];
  //setcookie($username);
//header("location: ../admin.php");
//}else{
//echo("<script>alert('Periksa kembali Username dan Password anda!!');window.location.href='../admin_login.php';</script>");
//setcookie('Gagal Login', 1);
//}
//mine
if ($rowcount == 1){
$data = mysqli_fetch_assoc($login);
$_SESSION['username'] = $_POST['login'];
setcookie($username);
header("location: ../admin.php");
}else{
echo("<script>alert('Periksa kembali Username dan Password anda!!');window.location.href='../admin_login.php';</script>");
}

?>
