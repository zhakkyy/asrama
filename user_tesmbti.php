<!DOCTYPE html>
<?php
session_start();
  include ("inc/koneksi.php");
  $_SESSION['username'];
  $_SESSION['status_login'] = 'test';
  $status_login = $_SESSION['status_login'];
  if($status_login == ''){

  }

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

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Tes Kepribadian MBTI</h1>
      <br><br>
      <div style="font-size:30px;"><i class="small material-icons">access_time</i><span id="timer"></span></div>
      <br><br>
      <div class="" >
          <script>
            document.getElementById('timer').innerHTML =
              15 + ":" + 00;
            startTimer();

            function startTimer() {
              var presentTime = document.getElementById('timer').innerHTML;
              var timeArray = presentTime.split(/[:]+/);
              var m = timeArray[0];
              var s = checkSecond((timeArray[1] - 1));
              if(s==59){m=m-1}
              //if(m<0){alert('timer completed')}

              document.getElementById('timer').innerHTML =
                m + ":" + s;
              setTimeout(startTimer, 1000);
            }

            function checkSecond(sec) {
              if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
              if (sec < 0) {sec = "59"};
              return sec;
            }
          </script>
      </div>
    </div>
  </div>


  <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
          <form action="inc/user_tesmbti.php" class="" role="form" method="post" accept-charset="utf-8" id="soal" >
                              <hr>
            <!--SOAL EI 1-->
            <!--Soal E-->
            <!--Soal I-->

            <div class="row">
              <div class="col-xs-2">

                <div class="">
                  <label for="question-1-answers-A">
                    <input class="with-gap" type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=1");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_e']; //manggil soal e
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-1-answers-B">
                    <input class="with-gap" type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required checked/>
                    <span>
                      <?php echo $row['soal_i']; //manggil soal i
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 2-->
            <div class="row">
              <div class="col-xs-2">

                <div class="">
                  <label for="question-2-answers-A">
                    <input class="with-gap" type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=2");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-2-answers-B">
                    <input class="with-gap" type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }
                      ?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 3-->
            <div class="row">
              <div class="col-xs-2">

                <div class="">
                  <label for="question-3-answers-A">
                    <input class="with-gap" type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=3");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-3-answers-B">
                    <input class="with-gap" type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }
                      ?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 4-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-4-answers-A">
                    <input class="with-gap" type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=4");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-4-answers-B">
                    <input class="with-gap" type="radio" name="question-4-answers" id="question-4-answers-B" value="B" required checked/>
                    <span>
                      <?php echo $row['soal_i'];
                      }
                      ?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 5-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-5-answers-A">
                    <input class="with-gap" type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=5");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-5-answers-B">
                    <input class="with-gap" type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required checked/>
                    <span>
                      <?php echo $row['soal_i'];
                      } ?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 6-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-6-answers-A">
                    <input class="with-gap" type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=6");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-6-answers-B">
                    <input class="with-gap" type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 7-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-7-answers-A">
                    <input class="with-gap" type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=7");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-7-answers-B">
                    <input class="with-gap" type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 8-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-8-answers-A">
                    <input class="with-gap" type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=8");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-8-answers-B">
                    <input class="with-gap" type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 9-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-9-answers-A">
                    <input class="with-gap" type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=9");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-9-answers-B">
                    <input class="with-gap" type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 10-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-10-answers-A">
                    <input class="with-gap" type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=10");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-10-answers-B">
                    <input class="with-gap" type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 11-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-11-answers-A">
                    <input class="with-gap" type="radio" name="question-11-answers" id="question-11-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=11");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-11-answers-B">
                    <input class="with-gap" type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 12-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-12-answers-A">
                    <input class="with-gap" type="radio" name="question-12-answers" id="question-12-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=6");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-12-answers-B">
                    <input class="with-gap" type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 13-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-13-answers-A">
                    <input class="with-gap" type="radio" name="question-13-answers" id="question-13-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=13");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-13-answers-B">
                    <input class="with-gap" type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 14-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-14-answers-A">
                    <input class="with-gap" type="radio" name="question-14-answers" id="question-14-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=14");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-14-answers-B">
                    <input class="with-gap" type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr>
            <!--SOAL EI 15-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-15-answers-A">
                    <input class="with-gap" type="radio" name="question-15-answers" id="question-15-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_ei WHERE idsoal_ei=15");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                        echo $row['soal_e'];
                      ?>
                    </span>
                  </label>
                </div>

                <div class="">
                  <label for="question-15-answers-B">
                    <input class="with-gap" type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                    <span>
                      <?php echo $row['soal_i'];
                      }?>
                    </span>
                  </label>
                </div>

              </div>
            </div>
                              <hr><hr>
            <!--SOAL SN 1-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-16-answers-A">
                    <input class="with-gap" type="radio" name="question-16-answers" id="question-16-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=1");
                      $no = 1;
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-16-answers-B">
                    <input class="with-gap" type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 2-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-17-answers-A">
                    <input class="with-gap" type="radio" name="question-17-answers" id="question-17-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=2");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-17-answers-B">
                    <input class="with-gap" type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 3-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-18-answers-A">
                    <input class="with-gap" type="radio" name="question-18-answers" id="question-18-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=3");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-18-answers-B">
                    <input class="with-gap" type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 4-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-19-answers-A">
                    <input class="with-gap" type="radio" name="question-19-answers" id="question-19-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=4");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-19-answers-B">
                    <input class="with-gap" type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 5-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-20-answers-A">
                    <input class="with-gap" type="radio" name="question-20-answers" id="question-20-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=5");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-20-answers-B">
                    <input class="with-gap" type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 6-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-21-answers-A">
                    <input class="with-gap" type="radio" name="question-21-answers" id="question-21-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=6");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-21-answers-B">
                    <input class="with-gap" type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 7-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-22-answers-A">
                    <input class="with-gap" type="radio" name="question-22-answers" id="question-22-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=7");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-22-answers-B">
                    <input class="with-gap" type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 8-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-23-answers-A">
                    <input class="with-gap" type="radio" name="question-23-answers" id="question-23-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=8");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-23-answers-B">
                    <input class="with-gap" type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 9-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-24-answers-A">
                    <input class="with-gap" type="radio" name="question-24-answers" id="question-24-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=9");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-24-answers-B">
                    <input class="with-gap" type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 10-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-25-answers-A">
                    <input class="with-gap" type="radio" name="question-25-answers" id="question-25-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=10");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-25-answers-B">
                    <input class="with-gap" type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 11-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-26-answers-A">
                    <input class="with-gap" type="radio" name="question-26-answers" id="question-26-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=11");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-26-answers-B">
                    <input class="with-gap" type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 12-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-27-answers-A">
                    <input class="with-gap" type="radio" name="question-27-answers" id="question-27-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=12");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-27-answers-B">
                    <input class="with-gap" type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 13-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-28-answers-A">
                    <input class="with-gap" type="radio" name="question-28-answers" id="question-28-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=13");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-28-answers-B">
                    <input class="with-gap" type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 14-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-29-answers-A">
                    <input class="with-gap" type="radio" name="question-29-answers" id="question-29-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=14");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-29-answers-B">
                    <input class="with-gap" type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <!--SOAL SN 15-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-30-answers-A">
                    <input class="with-gap" type="radio" name="question-30-answers" id="question-30-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_sn WHERE idsoal_sn=15");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_s'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-30-answers-B">
                    <input class="with-gap" type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_n'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr><hr>
            <!--SOAL TF 1-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-31-answers-A">
                    <input class="with-gap" type="radio" name="question-31-answers" id="question-31-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=1");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-31-answers-B">
                    <input class="with-gap" type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
                              <div class="row">
                                <div class="col-xs-2">
                                  <div class="">
                                    <label for="question-32-answers-A">
                                      <input class="with-gap" type="radio" name="question-32-answers" id="question-32-answers-A" value="A" required checked/>
                                      <span>
                                        <?php
                                        $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=2");
                                        while($row = mysqli_fetch_array($qry))
                                        {
                                        echo $row['soal_t'];
                                        ?>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="">
                                    <label for="question-32-answers-B">
                                      <input class="with-gap" type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                                      <span>
                                        <?php
                                        echo $row['soal_f'];
                                        }
                                        ?>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-33-answers-A">
                    <input class="with-gap" type="radio" name="question-33-answers" id="question-33-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=3");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-33-answers-B">
                    <input class="with-gap" type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-34-answers-A">
                    <input class="with-gap" type="radio" name="question-34-answers" id="question-34-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=4");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-34-answers-B">
                    <input class="with-gap" type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-35-answers-A">
                    <input class="with-gap" type="radio" name="question-35-answers" id="question-35-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=5");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-35-answers-B">
                    <input class="with-gap" type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-36-answers-A">
                    <input class="with-gap" type="radio" name="question-36-answers" id="question-36-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=6");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-36-answers-B">
                    <input class="with-gap" type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-37-answers-A">
                    <input class="with-gap" type="radio" name="question-37-answers" id="question-37-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=7");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-37-answers-B">
                    <input class="with-gap" type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-38-answers-A">
                    <input class="with-gap" type="radio" name="question-38-answers" id="question-38-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=8");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-38-answers-B">
                    <input class="with-gap" type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-39-answers-A">
                    <input class="with-gap" type="radio" name="question-39-answers" id="question-39-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=9");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-39-answers-B">
                    <input class="with-gap" type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-40-answers-A">
                    <input class="with-gap" type="radio" name="question-40-answers" id="question-40-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=10");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-40-answers-B">
                    <input class="with-gap" type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-41-answers-A">
                    <input class="with-gap" type="radio" name="question-41-answers" id="question-41-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=11");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-41-answers-B">
                    <input class="with-gap" type="radio" name="question-41-answers" id="question-41-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-42-answers-A">
                    <input class="with-gap" type="radio" name="question-42-answers" id="question-42-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=12");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-42-answers-B">
                    <input class="with-gap" type="radio" name="question-42-answers" id="question-42-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-43-answers-A">
                    <input class="with-gap" type="radio" name="question-43-answers" id="question-43-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=13");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-43-answers-B">
                    <input class="with-gap" type="radio" name="question-43-answers" id="question-43-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-44-answers-A">
                    <input class="with-gap" type="radio" name="question-44-answers" id="question-44-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=14");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-44-answers-B">
                    <input class="with-gap" type="radio" name="question-44-answers" id="question-44-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-45-answers-A">
                    <input class="with-gap" type="radio" name="question-45-answers" id="question-45-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_tf WHERE idsoal_tf=15");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_t'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-45-answers-B">
                    <input class="with-gap" type="radio" name="question-45-answers" id="question-45-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_f'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr><hr>
            <!--SOAL JP 1-->
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-46-answers-A">
                    <input class="with-gap" type="radio" name="question-46-answers" id="question-46-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=1");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-46-answers-B">
                    <input class="with-gap" type="radio" name="question-46-answers" id="question-46-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-47-answers-A">
                    <input class="with-gap" type="radio" name="question-47-answers" id="question-47-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=2");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-47-answers-B">
                    <input class="with-gap" type="radio" name="question-47-answers" id="question-47-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-48-answers-A">
                    <input class="with-gap" type="radio" name="question-48-answers" id="question-48-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=3");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-48-answers-B">
                    <input class="with-gap" type="radio" name="question-48-answers" id="question-48-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-49-answers-A">
                    <input class="with-gap" type="radio" name="question-49-answers" id="question-49-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=4");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-49-answers-B">
                    <input class="with-gap" type="radio" name="question-49-answers" id="question-49-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-50-answers-A">
                    <input class="with-gap" type="radio" name="question-50-answers" id="question-50-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=5");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-50-answers-B">
                    <input class="with-gap" type="radio" name="question-50-answers" id="question-50-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-51-answers-A">
                    <input class="with-gap" type="radio" name="question-51-answers" id="question-51-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=6");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-51-answers-B">
                    <input class="with-gap" type="radio" name="question-51-answers" id="question-51-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-52-answers-A">
                    <input class="with-gap" type="radio" name="question-52-answers" id="question-52-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=7");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-52-answers-B">
                    <input class="with-gap" type="radio" name="question-52-answers" id="question-52-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-53-answers-A">
                    <input class="with-gap" type="radio" name="question-53-answers" id="question-53-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=8");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-53-answers-B">
                    <input class="with-gap" type="radio" name="question-53-answers" id="question-53-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-54-answers-A">
                    <input class="with-gap" type="radio" name="question-54-answers" id="question-54-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=9");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-54-answers-B">
                    <input class="with-gap" type="radio" name="question-54-answers" id="question-54-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-55-answers-A">
                    <input class="with-gap" type="radio" name="question-55-answers" id="question-55-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=10");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-55-answers-B">
                    <input class="with-gap" type="radio" name="question-55-answers" id="question-55-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-56-answers-A">
                    <input class="with-gap" type="radio" name="question-56-answers" id="question-56-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=11");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-56-answers-B">
                    <input class="with-gap" type="radio" name="question-56-answers" id="question-56-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-57-answers-A">
                    <input class="with-gap" type="radio" name="question-57-answers" id="question-57-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=12");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-57-answers-B">
                    <input class="with-gap" type="radio" name="question-57-answers" id="question-57-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-58-answers-A">
                    <input class="with-gap" type="radio" name="question-58-answers" id="question-58-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=13");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-58-answers-B">
                    <input class="with-gap" type="radio" name="question-58-answers" id="question-58-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-59-answers-A">
                    <input class="with-gap" type="radio" name="question-59-answers" id="question-59-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=14");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-59-answers-B">
                    <input class="with-gap" type="radio" name="question-59-answers" id="question-59-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <div class="row">
              <div class="col-xs-2">
                <div class="">
                  <label for="question-60-answers-A">
                    <input class="with-gap" type="radio" name="question-60-answers" id="question-60-answers-A" value="A" required checked/>
                    <span>
                      <?php
                      $qry = mysqli_query($db,"SELECT * FROM soal_jp WHERE idsoal_jp=15");
                      while($row = mysqli_fetch_array($qry))
                      {
                      echo $row['soal_j'];
                      ?>
                    </span>
                  </label>
                </div>
                <div class="">
                  <label for="question-60-answers-B">
                    <input class="with-gap" type="radio" name="question-60-answers" id="question-60-answers-B" value="B" />
                    <span>
                      <?php
                      echo $row['soal_p'];
                      }
                      ?>
                    </span>
                  </label>
                </div>
              </div>
            </div>
                              <hr>
            <input type="submit" name="btnSubmit" value="Lihat Hasil" class="btn btn-primary teal right" style="padding-left:100px; padding-right:100px;">
            </form>        </div>
        </div>
        <!--<p>Your grade is: <span id="grade">__</span></p>-->
      </div>
      <!--
      <script>
      document.getElementById("soal").onsubmit=function() {
            group1 = parseInt(document.querySelector('input[name = "group1"]:checked').value);


      	   result = variable + sub + con + ifstate;

      	document.getElementById("grade").innerHTML = result;

      return false; // required to not refresh the page; just leave this here
      } //this ends the submit function

    </script>-->



      <!--Footer-->
        <footer class="red darken-3">
          <div class="layout">
            <ul class="footer-links">
              <li>
                <a href="#" style="color:white;">Admission</a>
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

  </body>
  </html>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
