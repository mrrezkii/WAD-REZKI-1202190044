<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

$title = $_POST['title'];
$author = $_POST['author'];
$year = (int)$_POST['year'];
$description = $_POST['description'];
$imageName = $_FILES['image']['name'];
$imageSize = $_FILES['image']['size'];
$tag = implode(",", $_POST['tag']);
$language = $_POST['language'];

$extAllowed = in_array(pathinfo($imageName, PATHINFO_EXTENSION), ['png', 'gif', 'jpeg']);

$row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Buku_Table")) + 1;

try {
    if ($extAllowed) {
        $fileName = 'buku' . '' . $row . '' . '.' . pathinfo($imageName, PATHINFO_EXTENSION);
        $query = mysqli_query($conn, "INSERT INTO Buku_Table VALUES (null, '$title', '$author', '$year', '$description', '$fileName', '$tag', '$language');");
        if ($query) {
            move_uploaded_file($_FILES['image']['tmp_name'], "../files/$fileName");
            header("Location: ../Rezki_Home.php?created=true");
        } else {
            echo "<script>alert('Gagal input');</script>";
        }
    }
    {
        echo "<script>alert('Gagal input');</script>";
    }

} catch (Exception $exception) {
    echo "ex: " . $exception;
}