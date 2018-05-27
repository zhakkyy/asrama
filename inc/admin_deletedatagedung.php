<?php
    include ("koneksi.php");

        $id_gedung=$_GET['id_gedung'];

        $query=mysqli_query($db,"delete from tbgedung where id_gedung='$id_gedung'");
        if($query){
          
        echo ("<script>alert('Data Dihapus!!');window.location.href='../admin_datagedung.php';</script>");
        }else{
        echo ("<script>alert('Data Gagal Dihapus!!');window.location.href='../admin_datagedung.php';</script>");

      }

    //*system upload

?>
