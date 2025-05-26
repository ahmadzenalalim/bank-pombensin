<?php
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241124_dandi_pelanggan");

$id_pelanggan = $_GET['id_pelanggan'];

if (hapus($id_pelanggan) > 0){
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    location.href='index.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    location.href='index.php';
    </script>;
    ";
}


?>