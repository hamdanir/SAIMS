<?php
include '../koneksi/koneksi.php';

$nama_kegiatan=$_POST['nama_kegiatan'];
$keterangan=$_POST['keterangan'];

$simpan = mysqli_query($koneksi,"insert into kegiatan values (null, '$nama_kegiatan','$keterangan')");

if($simpan){
    echo "<script>alert('Data Kegiatan Berhasil Disimpan');window.location='kegiatan.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>