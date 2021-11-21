<?php
include "helper/error.php";
include "helper/connection.php";

$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$description = $_POST['description'];
$image = $_POST['image'];
$tag = $_POST['tag'];
$language = $_POST['language'];

try {
    $query = mysqli_query($conn, "INSERT INTO Buku_Table VALUES (null, $title, $author, $year, $description, $image, $tag, $language);");
    if ($query) {
        header("Location: Rezki_Home.php/?created=true");
    } else {
        echo "<script>alert('Gagal input');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}