<?php
//Koneksi ke database
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241199_fakhri_nasabah");
//Mengecek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //Mengecek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan!');
        location.href='index.php';
        </script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Nasabah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required ><br>

        <label for="nik_ktp">Nik ktp: </label>
        <input type="text" name="nik_ktp" required ><br>

        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" required ><br>

        <label for="no_telp">No Telepon : </label>
        <input type="text" name="no_telp" required ><br>

        <label for="tanggal_lahir">Tanggal Lahir : </label>
        <input type="text" name="tanggal_lahir" required ><br>

        <label for="tanggal_daftar">Tanggal Daftar : </label>
        <input type="text" name="tanggal_daftar" required ><br>
        
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    </center>
</body>
</html>