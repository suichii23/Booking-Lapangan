<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = mysqli_query($db,"SELECT * FROM booking WHERE id_booking='$id'");
    $data = mysqli_fetch_assoc($sql);
?>

<h1>Update Data Booking</h1>
<form action="" method="POST">

    <label class="form-label mt-2">Pelanggan</label>
    <select name="id_pelanggan" class="form-control">

        <?php
        $pelanggan = mysqli_query($db,"SELECT * FROM pelanggan");

        while($p = mysqli_fetch_assoc($pelanggan)){
            $selected = ($p['id_pelanggan'] == $data['id_pelanggan']) ? "selected" : "";
        ?>
            <option value="<?= $p['id_pelanggan']; ?>" <?= $selected ?>>
                <?= $p['nama_pelanggan']; ?>
            </option>
        <?php } ?>

    </select>

    <label class="form-label mt-2">Lapangan</label>
    <select name="id_lapangan" class="form-control">

        <?php
        $lapangan = mysqli_query($db,"SELECT * FROM lapangan");

        while($l = mysqli_fetch_assoc($lapangan)){
            $selected = ($l['id_lapangan'] == $data['id_lapangan']) ? "selected" : "";
        ?>
            <option value="<?= $l['id_lapangan']; ?>" <?= $selected ?>>
                <?= $l['nama_lapangan']; ?>
            </option>
        <?php } ?>

    </select>

    <label class="form-label mt-2">Tanggal Booking</label>
    <input type="date" class="form-control" name="tanggal_booking" value="<?= $data['tanggal_booking']; ?>">

    <label class="form-label mt-2">Jam Mulai</label>
    <input type="time" class="form-control" name="jam_mulai" value="<?= $data['jam_mulai']; ?>">

    <label class="form-label mt-2">Durasi (Jam)</label>
    <input type="number" class="form-control" name="durasi" value="<?= $data['durasi']; ?>">

    <label class="form-label mt-2">Total Bayar</label>
    <input type="number" class="form-control" name="total_bayar" value="<?= $data['total_bayar']; ?>">

    <label class="form-label mt-2">Status Booking</label>
    <select name="status_booking" class="form-control">
        <option value="Pending">Pending</option>
        <option value="Lunas">Lunas</option>
        <option value="Selesai">Selesai</option>
    </select>

    <br>

    <input type="submit" class="btn btn-success" value="Simpan" name="submit">
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

    $update = mysqli_query($db,"UPDATE booking SET id_pelanggan='$id_pelanggan', id_lapangan='$id_lapangan',tanggal_booking='$tanggal_booking', jam_mulai='$jam_mulai', durasi='$durasi', total_bayar='$total_bayar', status_booking='$status_booking' WHERE id_booking='$id'
    ");

    if($update){
        header("Location: menu.php?page=booking");
        exit;
    }else{
        echo "Gagal disimpan";
    }
}
?>