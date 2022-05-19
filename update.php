<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$judulsurat = $_POST['judulsurat'];
$isisurat = $_POST['isisurat'];
 
// update data ke database
mysqli_query($koneksi,"update surat set tanggal='$tanggal', pengirim='$pengirim', penerima='$penerima', judulsurat='$judulsurat', isisurat='$isisurat' where id='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>