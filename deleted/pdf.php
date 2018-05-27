<?php
//koneksi ke database
include ("inc/koneksi.php");

//mengambil data dari tabel
$sql=mysql_query("SELECT * FROM tbpenghuni ORDER BY id_penghuni");
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
	array_push($data, $row);
}

//mengisi judul dan header tabel
$judul = "DATA PENGHUNI";
$header = array(
array("label"=>"ID", "length"=>30, "align"=>"L"),
array("label"=>"Nama Penghuni", "length"=>50, "align"=>"L"),
array("label"=>"Jenis Kelamin", "length"=>30, "align"=>"L"),
array("label"=>"Program Studi", "length"=>30, "align"=>"L"),
array("label"=>"Nomor HP", "length"=>30, "align"=>"L"),
);

//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();

//tampilan Judul Laporan
$pdf->SetFont('Arial','B','16'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,20, $judul, '0', 1, 'C');

//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(139, 69, 19); //warna dalam kolom header
$pdf->SetTextColor(255); //warna tulisan putih
$pdf->SetDrawColor(222, 184, 135); //warna border
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

//menampilkan data table
$pdf->SetFillColor(245, 222, 179); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}

//output file pdf
$pdf->Output();
?>
