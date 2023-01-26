<?php
session_start();
$user_id = $_SESSION['user_id'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$role = $_SESSION['role'];
$status = $_SESSION['status'];

if ($status != "login") {
    header("location:../index.php?message=silakan login terlebih dahulu!");
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:../index.php?message=terimah kasih sudah berkunjung");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-dashboard.css" />
    <title>DASBOARD</title>
</head> 
<body>
    <h3>Dasboard</h3>
    <p>
        <?php
        if (isset($_GET['message'])) {
            echo $_GET['message'];
        }
        ?>
    </p>
    <i>Halo <?= $nama_lengkap ?></i>
    <p>Status kepergawaian : <?= $role ?></p>
    <br/>

    <!--    data -->
    <?php include("absensi.php"); ?>

    <form action="" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>