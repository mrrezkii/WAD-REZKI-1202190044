<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['logged_in'])) {
    setcookie("logged_in[username]", null, -1, '/');
    setcookie("logged_in[password]", null, -1, '/');
    unset($_COOKIE['logged_in']);
}
header('location: ../login.php?logout=true');