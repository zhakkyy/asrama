<?php
session_start();
//KONDISI DIBAWAH DIGUNAKAN UNTUK MENGECEK APAKAH TERDAPAT SESSION user_data ATAU TIDAK
if(isset($_SESSION['username'])){
  header('location: admin.php');
}else{
		header('Location: admin_login.php');
		setcookie('belumlogin', 1);
	}
 ?>
