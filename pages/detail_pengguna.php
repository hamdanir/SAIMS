<?php
include '../koneksi/koneksi.php';
include 'header.php';

$a="SELECT * FROM pengguna Where id_pengguna='$_GET[id]'";
$data = mysqli_query($koneksi, $a);
while ($d=mysqli_fetch_array($data)){
?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class=""row>

                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Admin</h4>
                    
                    <form class="forms-sample" method="" action="">
                        <div class="form-group row">
                        
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <img src="../images/faces/face1.jpg" style="margin-left:30px; width: 190px;height: 200px;border-radius: 20px;" alt="image"/>
                            <!-- <label class="form-control"><?php echo $d['foto'];?></label> -->
                            <!-- <input type="text" class="form-control" id="nama_kegiatan" name="nama_calon_santri" placeholder="Nama calon santri" required> -->
                            <br>
                            <label style="height:10px";></label>
                        </div>
                        
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['nama_pengguna'];?></label>
                            <!-- <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required> -->
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['level'];?></label>
                            <!-- <input type="date" class="form-control" id="date" name="tgl_lahir" placeholder="tanggal lahir" required> -->
                        </div>    
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <label class="form-control"><?php echo $d['email_pengguna'];?></label>
                            <!-- <input type="number" class="form-control" id="no_hp_santri" name="no_hp_santri" placeholder="No hp santri" required> -->
                        </div>
                        
                        <!-- <a href=""><button type="button" class="btn btn-outline-info btn-fw">Update</button></a> -->
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