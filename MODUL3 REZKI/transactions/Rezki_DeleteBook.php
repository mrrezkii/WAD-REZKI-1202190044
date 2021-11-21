<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

$id = $_POST['id'];
$image = $_POST['image'];
$dir = "../files/$image";

try {
    $query = mysqli_query($conn,
        "DELETE FROM Buku_Table WHERE id_buku = '$id'");
    if ($query) {
        if (file_exists($dir)) {
            unlink($dir);
        }
        header("Location: ../Rezki_Home.php?deleted=true");
    } else {
        echo "<script>alert('Gagal delete');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}