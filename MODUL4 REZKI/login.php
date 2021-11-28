<?php
session_start();
include "helper/constant.php";
if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] == true) {
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation_not_logged_in.php"; ?>
<main>
    <div class="alert alert-danger hide visually-hidden" role="alert" id="alert-failed">
        Gagal login
    </div>
    <div class="alert alert-success hide visually-hidden" role="alert" id="alert-success">
        Berhasil registrasi
    </div>
    <section class="m-auto" id="login-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 40rem">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <hr width="100%" size="3" class="bg-secondary"/>
                        <form action="transactions/store_login.php" method="POST">
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control mt-2" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Masukkan Alamat E-mail"
                                       value="<?php if (isset($_COOKIE['logged_in'])) {
                                           echo $_COOKIE['logged_in']['email'];
                                       } ?>" autocomplete="off" required/>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control mt-2" id="password" name="password"
                                       aria-describedby="passwordHelp" placeholder="Kata Sandi Anda"
                                       value="<?php if (isset($_COOKIE['logged_in'])) {
                                           echo $_COOKIE['logged_in']['password'];
                                       } ?>" autocomplete="off" required/>
                            </div>
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember"
                                       value="true">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary w-25 mt-5">Login
                                </button>
                                <p class="mt-3">Atau belum punya akun ? <span><a href="login.php">Register</a></span>
                                </p>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    const alertSuccess = document.getElementById("alert-success");
    const alertFailed = document.getElementById("alert-failed");

    if (params['created']) alertSuccess.classList.remove("visually-hidden");

    if (params['logged_in'] !== undefined || params['logged_in'] !== null) {
        if (params['logged_in'] === "false") alertFailed.classList.remove("visually-hidden");
    }

</script>
</body>

</html>