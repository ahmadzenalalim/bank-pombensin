<?php
//Koneksi ke database
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241124_dandi_pelanggan");
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
    <title>Tambah pelanggan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" method="post">
        <label for="nama">nama : </label>
        <input type="text" name="nama" required ><br>

        <label for="jenis_kendaraan">jenis kendaraan: </label>
        <input type="text" name="jenis_kendaraan" required ><br>

        <label for="no_polisi">No polisi : </label>
        <input type="text" name="no_polisi" required ><br>

        <label for="tanggal_terdaftar">tanggal terdaftar : </label>
        <input type="text" name="tanggal_terdaftar" required ><br>

        <label for="alamat">alamat : </label>
        <input type="text" name="alamat" required ><br>

        <label for="email">email : </label>
        <input type="text" name="email" required ><br>
        
        <button type="submit" name="submit">Tambah Data</button>
    </form>

</body>
</html>