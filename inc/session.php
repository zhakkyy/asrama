<?php
   include('koneksi.php');

   $user_check=$_SESSION['login_user'];
   $ses_sql=mysqli_query("SELECT username FROM tbpenghuni WHERE username='$user_check'");
   $login_session=$rowcount['username'];

   if(!isset($login_session)){
     mysql_close($connection);
     header('Location:admin_login.php');
   }
?>
