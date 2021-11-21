<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

$id = (int )$_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = (int)$_POST['year'];
$description = $_POST['description'];
$tag = implode(",", $_POST['tag']);
$language = $_POST['language'];

try {
    $query = mysqli_query($conn,
        "UPDATE Buku_Table SET judul_buku = '$title' ,penulis_buku = '$author' , tahun_terbit = '$year' , deskripsi = '$description' , tag = '$tag' , bahasa = '$language' WHERE id_buku = '$id'");
    if ($query) {
        header("Location: ../Rezki_DetailBuku.php?id=$id,updated=true");
    } else {
        echo "<script>alert('Gagal update');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}