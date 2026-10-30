<h1>Tambah Data Pelanggan</h1>
<form action="" method="POST">
    
    <label for="" class="form-label mt-2">ID Pelanggan</label>
    <input type="text" class="form-control" name="id_pelanggan" placeholder="P000">
    <label for="" class="form-label mt-2">Nama Pelanggan</label>
    <input type="text" class="form-control" name="nama_pelanggan">
    <label for="" class="form-label mt-2">No Hp</label>
    <input type="text" class="form-control" name="no_hp" placeholder="Contoh: 08">
    <label for="" class="form-label mt-2">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Contoh: Jl.">

    <input type="submit" class="btn btn-success mt-2 mb-2" value="Simpan" name="submit">
    <input type="reset" class="btn btn-secondary mt-2 mb-2" value="reset">
    <a href="menu.php?page=pelanggan" class="btn btn-danger mt-2 mb-2">Batal</a>
</form>

<?php
include "koneksi.php";
if(isset ($_POST['submit'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    
$sql = mysqli_query($db,"INSERT INTO pelanggan (id_pelanggan,nama_pelanggan,no_hp,alamat) VALUES ('$id_pelanggan','$nama_pelanggan', '$no_hp', '$alamat')");

if($sql){
    header("Location:menu.php?page=pelanggan");
}
}
?>