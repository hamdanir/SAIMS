<?php
include '../koneksi/koneksi.php';

$id=$_POST['id_presensi'];
$id_kegiatan=$_POST['id_kegiatan'];

$hapus = mysqli_query($koneksi,"delete from presensi_kegiatan where id_presensi='$id'");



if($hapus){
    echo "<script>alert('Presensi Berhasil dibatalkan');window.location='presensi_kegiatan.php?id=$id_kegiatan'</script>";
}else{
    echo "<script>alert('Data gagal Dibatalkan');history.go(-1);</script>";
}
?>