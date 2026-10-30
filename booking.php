<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking</title>
</head>
<body>

<h1>Data Booking</h1>

<a href="menu.php?page=add_booking" class="btn btn-primary mb-2">
    Tambah Data
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Booking</th>
            <th>Nama Pelanggan</th>
            <th>Nama Lapangan</th>
            <th>Tanggal Booking</th>
            <th>Jam Mulai</th>
            <th>Durasi</th>
            <th>Total Bayar</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php
    include "koneksi.php";

    $sql = mysqli_query($db,"
        SELECT
            booking.*,
            pelanggan.nama_pelanggan,
            lapangan.nama_lapangan
        FROM booking
        INNER JOIN pelanggan
            ON booking.id_pelanggan = pelanggan.id_pelanggan
        INNER JOIN lapangan
            ON booking.id_lapangan = lapangan.id_lapangan
    ");

    while($data = mysqli_fetch_assoc($sql)){
    ?>

    <tr>
        <td><?= $data['id_booking']; ?></td>
        <td><?= $data['nama_pelanggan']; ?></td>
        <td><?= $data['nama_lapangan']; ?></td>
        <td><?= $data['tanggal_booking']; ?></td>
        <td><?= $data['jam_mulai']; ?></td>
        <td><?= $data['durasi']; ?> Jam</td>
        <td>Rp <?= number_format($data['total_bayar'],0,',','.'); ?></td>
        <td><?= $data['status_booking']; ?></td>

        <td>
            <a href="menu.php?page=update_booking&id=<?= $data['id_booking']; ?>">
                <i class="fas fa-edit text-success"></i>
            </a>

            <a href="menu.php?page=delete_booking&id=<?= $data['id_booking']; ?>"
               onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                <i class="fas fa-trash text-danger"></i>
            </a>
        </td>
    </tr>

    <?php
    }
    ?>

    </tbody>
</table>

</body>
</html>