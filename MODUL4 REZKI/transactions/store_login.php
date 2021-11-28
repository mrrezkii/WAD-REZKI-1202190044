<?php
$conn = null;
include "../helper/error.php";
include "../helper/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$remember = $_POST['remember'];


try {
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $queryExecute = mysqli_query($conn, $query);

    if ($queryExecute) {
        session_start();
        $data = mysqli_fetch_array($queryExecute);
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $data['id'];
        if ($remember) {
            setcookie("logged_in[username]", $data['email'], time() + 3600);
            setcookie("logged_in[password]", $data['password'], time() + 3600);
        }
        header("Location: ../index.php?logged_in=true");
    } else {
        echo "<script>alert('Login gagal');</script>";
    }
} catch (Exception $exception) {
    echo "ex: " . $exception;
}