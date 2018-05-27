<!DOCTYPE html>
<?php
session_start();
  include ("inc/koneksi.php");
  $_SESSION['username'];
  $qry1="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
  $result1 = mysqli_query($db, $qry1);
  $row1 = mysqli_fetch_assoc($result1);
  $id_penghuni = $row1['id_penghuni'];
  //KALO BELUM LOGIN
  if(!isset($_SESSION['username'])){
  header("Location: user_login.php");
}

  $query = "SELECT * FROM tbpenghuni WHERE username = '".$_SESSION['username']."'";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result);
  $id_penghuni = $row['id_penghuni'];

?>
<html>
<head>
  <title>Tipe Kepribadian</title>
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
      <li class="white"><a href="user.php"><i class="material-icons">home</i>Home</a></li>
      <li class="active"><a href="#"><i class="material-icons">stars</i>Data Kepribadian</a></li>
      <li class="white"><a href="user_lihatkamar.php"><i class="material-icons">content_paste</i>Lihat Kamar</a></li>
      <li class="white"><a href="inc/user_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <?php
        $query2 = "SELECT * FROM tbpenghuni INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni INNER JOIN tbtipekepribadian ON tbtipekepribadian.tipe_kepribadian=tbhasiltes.tipe_kepribadian WHERE tbpenghuni.id_penghuni=$id_penghuni;";
        $result2 = mysqli_query($db, $query2);
        $row2 = mysqli_fetch_assoc($result2);
        ?>
        <h2>Tipe Kepribadian - <?php echo $row2['tipe_kepribadian'];?></h2><br>

        <h3>Deskripsi</h3>
        <p><?php echo $row2['keterangan'];?></p>
        <h3>Partner</h3>
        <p><?php echo $row2['partner'];?></p>
      </div>
    </div>
    </div>
    </main>

</body>
</html>
