<?php
$conn = null;
$remember = false;
include "../helper/error.php";
include "../helper/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['remember'])) $remember = true;
else $remember = false;


try {
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $queryExecute = mysqli_query($conn, $query);
    $row = mysqli_num_rows($queryExecute);

    if ($queryExecute) {
        if ($row > 0) {
            session_start();
            $data = mysqli_fetch_array($queryExecute);
            $_SESSION['logged_in'] = true;
            $_SESSION['id'] = $data['id'];
            if ($remember) {
                setcookie("logged_in[email]", $data['email'], time() + 3600, '/');
                setcookie("logged_in[password]", $data['password'], time() + 3600, '/');
            }
            header("Location: ../index.php?logged_in=true");
        } else {
            header("refresh:0.1; URL= ../login.php?logged_in=false");
        }
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}