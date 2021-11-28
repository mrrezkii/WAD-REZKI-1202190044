<?php
$background = isset($_COOKIE['theme']) && ($_COOKIE['theme']['navbar'] === 'blue') ? 'bg-blue' : 'bg-secondary';
?>
<nav class="navbar navbar-expand-lg navbar-light <?= $background ?> ">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 float-right">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="register.php" class="my-auto mx-1 nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link my-auto mx-1">Login</a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>