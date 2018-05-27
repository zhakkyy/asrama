<!DOCTYPE html>
  <?php
  session_start();
    include ("inc/koneksi.php");
    $_SESSION['username'];
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

                </b> <!--Hasil Tipe-->
              --</p>
            </h3>

        </div>
        <nav class="container center red darken-3" style="height:5px; width:100%;">

        </nav>
        <br><br>

        <!--layout-->
        <div class="row">
          <div class="left-sidebar grey lighten-2"> <!--chart-->
            <div class="chart" style="padding:0; margin:0;">
              <b style="font-size:23px;">Skor :</b>
              <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript" scr="https://www.google.com/jsapi"></script>
              <?php


               ?>

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
                     ['E/I',  <?php echo $totalS; ?>,  <?php echo $totalN; ?>],

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

            </div>
            <div id="stackedchart_values" style="header:none;"></div>
            <div id="stackedchart_values2" style=""></div>
            <div id="stackedchart_values3" style=""></div>
            <div id="stackedchart_values4" style=""></div>
            <br>



            <!--Detail nilai-->
            <?php $hasilE = round($persenE, 0);?>
            <p>E : <?php echo $hasilE; ?> % (<?php echo $totalE; ?>/15)</p>
            <?php $hasilI = round($persenI, 0);?>
            <p>I : <?php echo $hasilI; ?> % (<?php echo $totalI; ?>/15)</p>
            <?php $hasilS = round($persenS, 0);?>
            <p>S : <?php echo $hasilS; ?> % (<?php echo $totalS; ?>/15)</p>
            <?php $hasilN = round($persenN, 0);?>
            <p>N : <?php echo $hasilN; ?> % (<?php echo $totalN; ?>/15)</p>
            <?php $hasilT = round($persenT, 0);?>
            <p>T : <?php echo $hasilT; ?> % (<?php echo $totalT; ?>/15)</p>
            <?php $hasilF = round($persenF, 0);?>
            <p>F : <?php echo $hasilF; ?> % (<?php echo $totalF; ?>/15)</p>
            <?php $hasilJ = round($persenJ, 0);?>
            <p>J : <?php echo $hasilJ; ?> % (<?php echo $totalJ; ?>/15)</p>
            <?php $hasilP = round($persenP, 0);?>
            <p>P : <?php echo $hasilP; ?> % (<?php echo $totalP; ?>/15)</p>


          </div>

          <div class="right-sidebar grey lighten-2">
            <div class="col">
              <b style="font-size:23px;">Deskripsi :</b><br><br> <!--Call deskripsi jawaban-->
              <?php

                $qry2= "SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$hasil'";
                $result2 = mysqli_query($db,$qry2);
                $row2 = mysqli_fetch_array($result2);
              ?>


              <?php echo $row2 ['keterangan'];?>
              <br><br><br>
              <b style="font-size:23px;">Partner :</b><br> <!--Call partner jawaban-->
              <p><?php echo $row2 ['partner'];?> dan <?php echo $row2 ['partner1'];?></p>
              <br><br><br>
              <!--<b style="font-size:23px;">Rekomendasi Profesi :</b><br><br> <!--Call pekerjaan jawaban-->
              <!-- <?php echo $row2 ['profesi'];?> -->

              <?php
              $qry3="SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian='$hasil'";
              $result3 = mysqli_query($db, $qry3);
              $row3 = mysqli_fetch_assoc($result3);
              $tipe_kepribadian = $row3['tipe_kepribadian'];
              // echo $tipe_kepribadian;
              ?>


              <div class="row">

              </div>

              <!-- <div class="col s6">
                <a href="" target="_blank" onclick="window.open('printhasilkepribadian.php', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Cetak Hasil Tes</button></a>
              </div> -->

              <div class="col s6">
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
    <script type="text/javascript">
      function PrintDiv() {
           var divToPrint = document.getElementById('divtoprint');
           var popupWin = window.open('', '_blank', 'width=766,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
      }
    </script>


    <!--Chart Script-->
    <script type="text/javascript">
      var app = {
      init: function(){
        this.cacheDOM();
        this.handleCharts();
      },
      cacheDOM: function(){
        this.$chart = $(".bar-chart");
      },
      cssSelectors: {
        chartBar: "bar-chart--inner"
      },
      handleCharts: function(){
        /*
          iterate through charts and grab total value
          then apply that to the width of the inner bar
        */
        $.each(this.$chart, function(){
          var $this = $(this),
              total = $this.data("total"),
              $targetBar = $this.find("."+app.cssSelectors.chartBar);
              $targetBar.css("width","0%"); // zero out for animation
              setTimeout(function(){
                $targetBar.css("width",total+"%");
              },400);
        });
      }
      }

      app.init();
    </script>

    </body>
  </html>
