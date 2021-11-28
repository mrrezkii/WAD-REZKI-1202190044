<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

$id = (int)$_SESSION['id'];

try {
    $query = "SELECT * FROM booking WHERE user_id = '$id'";
    $queryExecute = mysqli_query($conn, $query);
    $datas = mysqli_fetch_array($queryExecute);

    if (!$queryExecute) {
        echo "<script>alert('Show booking gagal');</script>";
    }

} catch (Exception $exception) {
    echo "ex: " . $exception;
}
