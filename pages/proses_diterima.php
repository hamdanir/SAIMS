<?php
//membuat koneksi ke database
include '../koneksi/koneksi.php';
$id_pendaftaran='$_GET[id]';

$a="update pendaftaran set status_seleksi='Y', status='Diterima' where id_pendaftaran='$_GET[id]'";

//menyimpan data ke database
$update=mysqli_query($koneksi,$a);

$b="insert into santri values(null, '$_GET[id]',null,null )";

//menyimpan data ke database
$simpan=mysqli_query($koneksi,$b);


if($simpan){
    echo "<script>alert('Data Santri Berhasil Disimpan');window.location='nilai_tes.php'</script>";

}else{
    echo "<script>alert('Data Santri Ditambah');history.go(-1);</script>";

}
?>