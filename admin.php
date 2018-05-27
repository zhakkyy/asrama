<!DOCTYPE html>
<?php
 session_start();
  include ("inc/koneksi.php");
  error_reporting(0);
  try{
    $dbcon=new PDO("mysql:host={$hostname};dbname={$db_name}",$username,$password);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $ex){
    die($ex->getMessage());
  }
  $stmt=$dbcon->prepare("SELECT * FROM tbhasiltes");
  $stmt->execute();
  $json=[];
  $json2=[];
  $amounts= mysqli_query($db,"SELECT `tipe_kepribadian`, count(tipe_kepribadian) FROM `tbhasiltes` GROUP by `tipe_kepribadian`");

  while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $json[]=$tipe_kepribadian;
    $json2[]=(int)$amounts;
  }

?>
</style>
<html>
<head>
  <title>Admin Page</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href='css/materialize.css'>
  <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--Script untuk Chart-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
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
      <li class="active"><a href="#"><i class="material-icons">home</i>Home</a></li>
      <li class="white"><a href="admin_uploadfile.php"><i class="material-icons">file_upload</i>Upload File</a></li>
      <!-- <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
      </script> -->
      <li class="white"><a href="admin_soal.php"><i class="material-icons">assignment</i>Soal MBTI</a></li>
      <li class="white"><a href="admin_datagedung.php"><i class="material-icons">business</i>Data Gedung</a></li>
      <li class="white"><a href="admin_datakamar.php"><i class="material-icons">airline_seat_individual_suite</i>Data Kamar</a></li>
      <li class="white"><a href="admin_datapenghuni.php"><i class="material-icons">people</i>Data Penghuni</a></li>
      <li class="white"><a href="inc/admin_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>

  <!--Content Area-->
  <!--Content Tetap Ditengah-->
    <div class="container">
      <!--Padding Atas Content-->
      <div class="section no-pad-bot" id="index-banner">
        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div> <!--Untuk space-->
        <!--Info Asrama-->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <img src="images/logo-asrama.jpg" class="info-box-icon">
              <div class="info-box-content">
                <span class="info-box-text">Gedung Asrama</span>
        						<?php
                      $jumlah_gedung = 0;
        						  $qry = mysqli_query($db,"SELECT COUNT(id_gedung) FROM tbgedung");
        						        while($row = mysqli_fetch_array($qry)){
                              $jumlah_gedung = $row[0];
                            }
                		?>
                <span class="info-box-number"><?php echo $jumlah_gedung;?><small> Gedung</small></span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <img src="images/logo-kamar.jpg" class="info-box-icon">
              <div class="info-box-content">
                <span class="info-box-text">Kamar Asrama</span>

                    <?php
                      $jumlah_kamar = 0;
                    	$qry = mysqli_query($db,"SELECT COUNT(id_kamar) FROM tbkamar");
                    				while($row = mysqli_fetch_array($qry)){
                              $jumlah_kamar = $row[0];
                            }
                    ?>
                <span class="info-box-number"><?php echo $jumlah_kamar;?><small> Kamar</small></span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <img src="images/logo-penghuni.jpg" class="info-box-icon">
              <div class="info-box-content">
                <span class="info-box-text">Penghuni Asrama</span>
                <?php
                  $jumlah_penghuni = 0;
                  $qry = mysqli_query($db,"SELECT COUNT(id_penghuni) FROM tbpenghuni");
                        while($row = mysqli_fetch_array($qry)){
                          $jumlah_penghuni = $row[0];
                        }
                ?>
                <span class="info-box-number"><?php echo $jumlah_penghuni;?><small> Mahasiswa</small></span>
              </div>
            </div>
          </div>
        </div>

    <!--Chart Personalites-->
    <div class="row">
      <div class="col s12">
        <div class="card"> <!--warna-->
          <div class="card-content black-text">
            <div class="chart-responsive">
              <canvas id="pieChart" height="100"></canvas>
              <script type="text/javascript">
                var pieChart = document.getElementById('pieChart').getContext('2d');
                var dataChart = new Chart (pieChart,{
                  type:'pie',
                  data:{
                    labels: <?php echo json_encode($json);?>,
                    datasets:[{
                      backgroundColor:[
                      'rgba(105, 105, 105, 0.6)',
                      'rgba(220, 220, 220, 0.6)',
                      'rgba(210, 180, 140, 0.6)',
                      'rgba(245, 222, 179, 0.6)',
                      'rgba(95, 158, 160, 0.6)',
                      'rgba(72, 209, 204, 0.6)',
                      'rgba(173, 216, 230, 0.6)',
                      'rgba(102, 205, 170, 0.6)',
                      'rgba(143, 188, 139, 0.6)',
                      'rgba(107, 142, 35, 0.6)',
                      'rgba(144, 238, 144, 0.6)',
                      'rgba(147, 112, 2019, 0.6)',
                      'rgba(255, 218, 185, 0.6)',
                      'rgba(255, 160, 122, 0.6)',
                      'rgba(255, 182, 193, 0.6)',
                      'rgba(205, 92, 92, 0.6)'
                    ],
                      data: <?php echo json_encode($json2);?>,
                    }]
                  },
                  options: {
                    title:{
                    display:true,
                    text:'16 Personalities Student of Telkom University',
                    textSize:25
                  },
                  legend:{
                    position:'right',
                    labels:{
                      fontColor:'#000'
                    }
                  }
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
    </main>


</body>
</html>
