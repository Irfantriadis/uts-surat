<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <title>Aplikasi Surat</title>
    </head>
    <body>
        <div class ="container">
        <center><h1>Aplikasi Surat</h1></center>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-info text-white">
        <h5>Berikut Daftar Surat Terkirim</h5>
        </div>

        <div class="card-body">
        <table class = "table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th>No Surat</th>
                    <th style="height:60px; width:120px">Tanggal Surat</th>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th style="height:60px; width:200px">Judul Surat</th>
                    <th>Isi Surat</th>
                    <th style="height:60px; width:170px">Opsi</th>
                </tr>
            </thead>
            <?php 
		    include 'koneksi.php';
		    $no = 1;
		    $data = mysqli_query($koneksi,"select * from surat");
		    while($d = mysqli_fetch_array($data)){
		    	?>
		    	<tr>
		    		<td><?php echo $no++; ?></td>
		    		<td><?php echo $d['tanggal']; ?></td>
		    		<td><?php echo $d['pengirim']; ?></td>
		    		<td><?php echo $d['penerima']; ?></td>
                    <td><?php echo $d['judulsurat']; ?></td>
		    		<td><?php echo $d['isisurat']; ?></td>
		    		<td>
		    			<a class ="btn btn-info" name="bsimpan" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
		    			<a class ="btn btn-info" name="bsimpan" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
		    		</td>
			    </tr>
			<?php 
		}
		?>
        </table>
        <p>Buat Surat Baru?</p>
        <a href="tambah.php"><button id="tambah" class ="btn btn-info" name="bsimpan">Buat Surat</button></a>
    <br>
    <br>
    <hr />
    <center>&copy Irfan Triadi Saputra 20090017 | UTS APLIKASI SURAT</center>
    <hr />
    </body>
</html>