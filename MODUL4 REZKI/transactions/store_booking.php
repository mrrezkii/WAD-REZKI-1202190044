<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

session_start();
$id = time();
$user_id = (int)$_SESSION['id'];
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$harga = (int)$_POST['harga'];
$tanggal = $_POST['tanggal'];


try {
    $query = "INSERT INTO booking VALUES ('$id', '$user_id', '$nama_tempat', '$lokasi', '$harga', '$tanggal')";
    $queryExecute = mysqli_query($conn, $query);

    if ($queryExecute) {
        header("Location: ../index.php?created=true");
    } else {
        echo "<script>alert('Store booking gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}