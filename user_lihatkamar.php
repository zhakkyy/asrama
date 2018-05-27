<!DOCTYPE html>
<?php
 session_start();
  include ("inc/koneksi.php");
  $_SESSION['username'];
  $_SESSION['id_penghuni'];
  //KALO BELUM LOGIN
  if(!isset($_SESSION['username'])){
  header("Location: user_login.php");
}
?>
<html>
<head>
  <title>Lihat Kamar</title>
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
          <?php
          $query = "SELECT * FROM tbpenghuni WHERE username = '".$_SESSION['username']."'";
          ?>
          <p>Hello, <?php echo $_SESSION['username'];  ?>!</p>
        </div>
      </div>
      <!--Menu Sidenav-->
      <li class="white"><a href="user.php"><i class="material-icons">home</i>Home</a></li>
      <li class="white"><a href="user_tipekepribadian.php"><i class="material-icons">stars</i>Data Kepribadian</a></li>
      <li class="active"><a href="#"><i class="material-icons">content_paste</i>Lihat Kamar</a></li>
      <li class="white"><a href="inc/user_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <?php
        $qry = "SELECT * FROM tbpenghuni a JOIN tbisikamar b ON a.id_penghuni = b.id_penghuni JOIN tbkamar c ON b.id_kamar = c.id_kamar WHERE b.id_penghuni='".$_SESSION['id_penghuni']."'";
        //$qry="SELECT * FROM tbpenghuni p JOIN tbisikamar i JOIN tbgedungWHERE ";
        $result = mysqli_query($db, $qry);
        $row = mysqli_fetch_assoc($result);


        ?>
        <h3>Kamar <?php echo $row['id_gedung'];?>-<?php echo $row['nama_kamar'];?></h3>
        <p>Gedung <?php echo $row['id_gedung'];?></p>
        <p>Lantai <?php $string= $row['nama_kamar']; echo $firstCharacter=$string[0];?></p>
        <p>Kamar <?php echo $row['nama_kamar'];?></p>
        <table class="responsive-table">
          <thead>
            <tr>
                <th>Nama</th>
                <th>Asal Daerah</th>
                <th>Program Studi</th>
                <th>Nomor Handphone</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <?php
              $qry = "SELECT * FROM tbpenghuni a JOIN tbisikamar b ON a.id_penghuni = b.id_penghuni JOIN tbkamar c ON b.id_kamar = c.id_kamar WHERE b.id_penghuni='".$_SESSION['id_penghuni']."'";
              $result = mysqli_query($db, $qry);
              $row = mysqli_fetch_assoc($result);
              ?>
              <td><?php echo $row['nama_penghuni'];?></td>
              <td><?php echo $row['kota'];?></td>
              <td><?php echo $row['program_studi'];?></td>
              <td><?php echo $row['nomor_hp'];?></td>
            </tr>
            <tr>
              <?php
              $qry = "SELECT * FROM tbpenghuni a JOIN tbisikamar b ON a.id_penghuni = b.id_penghuni JOIN tbkamar c ON b.id_kamar = c.id_kamar WHERE b.id_penghuni='".$_SESSION['id_penghuni']."'";
              $result = mysqli_query($db, $qry);
              $row = mysqli_fetch_assoc($result);
              ?>
              <td><?php echo $row['nama_penghuni'];?></td>
              <td><?php echo $row['kota'];?></td>
              <td><?php echo $row['program_studi'];?></td>
              <td><?php echo $row['nomor_hp'];?></td>
            </tr>
            <tr>
              <?php
              $qry = "SELECT * FROM tbpenghuni a JOIN tbisikamar b ON a.id_penghuni = b.id_penghuni JOIN tbkamar c ON b.id_kamar = c.id_kamar WHERE b.id_penghuni='".$_SESSION['id_penghuni']."'";
              $result = mysqli_query($db, $qry);
              $row = mysqli_fetch_assoc($result);
              ?>
              <td><?php echo $row['nama_penghuni'];?></td>
              <td><?php echo $row['kota'];?></td>
              <td><?php echo $row['program_studi'];?></td>
              <td><?php echo $row['nomor_hp'];?></td>
            </tr>
            <tr>
              <?php
              $qry = "SELECT * FROM tbpenghuni a JOIN tbisikamar b ON a.id_penghuni = b.id_penghuni JOIN tbkamar c ON b.id_kamar = c.id_kamar WHERE b.id_penghuni='".$_SESSION['id_penghuni']."'";
              $result = mysqli_query($db, $qry);
              $row = mysqli_fetch_assoc($result);
              ?>
              <td><?php echo $row['nama_penghuni'];?></td>
              <td><?php echo $row['kota'];?></td>
              <td><?php echo $row['program_studi'];?></td>
              <td><?php echo $row['nomor_hp'];?></td>
            </tr>
          </tbody>
        </table>
        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <button class="btn waves-effect grey darken-4" type="submit" name="action">Print<i class="material-icons right">local_printshop</i>
        </button>
      </div>
    </div>
    </div>
    </main>

</body>
</html>
