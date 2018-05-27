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
      <li class ="white"><a href="admin_soalei.php"><i class="material-icons">assignments</i>Soal Extrovert & Introvert</a></li> <!--baru diubah-->
      <li class ="white"><a href="admin_soalsn.php"><i class="material-icons">assignments</i>Soal Sensing & Intuitive</a></li>
      <li class ="white"><a href="admin_soaltf.php"><i class="material-icons">assignments</i>Soal Thinking & Feeling</a></li>
      <li class ="white"><a href="admin_soaljp.php"><i class="material-icons">assignments</i>Soal Judgment & Perceiving</a></li>
      <li class ="white"><a href="admin_deskripsi.php"><i class="material-icons">assignments</i>Deskripsi</a></li>
      <li class="white"><a href="inc/admin_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h3>Edit Soal </h3>
        <table id="soal" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
          <tr><th>No.</th>
              <th>Soal Judging</th>
              <th>Soal Perceiving</th> <!--baru diubah-->
              <th></th>

          </tr>

        <?php
        $qry = mysqli_query($db,"SELECT *FROM soal_jp");
        $no = 1;
        while($row = mysqli_fetch_array($qry))
        {
        ?>
        <td><?php echo $row['idsoal_jp']; ?></td>
        <td><?php echo $row['soal_j'];?></td>
        <td><?php echo $row['soal_p'];?></td><!--baru diubah-->
        <td> <!--baru diubah-->
          <a href="admin_editsoaltesjp.php?id=<?php echo $row['idsoal_jp']; ?>"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Edit</button></a> <!--untuk soal e-->
        </td>
        </tr>

        <?php
          $no++;
        }
        ?>
        </table>
      </div>
    </div>
  </main>
</body>
</html>
