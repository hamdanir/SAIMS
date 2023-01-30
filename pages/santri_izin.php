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
                                <th>Nomer HandPhone</th>
                                <th>HP Wali</th>
                                <th>Alamat</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Keterangan</th>
                                <th>Email</th>
                                <th>Bukti Izin</th>
                                <th>Aksi</th>
                            </tr>
            
                        </thead>
<?php 
$no=1;
$a="SELECT p.id_pendaftaran, p.nama, p.alamat, p.no_hp_santri, p.no_hp_wali, p.email, s.NIS, i.id_perizinan, i.tgl_mulai, i.tgl_selesai, i.keterangan FROM pendaftaran p JOIN santri s on p.id_pendaftaran=s.id_pendaftaran JOIN perizinan_pulang i on s.NIS=i.NIS";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
    
?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['NIS'];?></td>
                                <td><?php echo $d['nama'];?></td>
                                <td><?php echo $d['no_hp_santri'];?></td>
                                <td><?php echo $d['no_hp_wali'];?></td>
                                <td><?php echo $d['alamat'];?></td>
                                <td><?php echo $d['tgl_mulai'];?></td>
                                <td><?php echo $d['tgl_selesai'];?></td>
                                <td><?php echo $d['keterangan'];?></td>
                                <td><?php echo $d['email'];?></td>
                                <td>bukti</td>
                                
                                <td>
                                    <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                                    <a href="hapus_izin_pulang.php?id=<?php echo $d['id_perizinan']; ?>" onclick="return confirm('Apakah yakin Akan menghapus  ?')">
                                    <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
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
                </div>

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>