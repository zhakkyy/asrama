<?php
//SESSION START HARUS DILAKUKAN SEBELUM MENGGUNAKAN FUNGSI SESSION
session_start();
setcookie('');
//SESSION DESTROY DIGUNAKAN UNTUK MENGHANCURKAN SEMUA SESSION YANG AKTIFs
session_destroy();
header('Location: ../admin_login.php');

 ?>
