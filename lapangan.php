<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Lapangan</h1>
    <a href="menu.php?page=add_lapangan" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>ID Lapangan</th>
                <th>Nama Lapangan</th>
                <th>Jenis Lapangan</th>
                <th>Harga Per Jam</th>  
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $sql = mysqli_query($db, "SELECT * FROM lapangan");
            while($data = mysqli_fetch_array($sql)){
            ?>    
            <tr>
                <td><?= $data ['id_lapangan']; ?></td>
                <td><?= $data ['nama_lapangan'] ?></td>
                <td><?= $data ['jenis_lapangan'] ?></td>
                <td><?= $data ['harga_per_jam'] ?></td>
                <td><?= $data ['status'] ?></td>
                <td>
                    <a href="menu.php?page=update_lapangan&id=<?= $data['id_lapangan']; ?>"><i class="fas fa-edit text-success"></i></a>
                    <a href="menu.php?page=delete_lapangan&id=<?= $data['id_lapangan']; ?>"
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