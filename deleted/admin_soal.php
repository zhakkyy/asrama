<!DOCTYPE html>
<?php
 session_start();
  include ("inc/koneksi.php");
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


  <div class="navbar-fixed ">
    <nav class=" red darken-3">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo"><img src="images/headericon.png"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Navbar goes here -->

  <!-- Page Layout here -->
  <div class="row">

    <div class="col s3 white">
      <!-- Grey navigation panel -->
      <ul class="sidenav sidenav-fixed">
        <li class="bold active"><a class="collapsible-header waves-effect waves-teal" tabindex="0">Soal MBTI</a>
          <div class="collapsible-body" style="display: block;">
            <ul>
              <li><a href="soale.php">Soal E</a></li>
              <li><a href="soali.php">Soal I</a></li>
              <li><a href="soals.php">Soal S</a></li>
              <li><a href="soaln.php">Soal N</a></li>
              <li><a href="soalt.php">Soal T</a></li>
              <li><a href="soalf.php">Soal F</a></li>
              <li><a href="soalj.php">Soal J</a></li>
              <li><a href="soalp.php">Soal P</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <div class="col s9">
      <!-- Teal page content  -->
      <div class="section no-pad-bot" id="index-banner">
        <div class="">
          <h4>Soal MBTI</h4>
          <h6>Extrovert</h6>

          <br><br>
          <button onclick="myPrintFunction()">Print this page</button><br>
          <table id="soal" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
            <tr><th>No.</th>
                <th>Soal Extrovert</th>
                <th></th>

            </tr>

          <?php
          $qry = mysqli_query($db,"SELECT *FROM soal_ei");
          $no = 1;
          while($row = mysqli_fetch_array($qry))
          {
          ?>
          <td><?php echo $row['idsoal_ei']; ?></td>
          <td><?php echo $row['soal_e'];?></td>
          <td>
            <a href="admin_editsoaltes.php?id=<?php echo $row['idsoal_ei']; ?>"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Edit</button></a>
          </td>
          </tr>

          <?php
            $no++;
          }
          ?>
          </table>

        </div>
      </div>
    </div>

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
