<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="justify-content-center align-items-center">
        <div class="container mt-4 bg-success p-4 rounded shadow" style="width: 400px;">
            <h1>Login</h1>

            <form method="POST" action="">
                <label for="" class="form-label mt-2">Username</label>
                <input class="form-control" type="text" name="username">

                <label for="" class="form-label mt-2">Password</label>
                <input class="form-control" type="password" name="password">

                <input class="btn btn-info mt-2" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</body>

<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($db, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location:menu.php?page=home");
    } else {
        echo "Username atau Password Salah";
    }
}
?>

<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; <?= date('Y'); ?> Booking Lapangan Futsal
</footer>

<script src="bootstrap.js"></script>

</html>