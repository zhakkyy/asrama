
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
<script>
    $(document).ready(function(){
    $('select').formSelect();
    });
  </script>
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
      <li class="active"><a href="admin_datagedung.php"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="white"><a href="admin_datakamar.php"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="admin_datapenghuni.php"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="inc/logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <h3>Tambah Gedung</h3>
        <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Table Tambah Gedung-->
        <div class="row">
          <form class="col s12" action="inc/admin_tambahdatagedung.php" method="POST">
            <div class="row">
              <div class="input-field col s8">
                <input name ="nama_gedung" id="nama_gedung" type="text" class="validate" style="width:50%" required>
                <label for="nama_gedung">Nama Gedung</label>
              </div>
            </div>
            <div class="row">
              <div class="col s8">
            <label>Tipe Asrama</label>
               <select name="tipe_gedung" id="tipe_gedung" class="browser-default" style="width:50%" required>
                  <option value = "" disabled selected>Choose One</option>
                  <option value = "Asrama Laki-Laki">Asrama Laki-Laki</option>
                  <option value = "Asrama Perempuan">Asrama Perempuan</option>
               </select>
             </div>
            </div>
            <div class="row">
              <div class="col s6">
                <button class="btn waves-effect grey darken-4" type="submit" name="action" onclick="M.toast({html: 'I am a toast'})">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

</body>
</html>
