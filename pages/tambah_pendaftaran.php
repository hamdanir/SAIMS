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
                    <h4 class="card-title">Tambah Data Pendaftar</h4>
                    
                    <form class="forms-sample" method="POST" action="simpan_pendaftaran.php">
                        <div class="form-group row">
                        
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama calon santri</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_kegiatan" name="nama_calon_santri" placeholder="Nama calon santri" required>
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">tanggal lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="tgl_lahir" placeholder="tanggal lahir" required>
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">jenis kelamin</label>
                        <div class="col-sm-9">
                            <select name="jk" class="form-control" required >
                                <option value="L">Laki-laki</option>
                                <option value="P">perempuan</option>
                        </select>
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">No hp santri</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="no_hp_santri" name="no_hp_santri" placeholder="No hp santri" required>
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">No hp wali</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="no_hp_wali" name="no_hp_wali" placeholder="No hp wali" required>
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <!-- <labe  l for="exampleInputMobile" class="col-sm-3 col-form-label">status seleksi</labe> -->
                        <!-- <div class="col-sm-9">
                            <input type="text" class="form-control" id="status_seleksi" name="status_seleksi" placeholder="Status seleksi">
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Status diterima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status_diterima" name="status_diterima" placeholder="Status diterima">
                        </div>                 -->





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