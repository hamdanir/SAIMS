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
                    <h4 class="card-title">Perizinan Kegiatan </h4>
                    <?php
                    $a="SELECT * FROM kegiatan WHERE id_kegiatan='$_GET[id]'";
                    $data = mysqli_query($koneksi, $a);
                    while ($d=mysqli_fetch_array($data)){
                    ?>
                    
                    
                    <form class="forms-sample" method="POST" action="simpan_izin_kegiatan.php">
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

                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Tanggal Izin</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_ijin" name="tgl_ijin">
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
                    
                    <div class="card-body">
                    <h4 class="card-title">Data Santri Izin</h4>
                    <!-- <a href="tambah_kegiatan.php">
                        <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                    </a> -->
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kegiatan</th>
                                <th>Tanggal Izin</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
            
                        </thead>
<?php 
$no=1;
$l="SELECT k.id_presensi, k.NIS, k.id_kegiatan, k.tgl_ijin, k.keterangan, s.NIS, s.id_pendaftaran, p.nama, p.id_pendaftaran, j.nama_kegiatan, j.id_kegiatan FROM perizinan_kegiatan k LEFT JOIN santri s on k.NIS=s.NIS JOIN pendaftaran p on s.id_pendaftaran=p.id_pendaftaran JOIN kegiatan j on k.id_kegiatan=j.id_kegiatan where k.id_kegiatan='$_GET[id]'";
$jata = mysqli_query($koneksi, $l);
while ($j=mysqli_fetch_array($jata)){
    
?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $j['NIS'];?></td>
                                <td><?php echo $j['nama'];?></td>
                                <td><?php echo $j['nama_kegiatan'];?></td>
                                <td><?php echo $j['tgl_ijin'];?></td>
                                <td><?php echo $j['keterangan'];?></td>
                                <td>
                                    f
                                    
                                </td>
                            </tr>
                        </tbody>

<?php
}
?>
                        
                        </table>
                    </div>
                    </div>

                </div>




        </div>
    </div>
</div>
<?php
}
include 'footer.php';

?>