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
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="assets/images/logo-ead.png" class="rounded me-2" alt="Logo EAD" width="20">
                <strong class="me-auto">Perpustakaan EAD</strong>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Berhasil memasukkan buku
            </div>
        </div>
    </div>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params['created']) {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        let toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    }
</script>
</body>
</html>