<?php

$datas = null;
session_start();
include "helper/constant.php";
if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] === false || $_SESSION['logged_in'] === "false") {
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}

include "transactions/show_profile.php";

$bgOcean = isset($_COOKIE['theme']) && ($_COOKIE['theme']['navbar'] === 'blue') ? 'selected' : '';
$bgDark = isset($_COOKIE['theme']) && ($_COOKIE['theme']['navbar'] === 'dark') ? 'selected' : '';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation_logged_in.php"; ?>
<main>
    <div class="alert alert-success hide visually-hidden" role="alert" id="alert-update">
        Berhasil update profile
    </div>
    <section class="m-auto" id="booking-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 60rem">
                    <div class="card-body">
                        <h5 class="card-title text-center">Profile</h5>
                        <hr width="100%" size="3" class="bg-secondary"/>
                        <form action="transactions/update_profile.php" method="POST">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-9">
                                    <p id="email" class="mt-3"><?= $datas['email'] ?></p>
                                </div>
                                <div class="col-3">
                                    <label for="name">Nama</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control mt-2" id="name" name="nama"
                                           aria-describedby="nameHelp" value="<?= $datas['nama'] ?>" required/>
                                </div>
                                <div class="col-3">
                                    <label for="no_hp">Nomor Handphone</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control mt-2" id="no_hp" name="no_hp"
                                           aria-describedby="noHpHelp" value="<?= $datas['no_hp'] ?>" required/>
                                </div>
                                <div class="col-12">
                                    <hr width="100%" size="3" class="bg-secondary"/>
                                </div>
                                <div class="col-3">
                                    <label for="password">Kata Sandi</label>
                                </div>
                                <div class="col-9">
                                    <input type="password" class="form-control mt-2" id="password" name="password"
                                           aria-describedby="passwordHelp" placeholder="Kata Sandi" required/>
                                </div>
                                <div class="col-3">
                                    <label for="recheck">Konfirmasi Kata Sandi</label>
                                </div>
                                <div class="col-9">
                                    <input type="password" class="form-control mt-2" id="recheck" name="recheck"
                                           aria-describedby="recheckHelp" placeholder="Konfirmasi Kata Sandi"
                                           required/>
                                </div>
                                <div class="col-3">
                                    <label for="navbar">Nama Navbar</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" id="navbar" name="navbar" required>
                                        <option value="blue" <?= $bgOcean ?>">Blue Ocean</option>
                                        <option value="dark" <?= $bgDark ?>">Dark Boba</option>
                                    </select>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <center>
                                        <button type="submit" href="#" class="btn btn-primary w-25 mt-5 mx-1">Simpan
                                        </button>
                                        <button type="button" href="#"
                                                class="btn btn-warning w-25 mt-5 mx-1">Cancel
                                        </button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript" src="assets/js/check-password.js"></script>
<script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    const alertLogin = document.getElementById("alert-login");
    const alertUpdate = document.getElementById("alert-update");

    if (params['updated']) alertUpdate.classList.remove("visually-hidden");
</script>
</body>

</html>