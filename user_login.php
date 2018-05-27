<?php
  session_start();
  include("inc/koneksi.php");

  if($_SESSION){
    $logins = $_SESSION['login'];
    if($logins == "true"){
      header("location: ../asrama/user_indextes.php");
    }else{
      
    }
  }else{

  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='css/materialize.css'>
  <link type="text/css" rel="stylesheet" href='css/custom.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .card {
      width:350px;
    }
  </style>
</head>

<body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

<div class="atcenter">
  <div class="center">
    <div class="vc_empty_space" style="height:25px"><span class="vc_empty_space_inner"></span></div>
    <img src="images/gku.png">
    <!--Card-->
    <div class="row">
        <div class="card card-panel loginbox blue-grey lighten-5">
          <h5 class="center card-title">Log In to Your Account</h5>
          <!--Form-->
          <?php
          $qry = mysqli_query($db,"SELECT * FROM tbpenghuni");
          $row = mysqli_fetch_array($qry);
          ?>
              <form action="inc/user_login.php" method="POST">
                <!--
                if(isset($_COOKIE['belumlogin'])){
                    echo "Anda Harus Login Terlebih Dahulu untuk Mengakses Halaman Tersebut<br><br>";

  <script>swal("Access Ditolak", "Anda Harus Login Dulu", 'error');</script>

                    setcookie('belumlogin', '');
                    }
                -->
                <div class="row">
                  <div class="input-field col s12">
                    <input id="username" type="text" class="validate" name="username">
                    <label for="username">username</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">password</label>
                  </div>
                  <div class="row ">
                    <div class="col s12">
                      <button class="btn waves-effect grey darken-4" type="submit" name="action">Log In</button>
                    </div>
                  </div>
                </div>
              </form>
          <!--Form-->
        </div>
      </div>
  <!--Card-->
  </div>
</div>

</body>
</html>
