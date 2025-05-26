<?php
//Koneksi ke database
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241124_dandi_pelanggan");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tampilan POM BENSIN</title>
</head>
<body>
    <h1 class="title">Daftar POM BENSIN</h1>
    <center>
    <table border="1" cellpadding="10" cellspacing="3">
        <tr align="center" style="background-color: #f2f2f2; font-weight: bold;">
            <td>Id Pelanggan</td>
            <td>Nama</td>
            <td>Jenis_kendaraan</td>
            <td>No_polisi</td>
            <td>Tanggal_terdaftar</td>
            <td>Alamat</td>
            <td>Email</td>
        </tr>

        
        <!-- Isi yang ada di db -->
        <?php foreach ($result as $pelanggan) {
            # code...
        ?>
        <tr align="center">
            <td ><?php echo $pelanggan["id_pelanggan"]?></td>
            <td><?php echo $pelanggan["nama"]?></td>
            <td><?php echo $pelanggan["jenis_kendaraan"]?></td>
            <td><?php echo $pelanggan["no_polisi"]?></td>
            <td><?php echo $pelanggan["tanggal_terdaftar"]?></td>
            <td><?php echo $pelanggan["alamat"]?></td>
            <td><?php echo $pelanggan["email"]?></td>
            <td>
                <a href="hapus.php?id_pelanggan=<?php echo $pelanggan["id_pelanggan"] ?>"onclick="return confirm('Yakin Akan Di hapus <?php echo $pelanggan['nama']?>')">Hapus</a> |
                <a href="update.php?id_pelanggan=<?php echo $pelanggan["id_pelanggan"] ?>"onclick="return confirm('Yakin Akan Di ubah <?php echo $pelanggan['nama']?>')">Update</a>
            </td>
        </tr>
        <?php }?>
    </table>
    </center>
    <a href="tambah.php" class="tambah_data">Tambah Data</a>
</body>
</html>