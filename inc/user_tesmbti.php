<?php
session_start();
  include ("koneksi.php");
  $_SESSION['username'];
  $qry1="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
  $result1 = mysqli_query($db, $qry1);
  $row1 = mysqli_fetch_assoc($result1);
  $id_penghuni = $row1['id_penghuni'];


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


//nilai perbandingan 1 dimensi
  if ($persenE>$persenI) { //E vs I
    $hasil1="E";
    // echo $hasil1;
    // echo "E";
  } else {
    $hasil1="I";
    // echo $hasil1;
    // echo "I";
  }

   if ($persenS>$persenN) { //S vs N
     $hasil2="S";
     // echo $hasil2;
     // echo "S";
   } else {
     $hasil2="N";
     // echo $hasil2;
     // echo "N";
   }


    if ($persenT>$persenF) { //T vs F
      $hasil3="T";
      // echo $hasil3;
      // echo "T";
    } else {
      $hasil3="F";
      // echo $hasil3;
      // echo "F";
    }


     if ($persenJ>$persenP) { //J vs P
       $hasil4="J";
       // echo $hasil4;
       // echo "J";
     } else {
       $hasil4="P";
       // echo $hasil4;
       // echo "P";
     }

      $hasil=$hasil1.$hasil2.$hasil3.$hasil4;
      // echo $hasil;




      //insert ignore ke database
      $sql4="INSERT IGNORE INTO tbhasiltes (id_penghuni, nilai_e, nilai_i, nilai_s, nilai_n, nilai_t, nilai_f, nilai_j, nilai_p, tipe_kepribadian) VALUES ($id_penghuni, $totalE, $totalI, $totalS, $totalN, $totalT, $totalF, $totalJ, $totalP, '$hasil')";
      $result4 = mysqli_query($db, $sql4);

      header('Location: ../user_hasiltes.php');
    ?>
