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
                    <h4 class="card-title">Data Santri Diterima</h4>
                    
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Calon Santri</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Nomor HP</th>
                                <th>Nilai Wawancara</th>
                                <th>Nilai Mengaji</th>
                                <th>Nilai Keminatan</th>
                                <th>Keterangan</th>
                                <!-- <th>Aksi</th> -->
                            </tr>
            
                        </thead>
<?php 
$no=1;
$a="SELECT p.id_pendaftaran,p.nama,p.alamat, p.tgl_lahir, p.no_hp_santri, n.wawancara,n.ngaji,n.peminatan, n.keterangan FROM pendaftaran p LEFT JOIN nilai_tes_masuk n on p.id_pendaftaran=n.id_pendaftaran 
where p.status='Diterima'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
    
?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama'];?></td>
                                <td><?php echo $d['alamat'];?></td>
                                <td><?php echo $d['tgl_lahir'];?></td>
                                <td><?php echo $d['no_hp_santri'];?></td>
                                <td><?php echo $d['wawancara'];?></td>
                                <td><?php echo $d['ngaji'];?></td>
                                <td><?php echo $d['peminatan'];?></td>
                                <td><?php echo $d['keterangan'];?></td>
                                <!-- <td>
                                    
                                    <a href="input_nilai_tes.php?id=<?php echo $d['id_pendaftaran']; ?>">
                                    <button type="button" class="btn btn-outline-info btn-fw">Input Nilai</button>
                                    </a>

                                    <a href="proses_diterima.php?id=<?php echo $d['id_pendaftaran']; ?>">
                                    <button type="button" class="btn btn-outline-success btn-fw">Diterima</button>
                                    </a>

                                    <a href="proses_ditolak.php?id=<?php echo $d['id_pendaftaran']; ?>" onclick="return confirm('Apakah yakin Akan menolak ?')">
                                    <button type="button" class="btn btn-outline-danger btn-fw">Ditolak</button>
                                    </a>
                                </td> -->
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