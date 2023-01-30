<?php
include '../koneksi/koneksi.php';

$id=$_GET['id'];

$hapus = mysqli_query($koneksi,"delete from pengguna where id_pengguna='$id'");

if($hapus){
    echo "<script>alert('Data Berhasil Dihapus');window.location='pengguna.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>