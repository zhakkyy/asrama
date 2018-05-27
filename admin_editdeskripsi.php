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
      <li class ="white"><a href="admin_soalei.php"><i class="material-icons">assignments</i>Soal Extrovert & Introvert</a></li><!--baru diubah-->
      <li class ="white"><a href="admin_soalsn.php"><i class="material-icons">assignments</i>Soal Sensing & Intuitive</a></li>
      <li class ="white"><a href="admin_soaltf.php"><i class="material-icons">assignments</i>Soal Thinking & Feeling</a></li>
      <li class ="white"><a href="admin_soaljp.php"><i class="material-icons">assignments</i>Soal Judgment & Perceiving</a></li>
      <li class ="white"><a href="admin_deskripsi.php"><i class="material-icons">assignments</i>Deskripsi</a></li>
      <li class="white"><a href="inc/admin_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
      $('select').formSelect();
    });
    </script>
  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h3>Edit Deskripsi</h3>
        <?php
          $id=$_GET['id'];
          $query = mysqli_query($db,"SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian='$id'");
          $row = mysqli_fetch_array ($query);

        ?>
        <form action="inc/admin_editdeskripsi.php" method="post">
          <input type="hidden" name="no" value="<?php echo $id ?>" >
        <table id="soal" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="50%">
          <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><textarea type="text" name="keterangan" id="keterangan" rows="8" cols="2000" class="validate"><?php echo $row['keterangan'];?></textarea></td>
          </tr>
          <tr>
            <td>Partner</td>
            <td>:</td>
            <td><textarea type="text" name="partner" id="partner" rows="8" cols="2000" class="validate"><?php echo $row['partner'];?></textarea></td>
          </tr>
          <!-- <tr>
            <td>Partner</td>
            <td>:</td>
            <td class="input-field col s12">
              <select>
                <option value="" disabled selected>Choose option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Materialize Select</label>
            </td>
          </tr> -->
          <tr>
            <td>Partner Lain</td>
            <td>:</td>
            <td><textarea type="text" name="partner1" id="partner1" rows="8" cols="2000" class="validate"><?php echo $row['partner1'];?></textarea></td>
          </tr>
          <!-- <tr>
            <td>Kelebihan</td>
            <td>:</td>
            <td><textarea type="text" name="kelebihan" id="kelebihan" rows="8" cols="2000" class="validate"><?php echo $row['kelebihan'];?></textarea></td>
          </tr>
          <tr>
            <td>Kekurangan</td>
            <td>:</td>
            <td><textarea type="text" name="kekurangan" id="kekurangan" rows="8" cols="2000" class="validate"><?php echo $row['kekurangan'];?></textarea></td>
          </tr>
          <tr>
            <td>Saran</td>
            <td>:</td>
            <td><textarea type="text" name="saran" id="saran" rows="8" cols="2000" class="validate"><?php echo $row['saran'];?></textarea></td>
          </tr> -->
          <!-- <tr>-->
            <!-- <td>Soal I  : </td> -->
            <!-- <td><input type="text" name="soal_i" id="soal_i" size="25" type="text" class="validate" value="<?php echo $row['soal_i'];?>"></td><!--baru diubah-->
          <!-- </tr> -->

        </table>
        <div class="row">
          <div class="col s6">
            <button class="btn waves-effect grey darken-4" type="submit" name="action" style="float:right">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
