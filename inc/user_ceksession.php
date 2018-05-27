<?php
session_start();
//KONDISI DIBAWAH DIGUNAKAN UNTUK MENGECEK APAKAH TERDAPAT SESSION user_data ATAU TIDAK
if(isset($_SESSION['username'])){
  //JIKA SUDAH ADA SESSIONNYA APA YANG INGIN DILAKUKAN
}
else{
		header('Location: ../user_login.php');
		setcookie('belumlogin', 1);
	}
 ?>
