<?php
include '../koneksi/koneksi.php';
include 'header.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>

    

    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Daftar Kegaitan</h4>
                    
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Kegiatan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
            
                        </thead>
<?php 
$no=1;
$a="select * from kegiatan";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
    
?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_kegiatan'];?></td>
                                <td><?php echo $d['keterangan'];?></td>
                                <td>
                                    <a href="presensi_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>"><button type="button" class="btn btn-info">Presensi</button></a>
                                    <!-- <a href="hapus_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>" onclick="return confirm('Apakah yakin Akan menghapus <?php echo $d['nama_kegiatan'];?> ?')">
                                    <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button> -->
                                    </a>
                                </td>
                            </tr>
                        </tbody>

<?php
}
?>
                        
                        </table>
                    </div>
                    </div>


                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Santri Izin Pulang</h4>
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
$l="SELECT k.id_presensi, k.NIS, k.id_kegiatan, k.tgl_ijin, k.keterangan, s.NIS, s.id_pendaftaran, p.nama, p.id_pendaftaran, j.nama_kegiatan, j.id_kegiatan FROM perizinan_kegiatan k LEFT JOIN santri s on k.NIS=s.NIS JOIN pendaftaran p on s.id_pendaftaran=p.id_pendaftaran JOIN kegiatan j on k.id_kegiatan=j.id_kegiatan";
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
include 'footer.php';

?>