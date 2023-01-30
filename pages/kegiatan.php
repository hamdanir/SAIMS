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
                    <h4 class="card-title">Master Data Kegiatan</h4>
                    <a href="tambah_kegiatan.php">
                        <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                    </a>
                    
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
                                    <a href="edit_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>"><button type="button" class="btn btn-outline-info btn-fw">Edit</button></a>
                                    <a href="hapus_kegiatan.php?id=<?php echo $d['id_kegiatan']; ?>" onclick="return confirm('Apakah yakin Akan menghapus <?php echo $d['nama_kegiatan'];?> ?')">
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