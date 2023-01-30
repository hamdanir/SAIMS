<?php
include '../koneksi/koneksi.php';

$id=$_GET['id'];

$hapus = mysqli_query($koneksi,"delete from pendaftaran where id_pendaftaran='$id'");
$hapus2 = mysqli_query($koneksi,"delete from santri where id_pendaftaran='$id'");

if($hapus){
    echo "<script>alert('Santri Berhasil Dihapus');window.location='santri.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>