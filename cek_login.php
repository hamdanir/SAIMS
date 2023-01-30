<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi/koneksi.php';
// menangkap data yang dikirim dari form

// print_r($_POST);
// exit();
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from pengguna where
nama_pengguna='$username' and password='$password'");

// $a="select * from db_pengguna where
// username='$username' and password='$password'";
// echo $a;
// exit();

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
$_SESSION['username'] = $username;
$_SESSION['id_pengguna'] = $id_pengguna;
$_SESSION['status'] = "login";
header("location:pages/dashboard.php");
}else{
header("location:index.php?pesan=gagal");
}
?>