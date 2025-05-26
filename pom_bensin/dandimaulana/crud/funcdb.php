<?php
$koneksi=mysqli_connect("localhost","root","","23241124_dandi_pg");


//Untuk Memfungsikan Tambah Data Dalam DataBase
function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["jenis_kendaraan"]);
    $no_telepon = htmlspecialchars($data["no_polisi"]);
    $jenis_kelamin = htmlspecialchars($data["tanggal_terdaftar"]);
    $email = htmlspecialchars($data["alamat"]);
    $nik_ktp = htmlspecialchars($data["email"]);
    
    
    //Query Insert Data
    $query = "INSERT INTO 23241124_dandi_pelanggan VALUES ('','$nama','$jenis_kendaraan','$no_polisi','$tanggal_terdaftar','$alamat','$email')";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}


//Untuk Memfungsikan Hapus Data Dalam DataBase
function hapus($id_pelanggan){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM 23241124_dandi_pelanggan WHERE id_pelanggan = $id_pelanggan");
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
    $id_pelanggan = htmlspecialchars($data["id_pelanggan"]);
    $nama = htmlspecialchars($data["nama"]);
    $Jenis_kendaraan = htmlspecialchars($data["jenis_kendaraan"]);
    $no_polisi = htmlspecialchars($data["no_polisi"]);
    $tanggal_terdaftar = htmlspecialchars($data["tanggal_terdaftar"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    
    //Query Update Data
    $query = "UPDATE 23241124_dandi_pelanggan SET 
    nama='$nama',
    jenis_kendaraan='$jenis_kendaraan',
    no_polisi='$no_polisi',
    tanggal_terdaftar='$tanggal_terdaftar',
    alamat='$alamat',
    email='$email'
    WHERE id_pelanggan=$id_pelanggan";


    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = "SELECT * FROM 23241124_dandi_pelanggan
    WHERE 
    nama LIKE '%$keyword%' OR
    id_pelanggan = '$keyword'";

    return query($query);
    

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