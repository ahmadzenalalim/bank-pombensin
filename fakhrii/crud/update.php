<?php
require 'funcdb.php';
$id_nasabah = $_GET["id_nasabah"];
$nasabah = query("SELECT * FROM 23241199_fakhri_nasabah WHERE id_nasabah = $id_nasabah")[0];
if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
              </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
    <form action="" method="post">
        <input type="hidden" name="id_nasabah" value="<?= $nasabah["id_nasabah"]?>">
    
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required value="<?php echo $nasabah['nama']?>"><br>

        <label for="nik_ktp">Nik ktp: </label>
        <input type="text" name="nik_ktp" required value="<?php echo $nasabah['nik_ktp']?>"><br>

        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" required value="<?php echo $nasabah['alamat']?>"><br>

        <label for="no_telp">No telp : </label>
        <input type="text" name="no_telp" required value="<?php echo $nasabah['no_telp']?>"><br>

        <label for="tanggal_lahir">Tanggal Lahir : </label>
        <input type="text" name="tanggal_lahir" required value="<?php echo $nasabah['tanggal_lahir']?>"><br>

        <label for="tanggal_daftar">Tanggal Daftar : </label>
        <input type="text" name="tanggal_daftar" required value="<?php echo $nasabah['tanggal_daftar']?>"><br>
        
        <button type="submit" name="submit">Update</button>
    </form>
    </center>
</body>
</html>