<?php
include '../koneksi/koneksi.php';
include 'header.php';
$a="select * from pendaftaran where id_pendaftaran='$_GET[id]'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>


            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Input Nilai Tes </h4>
                    
                    <form class="forms-sample" method="POST" action="simpan_nilai_tes.php">
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">ID Pendaftar</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['id_pendaftaran']; ?> </label>
                                <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $d['id_pendaftaran']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['nama']; ?> </label>
                                <!-- <input type="hidden" class="form-control" id="nama" name="nama" value="<?php echo $d['nama']; ?>"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nilai Wawancara</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="nilai_wawancara" name="nilai_wawancara" placeholder="Nilai Wawancara">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nilai Ngaji</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="nilai_ngaji" name="nilai_ngaji" placeholder="Nilai Ngaji">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nilai Peminatan</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="nilai_peminatan" name="nilai_peminatan" placeholder="peminatan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nilai_peminatan" name="keterangan" placeholder="peminatan">
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