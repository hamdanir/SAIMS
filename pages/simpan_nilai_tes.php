<?php
//membuat koneksi ke database
include '../koneksi/koneksi.php';

//mengambil data yang sudah dinputkan
// $id_pendaftaran=$_POST['nama_calon_santri'];
$id_pendaftaran=$_POST['id_pendaftaran'];
$nilai_wawancara=$_POST['nilai_wawancara'];
$nilai_ngaji=$_POST['nilai_ngaji'];
$nilai_peminatan=$_POST['nilai_peminatan'];
$keterangan=$_POST['keterangan'];
$a="insert into nilai_tes_masuk values (null,'$id_pendaftaran','$nilai_wawancara', '$nilai_ngaji','$nilai_peminatan','$keterangan')";

//menyimpan data ke database
$simpan=mysqli_query($koneksi,$a);


if($simpan){
    echo "<script>alert('Data Nilai Berhasil Disimpan');window.location='nilai_tes.php'</script>";

}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";

}
?>