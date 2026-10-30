<h1>Tambah Data Booking</h1>

<?php
include "koneksi.php";
?>

<form action="" method="POST">

    <label class="form-label mt-2">Pelanggan</label>
    <select name="id_pelanggan" class="form-control" required>
        <option value="">-- Pilih Pelanggan --</option>

        <?php
        $pelanggan = mysqli_query($db, "SELECT * FROM pelanggan");
        while($p = mysqli_fetch_assoc($pelanggan)){
        ?>
            <option value="<?= $p['id_pelanggan']; ?>">
                <?= $p['nama_pelanggan']; ?>
            </option>
        <?php } ?>
    </select>

    <label class="form-label mt-2">Lapangan</label>
    <select name="id_lapangan" class="form-control" required>
        <option value="">-- Pilih Lapangan --</option>

        <?php
        $lapangan = mysqli_query($db, "SELECT * FROM lapangan");
        while($l = mysqli_fetch_assoc($lapangan)){
        ?>
            <option value="<?= $l['id_lapangan']; ?>">
                <?= $l['nama_lapangan']; ?>
            </option>
        <?php } ?>
    </select>

    <label class="form-label mt-2">Tanggal Booking</label>
    <input type="date" name="tanggal_booking" class="form-control" required>

    <label class="form-label mt-2">Jam Mulai</label>
    <input type="time" name="jam_mulai" class="form-control" required>

    <label class="form-label mt-2">Durasi (Jam)</label>
    <input type="number" name="durasi" class="form-control" min="1" required>

    <label class="form-label mt-2">Total Bayar</label>
    <input type="number" name="total_bayar" class="form-control" required>

    <label class="form-label mt-2">Status Booking</label>
    <select name="status_booking" class="form-control">
        <option value="Pending">Pending</option>
        <option value="Lunas">Lunas</option>
        <option value="Selesai">Selesai</option>
    </select>

    <br>

    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
    <input type="reset" value="Reset" class="btn btn-secondary">
    <a href="menu.php?page=booking" class="btn btn-danger">Batal</a>

</form>

<?php

if(isset($_POST['submit'])){

    $id_pelanggan = $_POST['id_pelanggan'];
    $id_lapangan = $_POST['id_lapangan'];
    $tanggal_booking = $_POST['tanggal_booking'];
    $jam_mulai = $_POST['jam_mulai'];
    $durasi = $_POST['durasi'];
    $total_bayar = $_POST['total_bayar'];
    $status_booking = $_POST['status_booking'];

    $sql = mysqli_query($db,"INSERT INTO booking
    (id_pelanggan,id_lapangan,tanggal_booking,jam_mulai,durasi,total_bayar,status_booking) VALUES ('$id_pelanggan','$id_lapangan','$tanggal_booking','$jam_mulai','$durasi','$total_bayar','$status_booking')");

    if($sql){
    echo "<script>
            alert('Data berhasil ditambahkan');
            window.location='menu.php?page=booking';
          </script>";
    exit;
}
}

?>