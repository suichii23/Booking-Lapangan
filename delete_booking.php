<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"DELETE FROM booking WHERE id_booking='$id'");
    
    if($sql){
    header("Location:menu.php?page=booking");
}else{
    echo"Gagal dihapus";
}
?>