<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

if (!isset($_GET['id'])) {
    header("Location: Rezki_Home.php");
    exit();
}

$query = mysqli_query($conn, "SELECT * FROM Buku_Table WHERE id_buku = '$_GET[id]'");
$row = mysqli_num_rows($query);