<!DOCTYPE html>
<?php
 session_start();
  include ("inc/koneksi.php");
  $user = $_SESSION['username'];
?>

<html>
<head>
  <?php
  $query = "SELECT * FROM tbpenghuni WHERE username = '".$_SESSION['username']."' ";
  ?>
  <title>Hello, <?php echo $_SESSION['username'];?>!</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='css/materialize.css'>
  <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Script untuk Chart-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  <!--Navbar-->
  <main>
  <div class="navbar-fixed">
    <nav class=" red darken-3">
    </nav>
  </div>
    <!--Sidenav, belum responsive-->
    <ul class="side-nav fixed">
      <!--Header Sidenav-->
      <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <div class="user-panel">
        <div class="pull-left image">
          <i class="material-icons admin md-48" alt="user-image">face </i>
        </div>
        <div class="pull-left info">

          <p>Hello, <?php echo $_SESSION['username'];  ?>!</p>
        </div>
      </div>
      <!--Menu Sidenav-->
      <li class="active"><a href="#"><i class="material-icons">home</i>Home</a></li>
      <li class="white"><a href="user_tipekepribadian.php"><i class="material-icons">stars</i>Tipe Kepribadian</a></li>
      <li class="white"><a href="user_lihatkamar.php"><i class="material-icons">content_paste</i>Lihat Kamar</a></li>
      <li class="white"><a href="inc/user_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h2>Selamat Datang!</h2>
      </div>
    </div>
    </main>

</body>
</html>
