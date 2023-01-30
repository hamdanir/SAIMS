<?php
include '../koneksi/koneksi.php';
include 'header.php';
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>

        <!-- T A B E L -->
            <div class="col-lg-16 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Pengguna</h4>
                    <a href="tambah_pengguna.php">
                            <button type="button" class="btn btn-outline-primary btn-fw">Tambah Data</button>
                        </a>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

<?php 
$no=1;
$a="select * from pengguna";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
    
?>

                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="py-1">
                                <img src="../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td><?php echo $d['nama_pengguna'];?></td>
                            <td><?php echo $d['level'];?></td>
                            <td><?php echo $d['email_pengguna'];?></td>
                            <td>
                                <a href="detail_pengguna.php?id=<?php echo $d['id_pengguna']; ?>"><button type="button" class="btn btn-outline-info btn-fw">Info</button></a>
                                <a href="hapus_pengguna.php?id=<?php echo $d['id_pengguna']; ?>" onclick="return confirm('Apakah yakin Akan menghapus <?php echo $d['nama_pengguna'];?> ?')">
                                <button type="button" class="btn btn-outline-danger btn-fw">Hapus</button>
                                    </a>
                            </td>
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
</div>

<?php
include 'footer.php';

?>