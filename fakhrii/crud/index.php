<?php
//Koneksi ke database
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241199_fakhri_nasabah");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tampilan Informasi Rental</title>
</head>
<body>
    <h1 class="title">Daftar Rent</h1>
    <center>
    <table border="1" cellpadding="10" cellspacing="3">
        <tr align="center" style="background-color: #f2f2f2; font-weight: bold;">
            <td>Id Nasabah</td>
            <td>Nama</td>
            <td>Nik ktp</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>Tanggal Lahir</td>
            <td>Tanggal Daftar</td>
        
        </tr>

        
        <!-- Isi yang ada di db -->
        <?php foreach ($result as $nasabah) {
            # code...
        ?>
        <tr align="center">
            <td ><?php echo $nasabah["id_nasabah"]?></td>
            <td><?php echo $nasabah["nama"]?></td>
            <td><?php echo $nasabah["nik_ktp"]?></td>
            <td><?php echo $nasabah["alamat"]?></td>
            <td><?php echo $nasabah["no_telp"]?></td>
            <td><?php echo $nasabah["tanggal_lahir"]?></td>
            <td><?php echo $nasabah["tanggal_daftar"]?></td>
            <td>
                <a href="hapus.php?id_nasabah=<?php echo $nasabah["id_nasabah"] ?>"onclick="return confirm('Yakin Akan Di hapus <?php echo $nasabah['nama']?>')">Hapus</a> |
                <a href="update.php?id_nasabah=<?php echo $nasabah["id_nasabah"] ?>"onclick="return confirm('Yakin Akan Di ubah <?php echo $nasabah['nama']?>')">Update</a>
            </td>
        </tr>
        <?php }?>
    </table>
    </center>
    <a href="tambah.php" class="tambah_data">Tambah Data</a>
</body>
</html>