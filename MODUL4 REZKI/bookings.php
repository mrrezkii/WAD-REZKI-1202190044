<?php

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

?>
<!DOCTYPE html>
<html>

<head>
    <title>Bookings</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation_logged_in.php"; ?>
<main>
    <section class="m-auto" id="booking-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 70rem">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Tanggal Perjalanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form action="#" method="POST">
                                    <th scope="row">1</th>
                                    <td>Tanah Lot</td>
                                    <td>Bali</td>
                                    <td>2021-27-11</td>
                                    <td>Rp2.000.000</td>
                                    <td>
                                        <input type="text" name="id" value="()" hidden>
                                        <button type="submit" name="delete_btn" value="delete"
                                                class="btn btn-danger">Hapus
                                        </button>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td colspan="3"></td>
                                <td class="fw-bold" colspan="2">Rp2.000.000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
</body>

</html>