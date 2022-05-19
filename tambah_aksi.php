<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$judulsurat = $_POST['judulsurat'];
$isisurat = $_POST['isisurat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into surat values('','$tanggal','$pengirim','$penerima','$judulsurat','$isisurat')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>