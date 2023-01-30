<?php
include '../koneksi/koneksi.php';

$id=$_GET['id'];

$hapus = mysqli_query($koneksi,"delete from perizinan_pulang where id_perizinan='$id'");

if($hapus){
    echo "<script>alert('Data Berhasil Dihapus');window.location='santri_izin.php'</script>";
}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";
}
?>