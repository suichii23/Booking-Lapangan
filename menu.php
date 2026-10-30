<?php
        session_start();
        if (!isset ($_SESSION['username'])){
            header("Location:login.php");
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lapangan Futsal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class=""></i> Booking Futsal
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?page=home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?page=pelanggan">Pelanggan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?page=lapangan">Lapangan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?page=booking">Booking</a>
                    </li>

                </ul>

                <a href="logout.php" class="btn btn-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>

            </div>

        </div>
    </nav>
</header>
<div class="container mt-4">
    <?php
        $page = $_GET['page'] ?? 'home';
        include "$page.php";
    ?>
</div>
<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; <?= date('Y'); ?> Booking Lapangan Futsal
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>