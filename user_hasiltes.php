<!DOCTYPE html>
  <?php
  session_start();
    include ("inc/koneksi.php");
    $_SESSION['username'];
    $id_penghuni=$_SESSION['id_penghuni'];


    $qry= "SELECT * FROM tbhasiltes WHERE id_penghuni = '$id_penghuni'";
    $result = mysqli_query($db,$qry);
    $row = mysqli_fetch_array($result);
    $tipe_kepribadian = $row['tipe_kepribadian']; //get hasil tipe Kepribadian
    $totalE = $row['nilai_e'];
    $totalI = $row['nilai_i'];
    $totalS = $row['nilai_s'];
    $totalN = $row['nilai_n'];
    $totalT = $row['nilai_t'];
    $totalF = $row['nilai_f'];
    $totalJ = $row['nilai_j'];
    $totalP = $row['nilai_p'];

    $persenE=($totalE/15)*100;
    $persenI=($totalI/15)*100;
    $persenS=($totalS/15)*100;
    $persenN=($totalN/15)*100;
    $persenT=($totalT/15)*100;
    $persenF=($totalF/15)*100;
    $persenJ=($totalJ/15)*100;
    $persenP=($totalP/15)*100;


    //get tipe kepribadian deskripsi dsb
    $qry1= "SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'";
    $result1 = mysqli_query($db,$qry1);
    $row1 = mysqli_fetch_array($result1);
    $deskripsi=$row1['keterangan'];
    $partner=$row1['partner'];
    $partner1=$row1['partner1'];
    // $kelebihan=$row['kelebihan'];
    // $kekurangan=$row['$kekurangan'];
    // $saran=$row1['$saran'];

    // $qry1="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
    // $result1 = mysqli_query($db, $qry1);
    // $row1 = mysqli_fetch_assoc($result1);
    // $id_penghuni = $row1['id_penghuni'];

    // $status_login = $_SESSION['status_login'];
    // if ($status_login == 'test') {
    //   header("location: ../asrama/user_hasiltes.php");
    // }
  ?>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Tes Kepribadian MBTI</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materializez.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom2.css"  media="screen,projection"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>



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
            <li><a href="inc/user_logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="section no-pad-bot" id="divtoprint">
      <div class="container">
        <br><br>
        <h4 class="h4 gray-text">Tipe Kepribadian Anda :</h4>
        <div class="center">
          <form class="" action="inc/user_inputkepribadian.php" method="post">

            <h3 class="header" name="hasiltest" id='diagramhasil'>
              <p>--
                <b>
                    <?php
                      echo $tipe_kepribadian;
                     ?>
                </b> <!--Hasil Tipe-->
              --</p>
            </h3>

        </div>
        <nav class="container center red darken-3" style="height:5px; width:100%;">

        </nav>
        <br><br>

        <!--layout-->
        <div class="row">
          <div class="left-sidebar grey lighten-2">
            <div class="chart" style="padding:0; margin:0;"><!--chart-->
              <b style="font-size:23px;">Skor :</b>


            </div>
            <div id="stackedchart_values" style="header:none;"></div>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Extrovert : <?php  echo $totalE;?> (<?php  echo $persenE;?>%) &nbsp Introvert : <?php  echo $totalI;?> (<?php  echo $persenI;?>%)</p> <!--hasil dari tes bukan diagram-->
            <div id="stackedchart_values2" style=""></div>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Sensing : <?php  echo $totalS;?> (<?php  echo $persenS;?>%) &nbsp Intuitive : <?php  echo $totalN;?> (<?php  echo $persenN;?>%)</p>
            <div id="stackedchart_values3" style=""></div>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Thinking : <?php  echo $totalT;?> (<?php  echo $persenT;?>%) &nbsp Feeling : <?php  echo $totalF;?> (<?php  echo $persenF;?>%)</p>
            <div id="stackedchart_values4" style=""></div>
            <p>&nbsp &nbsp &nbsp &nbsp &nbsp -Judging : <?php  echo $totalJ;?> (<?php  echo $persenJ;?>%) &nbsp Perceiving : <?php  echo $totalP;?> (<?php  echo $persenP;?>%)</p>
            <br>

          </div>

          <div class="right-sidebar grey lighten-2">
            <div class="col">
              <b style="font-size:23px;">Deskripsi :</b><br><br> <!--Call deskripsi jawaban-->
                <?php echo $deskripsi; ?>
              <br><br><br>
              <b style="font-size:23px;">Partner :</b><br> <!--Call partner jawaban-->
              <p><?php echo $partner;?> dan <?php echo $partner1;?></p>
              <br><br><br>

              <!-- kelebihan dan kekurangan saran -->

              <div class="row">

              </div>


              <div class="col s6"> <!--button print-->
                <a href="" target="_blank" onclick="PrintDiv()"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Cetak Hasil Tes</button></a>
              </div>

              <div class="col s6">
                <a href="inc/user_pengelompokan.php"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Lihat Kamar</button></a>
              </div>

            </div>

          </div>
  </form>
        </div>

      </div>
    </div>


    <!--Footer-->
      <footer class="red darken-3 footer">
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
    <script type="text/javascript"> //script print
      function PrintDiv() {
           var divToPrint = document.getElementById('divtoprint');
           var popupWin = window.open('', '_blank', 'width=766,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
      }
    </script>


    <!--Chart Script-->
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" scr="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Extrovert', 'Introvert'],
           ['E/I',  <?php echo $totalE; ?>,  <?php echo $totalI; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 100,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values"));
        chart.draw(view, options_fullStacked);
    }
    </script>


    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Sensing', 'Intuitive'],
           ['S/N',  <?php echo $totalS; ?>,  <?php echo $totalN; ?>],

        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 100,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values2"));
        chart.draw(view, options_fullStacked);
    }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Thinking', 'Feeling'],
           ['T/F',  <?php echo $totalT; ?>,  <?php echo $totalF; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 100,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values3"));
        chart.draw(view, options_fullStacked);
    }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['Tipe', 'Judging', 'Perceiving'],
           ['J/P',  <?php echo $totalJ; ?>,  <?php echo $totalP; ?>],
        ]);

        var options_fullStacked = {
          isStacked: 'percent',
          height: 100,
          hAxis: {
            minValue: 0,
            ticks: []
          }
        };

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var chart = new google.visualization.BarChart(document.getElementById("stackedchart_values4"));
        chart.draw(view, options_fullStacked);
    }
    </script>
    </body>
  </html>
