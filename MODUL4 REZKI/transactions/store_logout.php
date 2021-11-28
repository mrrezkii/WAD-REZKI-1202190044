<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['logged_in'])) {
    setcookie("logged_in[username]", time() - 3600);
    setcookie("logged_in[password]", time() - 3600);
}
header('location: ../index.php?logout=true');