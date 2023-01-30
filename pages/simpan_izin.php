<?php
include '../koneksi/koneksi.php';

$NIS=$_POST['NIS'];
$tgl_mulai=$_POST['tgl_mulai'];
$tgl_selesai=$_POST['tgl_selesai'];
$tgl_mulai=$_POST['tgl_mulai'];
$keterangan=$_POST['keterangan'];
// $id_admin=$_POST['id_admin'];

$simpan = mysqli_query($koneksi,"insert into perizinan_pulang values (null, '$NIS','$tgl_mulai', '$tgl_selesai', '$keterangan',null, null)");

if($simpan){
    echo "<script>alert('Data Berhasil Disimpan');window.location='perizinan_pulang.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>