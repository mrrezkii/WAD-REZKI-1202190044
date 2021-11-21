<?php
$conn = null;
include "helper/error.php";
include "helper/connection.php";

$query = mysqli_query($conn, "SELECT * FROM Buku_Table");
$row = mysqli_num_rows($query);