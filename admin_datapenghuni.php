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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

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
      <li class="white"><a href="admin_datakamar.php"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="active"><a href="#"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="inc/admin_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <input type="text"  id="myInput" onkeyup="mySearchFunction()" placeholder="Cari Data" style="width:30%;height:40px;float: right;">
        <h3>Data Penghuni</h3>
        <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->

        <form class="form-inline" action="generate_pdf.php" method="post"> <!--Generate PDF-->
          <button type="sumbmit" id="pdf" name="generate_pdf" class="btn btn-primary"> <i class="fa fa-pdf" aria-hidden="true"></i>Generate PDF</button>
        </form>

        <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->

        <!--Table Data Gedung-->
        <div class="pmd-card pmd-z-depth pmd-card-custom-view">
          <div class="table-responsive">
            <table id="tabelpenghuni" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Program Studi</th>
                  <th>Nomor Hp</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                  <!-- <th>Tipe Kepribadian</th>
                  <th>Substring</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $qry = mysqli_query($db,"SELECT * FROM tbpenghuni");
                $no = 1;

                while($row = mysqli_fetch_array($qry))
                {
                ?>
                <td><?php echo $row['id_penghuni'];?></td>
                <td><?php echo $row['nama_penghuni'];?></td>
                <td><?php echo $row['jenis_kelamin'];?></td>
                <td><?php echo $row['program_studi'];?></td>
                <td><?php echo $row['nomor_hp'];?></td>
                <td><?php echo $row['kota'];?></td>
                <td><?php echo $row['provinsi'];?></td>
                <!-- <td><?php echo $row['tipe_kepribadian'];?></td> -->
                <!-- <td><?php echo substr($row['tipe_kepribadian'],1,2);?></td> -->
                </tr>
                <?php
                  $no++;
                }
                ?>

              </tbody>
              <script>

                  function mySearchFunction() {
                	  var input, filter, table, tr, td, i;
                	  input = document.getElementById("myInput");
                	  filter = input.value.toUpperCase();
                	  table = document.getElementById("tabelpenghuni");
                	  tr = table.getElementsByTagName("tr");

                	  for (i = 0; i < tr.length; i++) {
                		td = tr[i].getElementsByTagName("td")[1];
                		if (td) {
                		  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                			tr[i].style.display = "";
                		  } else {
                			tr[i].style.display = "none";
                		  }
                		}
                	  }
                	}
              </script>
            </table>
          </div>
        </div> <!--Table -->
      </div>
    </div>
  </main>
</body>
</html>
