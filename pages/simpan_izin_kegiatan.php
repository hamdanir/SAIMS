<?php
include '../koneksi/koneksi.php';

$NIS=$_POST['NIS'];
$id_kegiatan=$_POST['id_kegiatan'];
$tgl_ijin=$_POST['tgl_ijin'];
$keterangan=$_POST['keterangan'];
// $id_admin=$_POST['id_admin'];

$simpan = mysqli_query($koneksi,"insert into perizinan_kegiatan values (null, '$NIS','$id_kegiatan','$tgl_ijin', '$keterangan', null)");
// $a = "insert into perizinan_kegiatan values (null, '$NIS','$tgl_ijin', '$keterangan', null)";
// echo $a;
if($simpan){
    echo "<script>alert('Data Berhasil Disimpan');window.location='beri_izin_kegiatan.php?id=$id_kegiatan'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>