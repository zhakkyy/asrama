<!DOCTYPE html>
<?php
session_start();
  include ("inc/koneksi.php");
  $_SESSION['username'];
  $qry1="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
  $result1 = mysqli_query($db, $qry1);
  $row1 = mysqli_fetch_assoc($result1);
  $id_penghuni = $row1['id_penghuni'];

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

  <?php
      //soal e i

      $answer1 = $_POST['question-1-answers'];
      $answer2 = $_POST['question-2-answers'];
      $answer3 = $_POST['question-3-answers'];
      $answer4 = $_POST['question-4-answers'];
      $answer5 = $_POST['question-5-answers'];
      $answer6 = $_POST['question-6-answers'];
      $answer7 = $_POST['question-7-answers'];
      $answer8 = $_POST['question-8-answers'];
      $answer9 = $_POST['question-9-answers'];
      $answer10 = $_POST['question-10-answers'];
      $answer11 = $_POST['question-11-answers'];
      $answer12 = $_POST['question-12-answers'];
      $answer13 = $_POST['question-13-answers'];
      $answer14 = $_POST['question-14-answers'];
      $answer15 = $_POST['question-15-answers'];

      $totalE = 0;

      if ($answer1 == "A") { $totalE++; }
      if ($answer2 == "A") { $totalE++; }
      if ($answer3 == "A") { $totalE++; }
      if ($answer4 == "A") { $totalE++; }
      if ($answer5 == "A") { $totalE++; }
      if ($answer6 == "A") { $totalE++; }
      if ($answer7 == "A") { $totalE++; }
      if ($answer8 == "A") { $totalE++; }
      if ($answer9 == "A") { $totalE++; }
      if ($answer10 == "A") { $totalE++; }
      if ($answer11 == "A") { $totalE++; }
      if ($answer12 == "A") { $totalE++; }
      if ($answer13 == "A") { $totalE++; }
      if ($answer14 == "A") { $totalE++; }
      if ($answer15 == "A") { $totalE++; }

      $totalI = 0;

      if ($answer1 == "B") { $totalI++; }
      if ($answer2 == "B") { $totalI++; }
      if ($answer3 == "B") { $totalI++; }
      if ($answer4 == "B") { $totalI++; }
      if ($answer5 == "B") { $totalI++; }
      if ($answer6 == "B") { $totalI++; }
      if ($answer7 == "B") { $totalI++; }
      if ($answer8 == "B") { $totalI++; }
      if ($answer9 == "B") { $totalI++; }
      if ($answer10 == "B") { $totalI++; }
      if ($answer11 == "B") { $totalI++; }
      if ($answer12 == "B") { $totalI++; }
      if ($answer13 == "B") { $totalI++; }
      if ($answer14 == "B") { $totalI++; }
      if ($answer15 == "B") { $totalI++; }

      //soal s n

      $answer16 = $_POST['question-16-answers'];
      $answer17 = $_POST['question-17-answers'];
      $answer18 = $_POST['question-18-answers'];
      $answer19 = $_POST['question-19-answers'];
      $answer20 = $_POST['question-20-answers'];
      $answer21 = $_POST['question-21-answers'];
      $answer22 = $_POST['question-22-answers'];
      $answer23 = $_POST['question-23-answers'];
      $answer24 = $_POST['question-24-answers'];
      $answer25 = $_POST['question-25-answers'];
      $answer26 = $_POST['question-26-answers'];
      $answer27 = $_POST['question-27-answers'];
      $answer28 = $_POST['question-28-answers'];
      $answer29 = $_POST['question-29-answers'];
      $answer30 = $_POST['question-30-answers'];

      $totalS = 0;

      if ($answer16 == "A") { $totalS++; }
      if ($answer17 == "A") { $totalS++; }
      if ($answer18 == "A") { $totalS++; }
      if ($answer19 == "A") { $totalS++; }
      if ($answer20 == "A") { $totalS++; }
      if ($answer21 == "A") { $totalS++; }
      if ($answer22 == "A") { $totalS++; }
      if ($answer23 == "A") { $totalS++; }
      if ($answer24 == "A") { $totalS++; }
      if ($answer25 == "A") { $totalS++; }
      if ($answer26 == "A") { $totalS++; }
      if ($answer27 == "A") { $totalS++; }
      if ($answer28 == "A") { $totalS++; }
      if ($answer29 == "A") { $totalS++; }
      if ($answer30 == "A") { $totalS++; }

      $totalN = 0;

      if ($answer16 == "B") { $totalN++; }
      if ($answer17 == "B") { $totalN++; }
      if ($answer18 == "B") { $totalN++; }
      if ($answer19 == "B") { $totalN++; }
      if ($answer20 == "B") { $totalN++; }
      if ($answer21 == "B") { $totalN++; }
      if ($answer22 == "B") { $totalN++; }
      if ($answer23 == "B") { $totalN++; }
      if ($answer24 == "B") { $totalN++; }
      if ($answer25 == "B") { $totalN++; }
      if ($answer26 == "B") { $totalN++; }
      if ($answer27 == "B") { $totalN++; }
      if ($answer28 == "B") { $totalN++; }
      if ($answer29 == "B") { $totalN++; }
      if ($answer30 == "B") { $totalN++; }

      //soal t f

      $answer31 = $_POST['question-31-answers'];
      $answer32 = $_POST['question-32-answers'];
      $answer33 = $_POST['question-33-answers'];
      $answer34 = $_POST['question-34-answers'];
      $answer35 = $_POST['question-35-answers'];
      $answer36 = $_POST['question-36-answers'];
      $answer37 = $_POST['question-37-answers'];
      $answer38 = $_POST['question-38-answers'];
      $answer39 = $_POST['question-39-answers'];
      $answer40 = $_POST['question-40-answers'];
      $answer41 = $_POST['question-41-answers'];
      $answer42 = $_POST['question-42-answers'];
      $answer43 = $_POST['question-43-answers'];
      $answer44 = $_POST['question-44-answers'];
      $answer45 = $_POST['question-45-answers'];

      $totalT = 0;

      if ($answer31 == "A") { $totalT++; }
      if ($answer32 == "A") { $totalT++; }
      if ($answer33 == "A") { $totalT++; }
      if ($answer34 == "A") { $totalT++; }
      if ($answer35 == "A") { $totalT++; }
      if ($answer36 == "A") { $totalT++; }
      if ($answer37 == "A") { $totalT++; }
      if ($answer38 == "A") { $totalT++; }
      if ($answer39 == "A") { $totalT++; }
      if ($answer40 == "A") { $totalT++; }
      if ($answer41 == "A") { $totalT++; }
      if ($answer42 == "A") { $totalT++; }
      if ($answer43 == "A") { $totalT++; }
      if ($answer44 == "A") { $totalT++; }
      if ($answer45 == "A") { $totalT++; }

      $totalF = 0;

      if ($answer31 == "B") { $totalF++; }
      if ($answer32 == "B") { $totalF++; }
      if ($answer33 == "B") { $totalF++; }
      if ($answer34 == "B") { $totalF++; }
      if ($answer35 == "B") { $totalF++; }
      if ($answer36 == "B") { $totalF++; }
      if ($answer37 == "B") { $totalF++; }
      if ($answer38 == "B") { $totalF++; }
      if ($answer39 == "B") { $totalF++; }
      if ($answer40 == "B") { $totalF++; }
      if ($answer41 == "B") { $totalF++; }
      if ($answer42 == "B") { $totalF++; }
      if ($answer43 == "B") { $totalF++; }
      if ($answer44 == "B") { $totalF++; }
      if ($answer45 == "B") { $totalF++; }

      //soal j p

      $answer46 = $_POST['question-46-answers'];
      $answer47 = $_POST['question-47-answers'];
      $answer48 = $_POST['question-48-answers'];
      $answer49 = $_POST['question-49-answers'];
      $answer50 = $_POST['question-50-answers'];
      $answer51 = $_POST['question-51-answers'];
      $answer52 = $_POST['question-52-answers'];
      $answer53 = $_POST['question-53-answers'];
      $answer54 = $_POST['question-54-answers'];
      $answer55 = $_POST['question-55-answers'];
      $answer56 = $_POST['question-56-answers'];
      $answer57 = $_POST['question-57-answers'];
      $answer58 = $_POST['question-58-answers'];
      $answer59 = $_POST['question-59-answers'];
      $answer60 = $_POST['question-60-answers'];

      $totalJ = 0;

      if ($answer46 == "A") { $totalJ++; }
      if ($answer47 == "A") { $totalJ++; }
      if ($answer48 == "A") { $totalJ++; }
      if ($answer49 == "A") { $totalJ++; }
      if ($answer50 == "A") { $totalJ++; }
      if ($answer51 == "A") { $totalJ++; }
      if ($answer52 == "A") { $totalJ++; }
      if ($answer53 == "A") { $totalJ++; }
      if ($answer54 == "A") { $totalJ++; }
      if ($answer55 == "A") { $totalJ++; }
      if ($answer56 == "A") { $totalJ++; }
      if ($answer57 == "A") { $totalJ++; }
      if ($answer58 == "A") { $totalJ++; }
      if ($answer59 == "A") { $totalJ++; }
      if ($answer60 == "A") { $totalJ++; }

      $totalP = 0;

      if ($answer46 == "B") { $totalP++; }
      if ($answer47 == "B") { $totalP++; }
      if ($answer48 == "B") { $totalP++; }
      if ($answer49 == "B") { $totalP++; }
      if ($answer50 == "B") { $totalP++; }
      if ($answer51 == "B") { $totalP++; }
      if ($answer52 == "B") { $totalP++; }
      if ($answer53 == "B") { $totalP++; }
      if ($answer54 == "B") { $totalP++; }
      if ($answer55 == "B") { $totalP++; }
      if ($answer56 == "B") { $totalP++; }
      if ($answer57 == "B") { $totalP++; }
      if ($answer58 == "B") { $totalP++; }
      if ($answer59 == "B") { $totalP++; }
      if ($answer60 == "B") { $totalP++; }

      $persenE=($totalE/15)*100;
      $persenI=($totalI/15)*100;
      $persenS=($totalS/15)*100;
      $persenN=($totalN/15)*100;
      $persenT=($totalT/15)*100;
      $persenF=($totalF/15)*100;
      $persenJ=($totalJ/15)*100;
      $persenP=($totalP/15)*100;

  ?>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="h4 gray-text">Tipe Kepribadian Anda :</h4>
      <div class="center">
        <form class="" action="inc/user_inputkepribadian.php" method="post">

          <h3 class="header" name="hasiltest" id='diagramhasil'>
            <p>--
              <b>
                <?php
                  if ($persenE>$persenI) {
                    $hasil1="E";
                    echo $hasil1;
                    // echo "E";
                  } else {
                    $hasil1="I";
                    echo $hasil1;
                    // echo "I";
                  }
                 ?>
                 <?php
                   if ($persenS>$persenN) {
                     $hasil2="S";
                     echo $hasil2;
                     // echo "S";
                   } else {
                     $hasil2="N";
                     echo $hasil2;
                     // echo "N";
                   }
                  ?>
                  <?php
                    if ($persenT>$persenF) {
                      $hasil3="T";
                      echo $hasil3;
                      // echo "T";
                    } else {
                      $hasil3="F";
                      echo $hasil3;
                      // echo "F";
                    }
                   ?>
                   <?php
                     if ($persenJ>$persenP) {
                       $hasil4="J";
                       echo $hasil4;
                       // echo "J";
                     } else {
                       $hasil4="P";
                       echo $hasil4;
                       // echo "P";
                     }
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
        <div class="left-sidebar grey lighten-2"> <!--chart-->
          <div class="chart" style="padding:0; margin:0;">
            <b style="font-size:23px;">Skor :</b>
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
          <!-- <?php $hasilE = round($persenE, 0);?>
          <p>E : <?php echo $hasilE; ?> %</p>
          <?php $hasilI = round($persenI, 0);?>
          <p>I : <?php echo $hasilI; ?> %</p>
          <?php $hasilS = round($persenS, 0);?>
          <p>S : <?php echo $hasilS; ?> % </p>
          <?php $hasilN = round($persenN, 0);?>
          <p>N : <?php echo $hasilN; ?> %</p>
          <?php $hasilT = round($persenT, 0);?>
          <p>T : <?php echo $hasilT; ?> %</p>
          <?php $hasilF = round($persenF, 0);?>
          <p>F : <?php echo $hasilF; ?> %</p>
          <?php $hasilJ = round($persenJ, 0);?>
          <p>J : <?php echo $hasilJ; ?> %</p>
          <?php $hasilP = round($persenP, 0);?>
          <p>P : <?php echo $hasilP; ?> %</p> -->


        </div>

        <div class="right-sidebar grey lighten-2">
          <div class="col">
            <b style="font-size:23px;">Deskripsi :</b><br><br> <!--Call deskripsi jawaban-->
            <?php
              $hasil=$hasil1.$hasil2.$hasil3.$hasil4;
              echo $hasil;

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


            $sql4="INSERT INTO tbhasiltes (id_penghuni, nilai_e, nilai_i, nilai_s, nilai_n, nilai_t, nilai_f, nilai_j, nilai_p, tipe_kepribadian) VALUES ($id_penghuni, $hasilE, $hasilI, $hasilS, $hasilN, $hasilT, $hasilF, $hasilJ, $hasilP, '$tipe_kepribadian')";
            $result4 = mysqli_query($db, $sql4);

            ?>
            <div class="row">

            </div>

            <!-- <div class="col s6">
              <a href="" target="_blank" onclick="window.open('printhasilkepribadian.php', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Cetak Hasil Tes</button></a>
            </div> -->

            <div class="col s6">
              <a href="" target="_blank" onclick="window.print()"><button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Cetak Hasil Tes</button></a>
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


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
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
