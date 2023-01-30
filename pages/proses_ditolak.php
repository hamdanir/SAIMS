<?php
//membuat koneksi ke database
include '../koneksi/koneksi.php';
$id_pendaftaran='$_GET[id]';

$a="update pendaftaran set status_seleksi='N', status='Ditolak' where id_pendaftaran='$_GET[id]'";

//menyimpan data ke database
$update=mysqli_query($koneksi,$a);




if($update){
    echo "<script>alert('Data Santri Berhasil Ditolak');window.location='nilai_tes.php'</script>";

}else{
    echo "<script>alert('Data Santri Ditambah');history.go(-1);</script>";

}
?>