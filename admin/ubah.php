<?php

//panggil file koneksi
require "functions.php";

//ambil data id di URL
$id=$_GET["id"];

//query data
$siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["ubah"])) {

//cek apakah Data Berhasil Ditambahkan
    if(ubah($_POST) > 0) {
        echo"<script>
        alert('Data Berhasil Diubah');
        document.location.href='index.php';
        </script>";
    }else {
        echo"<script>
        alert('Data Gagal Diubah');
        document.location.href='index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
</head>
<body>

<h1>Halaman Ubah Data</h1>

<?php while($data = mysqli_fetch_assoc($siswa)) : ?>

<form action="" method="post" enctype="multipart/form-data">


<table border="1">
<input type="hidden" name="id" value="<?= $data["id"];?>">
<input type="hidden" name="keterangan" value="<?= $data["keterangan"]; ?>">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Hadir</th>
            <th>Izin</th>
            <th>Sakit</th>
            <th>Alpa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="nama" require value="<?= $data["nama"]; ?>"></td>
            <td><input type="radio" name="keterangan" value="Hadir"></td>
            <td><input type="radio" name="keterangan" value="Izin"></td>
            <td><input type="radio" name="keterangan" value="Sakit"></td>
            <td><input type="radio" name="keterangan"  value="Alpa"></td>
        </tr>
    </tbody>
</table>

<button type="submit" name="ubah">Ubah</button>
<button type="reset">Hapus</button>

</form>

<?php endwhile; ?>
    
</body>
</html>