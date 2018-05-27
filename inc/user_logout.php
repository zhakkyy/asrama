<?php
//SESSION START HARUS DILAKUKAN SEBELUM MENGGUNAKAN FUNGSI SESSION
session_start();
setcookie('');
//SESSION DESTROY DIGUNAKAN UNTUK MENGHANCURKAN SEMUA SESSION YANG AKTIFs
unset($_SESSION['username']);
session_destroy();
header('Location: ../index.html');
 ?>
