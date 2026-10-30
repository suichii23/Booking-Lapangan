<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"DELETE FROM lapangan WHERE id_lapangan='$id'");
    
    if($sql){
    header("Location:menu.php?page=lapangan");
}else{
    echo"Gagal dihapus";
}
?>