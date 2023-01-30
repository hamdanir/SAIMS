<?php
include '../koneksi/koneksi.php';
include 'header.php';

$a="SELECT s.NIS,s.id_pendaftaran,s.krs,s.bukti_pembayaran,p.id_pendaftaran,p.nama,p.alamat,p.tgl_lahir,p.jk,p.no_hp_santri,p.no_hp_wali,p.email FROM santri s JOIN pendaftaran p on s.id_pendaftaran=p.id_pendaftaran WHERE s.id_pendaftaran='$_GET[id]'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>

                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Santri</h4>
                    
                    <form class="forms-sample" method="" action="">
                        <div class="form-group row">
                        
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['nama'];?></label>
                            <!-- <input type="text" class="form-control" id="nama_kegiatan" name="nama_calon_santri" placeholder="Nama calon santri" required> -->
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['NIS'];?></label>
                            <!-- <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required> -->
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">tanggal lahir</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['tgl_lahir'];?></label>
                            <!-- <input type="date" class="form-control" id="date" name="tgl_lahir" placeholder="tanggal lahir" required> -->
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">jenis kelamin</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['jk'];?></label>
                            <!-- <select name="jk" class="form-control" required >
                                <option value="L">Laki-laki</option>
                                <option value="P">perempuan</option> -->
                        </select>
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">No hp santri</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['no_hp_santri'];?></label>
                            <!-- <input type="number" class="form-control" id="no_hp_santri" name="no_hp_santri" placeholder="No hp santri" required> -->
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">No hp wali</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['no_hp_wali'];?></label>
                            <!-- <input type="number" class="form-control" id="no_hp_wali" name="no_hp_wali" placeholder="No hp wali" required> -->
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['email'];?></label>
                            <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Email" required> -->
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">KRS</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['krs'];?></label>
                            <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Email" required> -->
                        </div>
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['bukti_pembayaran'];?></label>
                            <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Email" required> -->
                        </div>





                        </div>
                        <a href=""><button type="button" class="btn btn-outline-info btn-fw">Update</button></a>
                        <!-- <input type="submit" class="btn btn-primary mr-2" value="Simpan">
                        <input type="reset" class="btn btn-light" value="Reset"> -->
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