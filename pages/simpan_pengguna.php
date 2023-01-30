<?php
include '../koneksi/koneksi.php';
// print_r($_POST);

$nama_pengguna=$_POST['nama_pengguna'];
$level=$_POST['level'];
$email_pengguna=$_POST['email_pengguna'];
$password=$_POST['password'];
$foto=$_POST['foto'];

$simpan = mysqli_query($koneksi,"insert into pengguna values (null, '$nama_pengguna','$level','$email_pengguna','$password','$foto')");

if($simpan){
    echo "<script>alert('Data Kegiatan Berhasil Disimpan');window.location='pengguna.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>