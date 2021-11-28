<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

$id = time();
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];


try {
    $checkId = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'"));
    $checkEmail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"));

    if ($checkId > 0) {
        echo "<script>alert('ID telah digunakan');</script>";
        header("refresh:0.1; URL= ../register.php");
    } else if ($checkEmail > 0) {
        echo "<script>alert('Email telah digunakan');</script>";
        header("refresh:0.1; URL= ../register.php");
    } else {
        $query = "INSERT INTO user VALUES ('$id', '$nama', '$email', '$password', '$no_hp')";
        $queryExecute = mysqli_query($conn, $query);

        if ($queryExecute) {
            header("Location: ../login.php?created=true");
        } else {
            echo "<script>alert('Register gagal');</script>";
        }
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}