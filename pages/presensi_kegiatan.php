<?php
session_start();
if($_SESSION['status']!="login"){
header("location:../index.php?pesan=belum_login");
}
include '../koneksi/koneksi.php';
include 'header.php';
// $a="SELECT * FROM pendaftaran p JOIN santri s on p.id_pendaftaran=s.id_pendaftaran WHERE s.NIS='$_GET[id]'";
// $a="SELECT * FROM kegiatan WHERE id_kegiatan='$_GET[id]'";
// $data = mysqli_query($koneksi, $a);
// while ($d=mysqli_fetch_array($data)){
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>


            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Presensi Kegiatan</h4>
                    <?php
                    $a="SELECT * FROM kegiatan WHERE id_kegiatan='$_GET[id]'";
                    $data = mysqli_query($koneksi, $a);
                    while ($d=mysqli_fetch_array($data)){
                    ?>
                    
                    
                    <form class="forms-sample" method="POST" action="simpan_presensi_kegiatan.php">
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">  <?php echo $d['nama_kegiatan']; ?> </label>
                                <input type="hidden" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?php echo $d['nama_kegiatan']; ?>">
                                <input type="hidden" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?php echo $d['id_kegiatan']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Santri</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?php echo $d['id_kegiatan']; ?>"> -->
                                <select name="NIS" class="form-control" >
                                    <?php
                                $sql="SELECT p.nama, p.id_pendaftaran, s.NIS FROM pendaftaran p LEFT JOIN santri s on p.id_pendaftaran=s.id_pendaftaran";

                                $hasil=mysqli_query($koneksi,$sql);
                                
                                while ($data = mysqli_fetch_array($hasil)) {
                                
                                ?>
                                
                                    <option value="<?php echo $data['NIS'];?>"><?php echo $data['nama'];?></option>
                                <?php 
                                    }
                                ?>
                                </select>

                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_ijin" name="tgl_ijin">
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
                            </div>
                        </div> -->
                        <input type="submit" class="btn btn-primary mr-2" value="Simpan">
                        <input type="reset" class="btn btn-light" value="Reset">
                    </form>
                    </div>

                    <div class="card-body">
                    <h4 class="card-title">Daftar Presesensi Kegiatan</h4>
                    
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Santri</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
            
                        </thead>
<?php 
$tanggal=date('Y-m-d');
$no=1;
$a="SELECT * from presensi_kegiatan p JOIN santri s on p.nis=s.NIS JOIN pendaftaran pn on s.id_pendaftaran=pn.id_pendaftaran where p.id_kegiatan='$_GET[id]' and p.tanggal='$tanggal'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
    
?>
                        <form method="POST" action="batal_presensi.php">
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama'];?></td>
                                <td><?php echo $d['tanggal'];?></td>
                                <td>
                                <input type="hidden" name="id_presensi" value="<?php echo $d['id_presensi']; ?>">
                                <input type="hidden" name="id_kegiatan" value="<?php echo $d['id_kegiatan']; ?>">
                                    <input type="submit" name="sublit" class="btn btn-danger" value="Batal Presensi">
                                    <!-- <a href="presensi_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>"><button type="button" class="btn btn-danger">Batalkan Presensi</button></a> -->
                                    <!-- <a href="batal_presensi.php?id=<?php echo $d['id_presensi'];?>?id_kegiatan=<?php echo $d['id_kegiatan']; ?>" onclick="return confirm('Apakah yakin Akan membatalkan presensi <?php echo $d['nama'];?> ?')">
                                    <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button> -->
                                    </a>
                                </td>
                            </tr>
                        </tbody></form>
                    

<?php
}
?>
                        
                        </table>
                    </div>
                </div>




        </div>
    </div>
</div>
<?php
}
include 'footer.php';

?>