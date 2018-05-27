<?php
    session_start();
    include ("koneksi.php");
    ob_start();
    include '../user_hasiltes.php';
    ob_end_clean();
    $_SESSION['username'];
    $qry="SELECT * FROM tbpenghuni WHERE username ='".$_SESSION['username']."' ";
    $result = mysqli_query($db, $qry);
    $row = mysqli_fetch_assoc($result);
    $id_penghuni = $row['id_penghuni'];
    echo $id_penghuni;
    echo $hasilT;
    echo $hasilF;
    echo $hasil;


    // $insert = mysqli_query($db,"INSERT INTO tbhasiltes (id_penghuni, nilai_soal_e, nilai_soal_i, nilai_soal_s, nilai_soal_n, nilai_soal_t, nilai_soal_f, nilai_soal_j, nilai_soal_p, tipe_kepribadian) VALUES ($id_penghuni, $hasilE, $hasilI, $hasilS, $hasilN, $hasilT, $hasilF, $hasilJ, $hasilP, $hasil)");
    //
    // if($insert){
    // echo("<script>alert('Data Berhasil Diinput!!');window.location.href='user_tesmbti.php';</script>");
    // }else{
    //
    // echo("<script>alert('Data Gagal Diinput !!');window.location.href='../user_tesmbti.php';</script>");
    // echo("Error description: " . mysqli_error($db));
    // }

    //*system upload

?>
