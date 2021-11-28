<?php

include "helper/constant.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation_not_logged_in.php"; ?>
<main>
    <section class="m-auto" id="register-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 40rem">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <hr width="100%" size="3" class="bg-secondary"/>
                        <form action="transactions/store_register.php" method="POST">
                            <div class="form-group mb-4">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control mt-2" id="name" name="nama"
                                       aria-describedby="nameHelp" placeholder="Masukkan Nama Lengkap" required
                                       autocomplete="off"/>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control mt-2" id="email" name="email"
                                       aria-describedby="emailHelp" placeholder="Masukkan Alamat E-Mail" required/>
                            </div>
                            <div class="form-group mb-4">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="number" class="form-control mt-2" id="no_hp" name="no_hp"
                                       aria-describedby="noHpHelp" placeholder="Masukkan Nomor Handphone" required
                                       autocomplete="off"/>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control mt-2" id="password" name="password"
                                       aria-describedby="passwordHelp" placeholder="Kata Sandi Anda" required/>
                            </div>
                            <div class="form-group mb-4">
                                <label for="recheck">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control mt-2" id="recheck"
                                       aria-describedby="recheckHelp" placeholder="Konfirmasi Kata Sandi Anda"
                                       required autocomplete="off"/>
                            </div>
                            <center>
                                <button type="submit" href="#" class="btn btn-primary w-25 mt-5">Daftar
                                </button>
                                <p class="mt-3">Atau sudah punya akun ? <span><a href="login.php">Login</a></span></p>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript" src="assets/js/check-password.js"></script>
</body>

</html>