<?php
include '../koneksi/koneksi.php';

$id=$_GET['id'];

$hapus = mysqli_query($koneksi,"delete from kegiatan where id_kegiatan='$id'");

if($hapus){
    echo "<script>alert('Data Berhasil Dihapus');window.location='kegiatan.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>