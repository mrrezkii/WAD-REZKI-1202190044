<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

session_start();
$id = (int)$_SESSION['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

try {
    $query = "UPDATE user SET nama = '$nama' , no_hp = '$no_hp' , password = '$password'  WHERE id = '$id';";
    $queryExecute = mysqli_query($conn, $query);

    if ($queryExecute) {
        header("refresh:0.1; URL= ../profile.php?updated=true");
    } else {
        echo "<script>alert('Update Profile gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}