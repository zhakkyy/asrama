include ("koneksi.php");
$qry = mysqli_query($db,"SELECT * FROM tbpenghuni");
$no = 1;
$array=0;
while($row = mysqli_fetch_array($qry))
{
  $digittengah = substr($row['tipe_kepribadian'],1,2);

  if($digittengah=="ST"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="ST"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="SF"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="NT"){
    array_push($array, $row['nama_penghuni']);
    print_r($array);
    header('Location:../coba.php');
}else{
  if($digittengah=="SF"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="SF"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="ST"){
    array_push($array, $row['nama_penghuni']);

  }elseif ($digittengah=="NF"){
    array_push($array, $row['nama_penghuni']);
    print_r($array);
}else{
  echo "salah";
}

}
$no++;
}
