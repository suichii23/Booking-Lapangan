<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"SELECT * FROM lapangan WHERE id_lapangan='$id'");
    $data = mysqli_fetch_assoc($sql);
    // VAR_DUMP($sql);
?>

<h1>Update Data Pelanggan</h1>
<form action="" method="POST">
    <label for="" class="form-label mt-2">ID Lapangan</label>
    <input type="text" class="form-control" 
    name="id_lapangan" value="<?=$data['id_lapangan'] ?>">
    <label for="" class="form-label mt-2">Nama lapangan</label>
    <input type="text" class="form-control" 
    name="nama_lapangan" value="<?=$data['nama_lapangan'] ?>">
    <label for="" class="form-label mt-2">Jenis Lapangan</label>
    <input type="text" class="form-control" 
    name="jenis_lapangan" value="<?= $data['jenis_lapangan'] ?>">
    <label for="" class="form-label mt-2">Harga Per Jam</label>
    <input type="text" class="form-control" 
    name="harga_per_jam" value="<?= $data['harga_per_jam'] ?>">
    <label for="" class="form-label mt-2">Status</label>
    <input type="text" class="form-control" 
    name="status" value="<?= $data['status'] ?>">

    <input type="submit" class="btn btn-success mt-2 mb-2" value="Simpan" name="submit">
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

    $update = mysqli_query($db,"UPDATE lapangan SET id_lapangan= '$id_lapangan',nama_lapangan='$nama_lapangan', jenis_lapangan='$jenis_lapangan' , harga_per_jam='$harga_per_jam', status='$status'
    where id_lapangan='$id'");
    

if($update){
    header("Location:menu.php?page=lapangan");
}else{
    echo"Gagal disimpan";
}
}
?>