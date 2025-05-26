<?php
require 'funcdb.php';
$id_pelanggan = $_GET["id_pelanggan"];
$pelanggan = query("SELECT * FROM 23241124_dandi_pelanggan WHERE id_pelanggan = $id_pelanggan")[0];
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
        <input type="hidden" name="id_pelanggan" value="<?= $pelanggan["id_pelanggan"]?>">
    
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required value="<?php echo $pelanggan['nama']?>"><br>

        <label for="jenis_kendaraan">jenis kendaraan: </label>
        <input type="text" name="jenis_kendaraan" required value="<?php echo $pelanggan['jenis_kendaraan']?>"><br>

        <label for="no_polisi ">No polisi : </label>
        <input type="text" name="no_polisi " required value="<?php echo $pelanggan['no_polisi']?>"><br>

        <label for="tanggal_terdaftar">tanggal_terdaftar: </label>
        <input type="text" name="tanggal_terdaftar" required value="<?php echo $pelanggan['tanggal_terdaftar']?>"><br>

        <label for="alamat">alamat : </label>
        <input type="text" name="alamat" required value="<?php echo $pelanggan['alamat']?>"><br>

        <label for="email">email : </label>
        <input type="text" name="email" required value="<?php echo $pelanggan['email']?>"><br>
        
        <button type="submit" name="submit">Update</button>
    </form>
    </center>
</body>
</html>