<?php
$queryExecute = null;
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

include "transactions/show_booking.php";

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
                                <th scope="col">Nama Tempat</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Tanggal Perjalanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tboy>
                                <?php
                                $number = 0;
                                $sum = 0;
                                while ($data = mysqli_fetch_array($queryExecute)) {
                                    $number++;
                                    $sum = $sum + (int)$data['harga'];
                                    ?>
                                    <tr>
                                        <form action="transactions/delete_booking.php" method="POST">
                                            <th scope="row"><?= $number ?></th>
                                            <td><?= $data['nama_tempat'] ?></td>
                                            <td><?= $data['lokasi'] ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= "Rp " . number_format($data['harga'], 2, ',', '.'); ?></td>
                                            <td>
                                                <input type="text" name="id" value="<?= $data['id'] ?>" hidden>
                                                <button type="submit" name="delete_btn" value="delete"
                                                        class="btn btn-danger">Hapus
                                                </button>
                                            </td>
                                        </form>

                                    </tr>
                                <?php } ?>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td colspan="3"></td>
                                    <td class="fw-bold"
                                        colspan="2"><?= "Rp " . number_format($sum, 2, ',', '.'); ?></td>
                                </tr>
                            </tboy>
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