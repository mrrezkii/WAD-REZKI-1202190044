<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

session_start();
$id = (int)$_SESSION['id'];

try {
    $query = "SELECT * FROM user WHERE id = '$id'";
    $queryExecute = mysqli_query($conn, $query);

    if (!$queryExecute) {
        echo "<script>alert('Show Profile gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}