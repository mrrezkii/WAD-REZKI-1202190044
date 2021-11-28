<?php

include "helper/constant.php";

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
    <section class="m-auto" id="booking-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 60rem">
                    <div class="card-body">
                        <h5 class="card-title text-center">Profile</h5>
                        <hr width="100%" size="3" class="bg-secondary"/>
                        <form action="#" method="POST">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-9">
                                    <p id="email" class="mt-3">muhammad.rezki.ananda@gmail.com</p>
                                </div>
                                <div class="col-3">
                                    <label for="name">Nama</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control mt-2" id="name" name="name"
                                           aria-describedby="nameHelp" required/>
                                </div>
                                <div class="col-3">
                                    <label for="no_hp">Nomor Handphone</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control mt-2" id="no_hp" name="no_hp"
                                           aria-describedby="noHpHelp" required/>
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
                                    <input type="text" class="form-control mt-2" id="navbar" name="navbar"
                                           aria-describedby="recheckHelp" value="Blue Ocean" required/>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <center>
                                        <button type="submit" href="#" class="btn btn-primary w-25 mt-5 mx-1"
                                                name="save_btn">Simpan
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
</body>

</html>