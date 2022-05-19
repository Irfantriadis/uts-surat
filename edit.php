<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <title>Edit Surat - Aplikasi Surat</title>
</head>
<body>
        <div class ="container">
        <center><h1>Aplikasi Surat</h1></center>
        <hr />
	<br/>
	<a href="index.php" class ="btn btn-info" name="bsimpan">KEMBALI</a>
	<br/>
	<br/>
        <div class="card mt-4">
        <div class="card-header bg-info text-white">
	<h5>Edit Data Surat</h5>
        </div>
 
	<?php
	include 'koneksi.php';
        $no = 1;
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from surat where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
                <div class="card-body">
		<form method="post" action="update.php">
                <div class="form-group">
                    <!-- <label for="tanggal"></label><br> -->
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="hidden" id="tanggal" name="tanggal" value="<?php echo $d['tanggal'] ?>">
                <div class="form-group">
                    <label for="pengirim">Pengirim :</label><br>
                    <input type="text" id="pengirim" name="pengirim" value="<?php echo $d['pengirim'] ?>"><br>
                    <div class="form-group">
                    <label for="penerima">Penerima :</label><br>
                    <input type="text" id="penerima" name="penerima" value="<?php echo $d['penerima'] ?>"><br>
                    <br>
                    <div class="form-group">
                    <label for="judulsurat">Judul Surat :</label><br>
                    <input type="text" id="judulsurat" name="judulsurat" value="<?php echo $d['judulsurat'] ?>"><br>
                    <br>
                    <div class="form-group">
                    <label for="isisurat">Masukan Isi Surat Anda :</label><br>
                    <input type="text" id="isisurat" name="isisurat" style="height:120px; width:450px;" value="<?php echo $d['isisurat'] ?>"><br>
                    <br>
                    </div>
                    <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
                </form> 
			<?php } ?>
<script type="text/javascrip" src ="bootstrap.min.js"></script>
<hr />
    <center>&copy Irfan Triadi Saputra 20090017 | UTS APLIKASI SURAT</center>
    <hr />
</body>
</html>