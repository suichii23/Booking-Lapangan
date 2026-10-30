<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
    $data = mysqli_fetch_assoc($sql);
    // VAR_DUMP($sql);
?>

<h1>Update Data Pelanggan</h1>
<form action="" method="POST">
    <label for="" class="form-label mt-2">ID Pelanggan</label>
    <input type="text" class="form-control" 
    name="id_pelanggan" value="<?=$data['id_pelanggan'] ?>">
    <label for="" class="form-label mt-2">Nama Pelanggan</label>
    <input type="text" class="form-control" 
    name="nama_pelanggan" value="<?=$data['nama_pelanggan'] ?>">
    <label for="" class="form-label mt-2">No Hp</label>
    <input type="text" class="form-control" 
    name="no_hp" value="<?= $data['no_hp'] ?>">
    <label for="" class="form-label mt-2">Alamat</label>
    <input type="text" class="form-control" 
    name="alamat" value="<?= $data['alamat'] ?>">

    <input type="submit" class="btn btn-success mt-2 mb-2" value="Simpan" name="submit">
    <a href="menu.php?page=pelanggan" class="btn btn-danger mt-2 mb-2">Batal</a>
</form>

<?php   
include "koneksi.php";
if(isset ($_POST['submit'])){

    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($db,"UPDATE pelanggan SET id_pelanggan= '$id_pelanggan',nama_pelanggan='$nama_pelanggan', no_hp='$no_hp' , alamat='$alamat'
    where id_pelanggan='$id'");
    

if($update){
    header("Location:menu.php?page=pelanggan");
}else{
    echo"Gagal disimpan";
}
}
?>