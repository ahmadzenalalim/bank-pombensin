<?php
require "funcdb.php";
$result=mysqli_query($koneksi,"SELECT * FROM 23241199_fakhri_nasabah");

$id_nasabah = $_GET['id_nasabah'];

if (hapus($id_nasabah) > 0){
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