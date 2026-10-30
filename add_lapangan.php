<h1>Tambah Data Lapangan</h1>
<form action="" method="POST">
    
    <label for="" class="form-label mt-2">ID Lapangan</label>
    <input type="text" class="form-control" name="id_lapangan" placeholder="L000">
    <label for="" class="form-label mt-2">Nama Lapangan</label>
    <input type="text" class="form-control" name="nama_lapangan">
    <label for="" class="form-label mt-2">Jenis Lapangan</label>
    <input type="text" class="form-control" name="jenis_lapangan">
    <label for="" class="form-label mt-2">Harga Per Jam</label>
    <input type="text" class="form-control" name="harga_per_jam">
    <label for="" class="form-label mt-2">Status</label>
    <input type="text" class="form-control" name="status" placeholder="TERSEDIA / MAINTENANCE">

    <input type="submit" class="btn btn-success mt-2 mb-2" value="Simpan" name="submit">
    <input type="reset" class="btn btn-secondary mt-2 mb-2" value="reset">
    <a href="menu.php?page=lapangan" class="btn btn-danger mt-2 mb-2">Batal</a>
</form>

<?php
include "koneksi.php";
if(isset ($_POST['submit'])){
    $id_lapangan = $_POST['id_lapangan'];
    $nama_lapangan = $_POST['nama_lapangan'];
    $jenis_lapangan = $_POST['jenis_lapangan'];
    $harga_per_jam = $_POST['harga_per_jam'];
    $status = $_POST['status'];
    
$sql = mysqli_query($db,"INSERT INTO lapangan (id_lapangan,nama_lapangan,jenis_lapangan,harga_per_jam,status) VALUES ('$id_lapangan','$nama_lapangan', '$jenis_lapangan', '$harga_per_jam', '$status')");

if($sql){
    header("Location:menu.php?page=lapangan");
}
}
?>