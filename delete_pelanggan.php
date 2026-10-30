<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"DELETE FROM pelanggan WHERE id_pelanggan='$id'");
    
    if($sql){
    header("Location:menu.php?page=pelanggan");
}else{
    echo"Gagal dihapus";
}
?>