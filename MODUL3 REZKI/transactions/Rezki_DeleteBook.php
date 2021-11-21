<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

$id = $_POST['id'];

try {
    $query = mysqli_query($conn,
        "DELETE FROM Buku_Table WHERE id_buku = $id");
    if ($query) {
        header("Location: Rezki_Detail.php/?deleted=true");
    } else {
        echo "<script>alert('Gagal delete');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}