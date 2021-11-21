<?php
$row = null;
$query = null;
include "helper/constant.php";
include "transactions/Rezki_ReadBook.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <?php include "component/helper/head.php" ?>
</head>
<body>
<?php include "component/navigation.php"; ?>
<main>
    <?php if ($row == 0 || $row == null) : ?>
        <section class="m-auto" id="no-books">
            <div class="container mt-5">
                <div class="content-page d-flex flex-column align-items-center justify-content-center">
                    <h4 class="mt-5 text-center">Belum ada buku</h4>
                    <hr width="100%" size="6" class="bg-primary">
                    <h6>Silahkan menambahkan buku</h6>
                </div>
            </div>
        </section>
    <?php else : ?>
        <section id="books">
            <div class="container">
                <div class="row mx-auto">
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-2">
                            <form action="Rezki_DetailBuku.php" method="get">
                                <div class="card mt-2 mb-5" style="width: 18rem;">
                                    <img class="card-img-top"
                                         src="files/<?= $data['gambar'] ?>"
                                         alt="book">
                                    <div class="card-body">
                                        <h5 class="card-title text-truncate"><?= $data['judul_buku'] ?></h5>
                                        <p class="card-text text-truncate"><?= $data['deskripsi'] ?></p>
                                        <button class="btn btn-primary" name="id" value="<?= $data['id_buku'] ?>">
                                            Tampilkan lebih lanjut
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
        </section>
    <?php endif ?>

</main>
<?php include "component/footer.php"; ?>
</body>
</html>