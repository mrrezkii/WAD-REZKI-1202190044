<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

session_start();
$id = (int)$_POST['id'];
$user_id = (int)$_SESSION['id'];

try {
    $query = "DELETE FROM booking WHERE id = '$id' AND user_id = '$user_id'";
    $queryExecute = mysqli_query($conn, $query);

    if (!$queryExecute) {
        echo "<script>alert('Delete booking input');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}