<?php
include "koneksi.php";

$pelanggan = mysqli_query($db, "SELECT * FROM pelanggan");
$lapangan = mysqli_query($db, "SELECT * FROM lapangan");
$booking = mysqli_query($db, "SELECT * FROM booking");

$jml_pelanggan = mysqli_num_rows($pelanggan);
$jml_lapangan = mysqli_num_rows($lapangan);
$jml_booking = mysqli_num_rows($booking);
?>

<h1>Dashboard</h1>
<hr>

<div class="row">

    <div class="col-md-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5>Total Pelanggan</h5>
                <h2><?= $jml_pelanggan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5>Total Lapangan</h5>
                <h2><?= $jml_lapangan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-warning text-dark">
            <div class="card-body">
                <h5>Total Booking</h5>
                <h2><?= $jml_booking; ?></h2>
            </div>
        </div>
    </div>

</div>

<br>

<div class="alert alert-info">
    <h4>Selamat Datang</h4>
    <p>
        Selamat datang di Sistem Informasi Booking Lapangan Futsal.
        Gunakan menu di atas untuk mengelola data pelanggan, lapangan, dan booking.
    </p>
</div>