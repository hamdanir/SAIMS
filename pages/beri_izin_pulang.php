<?php
session_start();
if($_SESSION['status']!="login"){
header("location:../index.php?pesan=belum_login");
}
include '../koneksi/koneksi.php';
include 'header.php';
$a="SELECT * FROM pendaftaran p JOIN santri s on p.id_pendaftaran=s.id_pendaftaran WHERE s.NIS='$_GET[id]'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>


            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Perizinan Pulang </h4>
                    
                    <form class="forms-sample" method="POST" action="simpan_izin.php">
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['NIS']; ?> </label>
                                <input type="hidden" class="form-control" id="NIS" name="NIS" value="<?php echo $d['NIS']; ?>">
                                <!-- <input type="text" class="form-control" id="id_pengguna" name="id_pengguna" value="<?php echo $SESSION['id_pengguna']; ?>"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['nama']; ?> </label>
                                <input type="hidden" class="form-control" id="nama" name="nama" value="<?php echo $d['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['alamat']; ?> </label>
                                <input type="hidden" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nomer Telephone Santri</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['no_hp_wali']; ?> </label>
                                <input type="hidden" class="form-control" id="no_hp_wali" name="no_hp_wali" value="<?php echo $d['no_hp_wali']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nomer Telephone Wali</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['no_hp_santri']; ?> </label>
                                <input type="hidden" class="form-control" id="no_hp_santri" name="no_hp_santri" value="<?php echo $d['no_hp_santri']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tanggal Izin</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value="Simpan">
                        <input type="reset" class="btn btn-light" value="Reset">
                    </form>
                    </div>
                </div>



        </div>
    </div>
</div>
<?php
}
include 'footer.php';

?>