<?php
include '../koneksi/koneksi.php';

$NIS=$_POST['NIS'];
$id_kegiatan=$_POST['id_kegiatan'];
$tanggal=date('Y-m-d');
// $id_admin=$_POST['id_admin'];

$simpan = mysqli_query($koneksi,"insert into presensi_kegiatan values (null, '$NIS','$id_kegiatan','$tanggal')");
// $a = "insert into presensi_kegiatan values (null, '$NIS','$id_kegiatan','$tanggal')";
// echo $a;
// exit();
if($simpan){
    echo "<script>alert('Data Berhasil Disimpan');window.location='presensi_kegiatan.php?id=$id_kegiatan'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>