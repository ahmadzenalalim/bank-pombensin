<?php
$koneksi=mysqli_connect("localhost","root","","23241199_fakhri_pg");


//Untuk Memfungsikan Tambah Data Dalam DataBase
function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nik_ktp = htmlspecialchars($data["nik_ktp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tanggal_daftar = htmlspecialchars($data["tanggal_daftar"]);
    
    
    //Query Insert Data
    $query = "INSERT INTO 23241199_fakhri_nasabah VALUES ('','$nama','$nik_ktp','$alamat','$no_telp','$tanggal_lahir','$tanggal_daftar')";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}


//Untuk Memfungsikan Hapus Data Dalam DataBase
function hapus($id_nasabah){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM 23241199_fakhri_nasabah WHERE id_nasabah = $id_nasabah");
    return mysqli_affected_rows($koneksi);
}

//Untuk Memfungsikan Update Data Dalam DataBase
function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function update($data){
    global $koneksi;
    $id_nasabah = htmlspecialchars($data["id_nasabah"]);
    $nama = htmlspecialchars($data["nama"]);
    $nik_ktp = htmlspecialchars($data["nik_ktp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tanggal_daftar = htmlspecialchars($data["tanggal_daftar"]);
    
    //Query Update Data
    $query = "UPDATE 23241199_fakhri_nasabah SET 
    nama='$nama',
    nik_ktp='$nik_ktp',
    alamat='$alamat',
    no_telp='$no_telp',
    tanggal_lahir='$tanggal_lahir',
    tanggal_daftar='$tanggal_daftar'
    WHERE id_nasabah=$id_nasabah";


    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function login($username, $password){
    global $koneksi;
    $username_esc = mysqli_real_escape_string($koneksi, $username);
    $query = "SELECT * FROM login WHERE username= '$username_esc' LIMIT 1";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result)===1) {
        $user = mysqli_fetch_assoc($result);
        if ($password==$user['password']) {
            return $user;
        }
    }
    return false;
}

?>