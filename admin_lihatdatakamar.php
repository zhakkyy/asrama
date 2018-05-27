<!DOCTYPE html>
<?php
 session_start();
  include ("inc/koneksi.php");
?>
<html>
<head>
  <title>Admin Page</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='css/materialize.css'>
  <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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
          <p>Hello, Admin!</p>
        </div>
      </div>
      <!--Menu Sidenav-->
      <li class="white"><a href="admin.php"><i class="material-icons">home</i>Home</a></li>
      <li class="white"><a href="admin_uploadfile.php"><i class="material-icons">file_upload</i>Upload File</a></li>
      <li class="white"><a href="admin_soal.php"><i class="material-icons">assignment</i>Soal MBTI</a></li>
      <li class="white"><a href="admin_datagedung.php"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="active"><a href="#"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="admin_datapenghuni.php"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="inc/admin_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
  <div class="container">
    <div class="section no-pad-bot" id="index-banner">
      <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <?php
      $id_kamar = $_GET['id'];
      $qry = mysqli_query($db,"SELECT * FROM tbkamar WHERE id_kamar='$id_kamar'");
      $row = mysqli_fetch_array($qry);
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
            <!-- <?php
            // $id_kamar = $_GET['id'];
            // $qry = mysqli_query($db,"SELECT * FROM tbpenghuni INNER JOIN tbkamar ON tbpenghuni.id_penghuni = tbkamar.penghuni1 WHERE id_kamar='$id_kamar'");
            // $row = mysqli_fetch_array($qry)
            ?> -->
            <!-- <td><?php echo $row['nama_penghuni'];?></td>
            <td><?php echo $row['kota'];?></td>
            <td><?php echo $row['program_studi'];?></td>
            <td><?php echo $row['nomor_hp'];?></td> -->
          </tr>
          <tr>
            <!-- <?php
            // $id_kamar = $_GET['id'];
            // $qry = mysqli_query($db,"SELECT * FROM tbpenghuni INNER JOIN tbkamar ON tbpenghuni.id_penghuni = tbkamar.penghuni2 WHERE id_kamar='$id_kamar'");
            // $row = mysqli_fetch_array($qry)
            ?> -->
            <!-- <td><?php echo $row['nama_penghuni'];?></td>
            <td><?php echo $row['kota'];?></td>
            <td><?php echo $row['program_studi'];?></td>
            <td><?php echo $row['nomor_hp'];?></td> -->
          </tr>
          <tr>
            <!-- <?php
            // $id_kamar = $_GET['id'];
            // $qry = mysqli_query($db,"SELECT * FROM tbpenghuni INNER JOIN tbkamar ON tbpenghuni.id_penghuni = tbkamar.penghuni3 WHERE id_kamar='$id_kamar'");
            // $row = mysqli_fetch_array($qry)
            ?> -->
            <!-- <td><?php echo $row['nama_penghuni'];?></td>
            <td><?php echo $row['kota'];?></td>
            <td><?php echo $row['program_studi'];?></td>
            <td><?php echo $row['nomor_hp'];?></td> -->
          </tr>
          <tr>
            <!-- <?php
            // $id_kamar = $_GET['id'];
            // $qry = mysqli_query($db,"SELECT * FROM tbpenghuni INNER JOIN tbkamar ON tbpenghuni.id_penghuni = tbkamar.penghuni4 WHERE id_kamar='$id_kamar'");
            // $row = mysqli_fetch_array($qry)
            ?> -->
            <!-- <td><?php echo $row['nama_penghuni'];?></td> -->
            <!-- <td><?php echo $row['kota'];?></td>
            <td><?php echo $row['program_studi'];?></td>
            <td><?php echo $row['nomor_hp'];?></td> -->
          </tr>
        </tbody>
      </table>
      <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
      <button class="btn waves-effect grey darken-4" type="submit" name="action">Print<i class="material-icons right">local_printshop</i>
      </button>
    </div>
  </div>
  </main>
</body>
</html>
