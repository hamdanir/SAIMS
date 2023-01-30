<?php
include '../koneksi/koneksi.php';
$id_kegiatan=$_POST['id_kegiatan'];
$nama_kegiatan=$_POST['nama_kegiatan'];
$keterangan=$_POST['keterangan'];

$update = mysqli_query($koneksi,"UPDATE kegiatan SET nama_kegiatan='$nama_kegiatan',keterangan='$keterangan' where id_kegiatan='$id_kegiatan'");

if($update){
    echo "<script>alert('Data Kegiatan Berhasil Disimpan');window.location='kegiatan.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>