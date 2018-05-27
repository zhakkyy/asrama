<!DOCTYPE html>
<?php
session_start();
  include ("inc/koneksi.php");
  $_SESSION['username'];
  $status_login = $_SESSION['status_login'];
  $logins = $_SESSION['login']; //ini prevent back
  if($logins !== "true"){
    header("location: ../asrama/user_login.php");
  }elseif ($status_login == 'test') {
    header("location: ../asrama/user_tesmbti.php");
  }

  $id_penghuni=$_SESSION['id_penghuni'];

  $getidpenghuni= mysqli_query($db,"SELECT * FROM tbhasiltes WHERE id_penghuni='$id_penghuni'");
  $row = mysqli_fetch_array ($getidpenghuni);

  ?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tes Kepribadian MBTI</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>


</head>
<body>

  <!--Menu-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='js/materialize.min.js'></script>
  <script type="text/javascript">
     function alert(){ //alert mulai kuis
     var msg = confirm("Tes ini hanya dapat dilakukan 1x dan bacalah petunjuknya terlebih dahulu, yakin untuk memulai ?");
     if(msg==true){
     window.location="user_tesmbti.php";
     }
     else{
     window.location="user_indextes.php";
     }
     }
   </script>

  <div class="navbar-fixed ">
    <nav class=" red darken-3">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo"><img src="images/headericon.png"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="inc/user_logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>



  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center red-text">Tes Kepribadian MBTI</h1>

      <?php if(isset($row)){ //cek variabel apakah sudah di set ?>
      <div class="row center"> <!--Button mulai-->
        <p class="center col s12 light" style="font-size: 19px;"><i class="material-icons">announcement</i>Anda sudah mengikuti tes kepribadian</p>
        <a href="user.php" id="download-button" class="btn-large waves-effect waves-light teal" onclick="alertHasil();">Lihat Hasil</a>
      </div>
    <?php }else{ ?>
      <p class="center col s12 light" style="font-size: 19px;">Kenali diri anda lebih jauh</p>
      <div class="row center"> <!--Button mulai-->
        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal" onclick="alert();">Mulai Kuis</a>
      </div>
    <?php } ?>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="center row">
        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="images/redstopwatch.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Time</h5>

            <p class="light">Usahakan jawab dalam waktu kurang dari <b><b>15 menit.</b></b><br><br></p> <!--br untuk menyamakan card-panel-->
          </div>
        </div>

        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="images/its_me.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Answer</h5>

            <p class="light"> Jawablah sesuai dengan yang paling menggambarkan diri anda sejujur mungkin</p>
          </div>
        </div>

        <div class="col s4">
          <div class="card-panel white">
            <h2 class="center light-blue-text"><img src="images/icon1x.png" alt="" style="height:50px; weight:50px;"></h2>
            <h5 class="center">Rule</h5>

            <p class="light">Tes dilakukan <b>1x</b> <br> Dengan menjawab 60 pertanyaan sederhana<br></p> <!--br untuk menyamakan card-panel-->
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <!--Footer-->
    <footer class="red darken-3">
      <div class="layout">
        <ul class="footer-links">
          <li>
            <a href="#" style="color:white;">Admission</a>

          </li>
        </ul>
        <div class="social-links-wrapper">
          <ul class="social-links">
              <a href="#">
                <img src="images/icon-facebook.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="images/icon-instagram.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="images/icon-twitter.png" width="30px" height="30px"></a>
              <a href="#">
                <img src="images/icon-email.png" width="30px" height="30px"></a>
          </ul>
        </div>
      </div>
    </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
