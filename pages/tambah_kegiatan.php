<?php
include '../koneksi/koneksi.php';
include 'header.php';
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>

                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Tambah Data Kegiatan</h4>
                    
                    <form class="forms-sample" method="POST" action="simpan_kegiatan.php">
                        <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="keterangan"> </textarea>
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
include 'footer.php';

?>