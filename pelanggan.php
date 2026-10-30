<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Pelanggan</h1>
    <a href="menu.php?page=add_pelanggan" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>No HP</th>
                <th>Alamat</th>  
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $sql = mysqli_query($db, "SELECT * FROM pelanggan");
            while($data = mysqli_fetch_array($sql)){
            ?>    
            <tr>
                <td><?= $data ['id_pelanggan']; ?></td>
                <td><?= $data ['nama_pelanggan'] ?></td>
                <td><?= $data ['no_hp'] ?></td>
                <td><?= $data ['alamat'] ?></td>
                <td>
                    <a href="menu.php?page=update_pelanggan&id=<?= $data['id_pelanggan']; ?>"><i class="fas fa-edit text-success"></i></a>
                    <a href="menu.php?page=delete_pelanggan&id=<?= $data['id_pelanggan']; ?>"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash text-danger"></i></a>
                </td>
            </tr>
                
            <?php 
            } 
            ?>
        </tbody>
    </table>
    
</body>
</html>