<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "wad_modul4";

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    echo "Server not found" . mysqli_error($conn);
}