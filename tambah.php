<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
        <title>Buat Surat - Aplikasi Surat</title>
    </head>
    <body>
        <div class ="container">
        <center><h1>Aplikasi Surat</h1></center>
        <hr />
        <div class="card mt-4">
        <div class="card-header bg-info text-white">
        <h5>Buat Surat</h5>
        </div>

        <div class="card-body">
        <p>Isi semua yang diperlukan dibawah!</p>
        <form method="post" action="tambah_aksi.php">
            <!-- <div class="form-group">
            <label for="tanggal">Tanggal Surat :</label><br>
            <input type="date" id="tanggal" name="tanggal"><br>
            <br> -->
            <div class="form-group">
            <label for="pengirim">Pengirim :</label><br>
            <input type="text" id="pengirim" name="pengirim"><br>
            <div class="form-group">
            <label for="penerima">Penerima :</label><br>
            <input type="text" id="penerima" name="penerima"><br>
            <br>
            <div class="form-group">
            <label for="judulsurat">Judul Surat :</label><br>
            <input type="text" id="judulsurat" name="judulsurat"><br>
            <br>
            <div class="form-group">
            <label for="isisurat">Masukan Isi Surat Anda :</label><br>
            <input type="text" id="isisurat" name="isisurat" style="height:120px; width:450px;"><br>
            <br>
            </div>
            <input type="submit" value="Submit" class ="btn btn-info" name="bsimpan">
        </form> 
        <br>
        <a href="index.php">Kembali Ke Halaman Utama</a>
        <script type="text/javascrip" src ="bootstrap.min.js"></script>
        <hr />
    <center>&copy Irfan Triadi Saputra 20090017 | UTS APLIKASI SURAT</center>
    <hr />
    </body>
</html>