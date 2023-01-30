<?php
//membuat koneksi ke database
include '../koneksi/koneksi.php';

//mengambil data yang sudah dinputkan
$nama_calon_santri=$_POST['nama_calon_santri'];
$alamat=$_POST['alamat'];
$tgl_lahir=$_POST['tgl_lahir'];
$jk=$_POST['jk'];
$no_hp_santri=$_POST['no_hp_santri'];
$no_hp_wali=$_POST['no_hp_wali'];
$email=$_POST['email'];

//menyimpan data ke database
$simpan=mysqli_query($koneksi,"insert into pendaftaran values (null,'$nama_calon_santri', '$alamat','$tgl_lahir','$jk','$no_hp_santri','$no_hp_wali','$email','N','Menunggu Konfirmasi')");


if($simpan){
    echo "<script>alert('Data Pendaftaran Berhasil Disimpan');window.location='tambah_pendaftaran.php'</script>";

}else{
    echo "<script>alert('Data gagal Ditambah');history.go(-1);</script>";

}
?>