<?php
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $db_name = "dbasrama";

 $db = mysqli_connect($hostname,$username,$password) or DIE("Connection
is down ");
 mysqli_select_db($db,$db_name) or DIE("Database name not available !!");

?>
