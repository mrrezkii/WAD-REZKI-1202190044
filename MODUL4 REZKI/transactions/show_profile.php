<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

$id = (int)$_SESSION['id'];

try {
    $query = "SELECT * FROM user WHERE id = '$id'";
    $queryExecute = mysqli_query($conn, $query);
    $datas = mysqli_fetch_array($queryExecute);

    if (!$queryExecute) {
        echo "<script>alert('Show Profile gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}