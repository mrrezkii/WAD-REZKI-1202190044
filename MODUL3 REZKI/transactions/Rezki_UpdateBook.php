<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$description = $_POST['description'];
$image = $_POST['image'];
$tag = $_POST['tag'];
$language = $_POST['language'];

try {
    $query = mysqli_query($conn,
        "
        UPDATE Buku_Table
        SET judul_buku = $title ,
        penulis_buku = $author ,
        tahun_terbit = $year ,
        deskripsi = $description ,
        gambar = $image ,
        tag = $tag ,
        bahasa = $$language
        WHERE id_buku = $id
        ");
    if ($query) {
        header("Location: Rezki_Detail.php/?updated=true");
    } else {
        echo "<script>alert('Gagal update');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}