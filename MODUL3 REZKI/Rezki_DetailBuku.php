<?php
$row = null;
$query = null;
include "helper/constant.php";
include "transactions/Rezki_ReadBookById.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Detail Buku</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation.php"; ?>
<main>
    <?php if ($row != 0 || $row != null) {
        $data = mysqli_fetch_array($query)
        ?>
        <section class="m-auto shadow p-3 mb-5 bg-body rounded w-75 mt-5 p-5" id="detail-book">
            <div class="container">
                <h4 class="fw-bold text-center">Detail Buku</h4>
                <center>
                    <img class="my-3"
                         src="files/<?= $data['gambar'] ?>">
                </center>
                <hr width="100%" size="6" class="bg-primary">
                <form>
                    <label class="fw-bold" for="title">Judul Buku</label>
                    <p id="title mb-5"><?= $data['judul_buku'] ?></p>
                    <label class="fw-bold" for="title">Penulis</label>
                    <p id="title mb-5"><?= $data['penulis_buku'] ?></p>
                    <label class="fw-bold" for="title">Tahun Terbit</label>
                    <p id="title mb-5"><?= $data['tahun_terbit'] ?></p>
                    <label class="fw-bold" for="title">Deskripsi</label>
                    <p id="title mb-5"><?= $data['deskripsi'] ?></p>
                    <label class="fw-bold" for="title">Bahasa</label>
                    <p id="title mb-5"><?= $data['bahasa'] ?></p>
                    <label class="fw-bold" for="title">Tag</label>
                    <p id="title mb-5"><?= str_replace(',', ', ', $data['tag']) ?></p>

                    <div class="row">
                        <div class="col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
                                <button class="btn btn-primary w-100" type="button">Sunting</button>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <button class="btn btn-danger w-100" type="button">Hapus</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <form action="transactions/Rezki_UpdateBook.php" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Sunting</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-4">
                                    <input type="text" name="id"
                                           value="<?= $data['id_buku'] ?>" hidden
                                           required>
                                    <label class="fw-bold" for="title">Judul Buku</label>
                                    <input type="text" class="form-control mt-2" id="title" name="title"
                                           aria-describedby="titleHelp"
                                           placeholder="Contoh: Pemrograman Web Bersama EAD"
                                           value="<?= $data['judul_buku'] ?>"
                                           required>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="author">Penulis</label>
                                    <input type="text" class="form-control mt-2" id="author" name="author"
                                           aria-describedby="authorHelp" placeholder="Rezki_1202190044"
                                           value="<?= $data['penulis_buku'] ?>" required readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="year">Tahun Terbit</label>
                                    <input type="text" class="form-control mt-2" id="year" name="year"
                                           aria-describedby="yearHelp"
                                           placeholder="Contoh: 1990" value="<?= $data['tahun_terbit'] ?>" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="description">Deskripsi</label>
                                    <textarea class="form-control mt-2" id="description" name="description"
                                              aria-describedby="descriptionHelp" rows="5"
                                              placeholder="Contoh: Buku ini menjelaskan tentang ...." required>
                                                <?= preg_replace('~\x{00a0}~siu', '', $data['deskripsi']); ?>
                                            </textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold me-5" for="language">Bahasa</label>
                                    <input class="form-check-input" type="radio" value="Indonesia" id="id"
                                           name="language"
                                           required
                                        <?php if ($data['bahasa'] == "Indonesia"): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="id" required>
                                        Indonesia
                                    </label>
                                    <input class="form-check-input" type="radio" value="Lainnya" id="other"
                                           name="language" required
                                        <?php if ($data['bahasa'] != "Indonesia"): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="other">
                                        Lainnya
                                    </label>
                                </div>
                                <div class="form-group mb-4">
                                    <?php
                                    if (isset($data['tag'])) {
                                        $tag = explode(",", $data['tag']);
                                    } else {
                                        $tag = [];
                                    }
                                    ?>
                                    <label class="fw-bold me-5" for="tag">Tag</label>
                                    <input class="form-check-input" type="checkbox" value="Pemrograman" id="pemrograman"
                                           name="tag[]"
                                        <?php if (in_array("Pemrograman", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="pemrograman">
                                        Pemrograman
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Website" id="website"
                                           name="tag[]"
                                        <?php if (in_array("Website", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="website">
                                        Website
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Java" id="java" name="tag[]"
                                        <?php if (in_array("Java", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="java">
                                        Java
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="MVC" id="mvc" name="tag[]"
                                        <?php if (in_array("MVC", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="mvc">
                                        MVC
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Kalkulus" id="kalkulus"
                                           name="tag[]"
                                        <?php if (in_array("Kalkulus", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label" for="kalkulus">
                                        Kalkulus
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Lainnya" id="lainnya"
                                           name="tag[]"
                                        <?php if (in_array("Lainnya", $tag)): ?> checked> <?php endif; ?>
                                    <label class="form-check-label me-3" for="lainnya">
                                        Lainnya
                                    </label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <form action="transactions/Rezki_DeleteBook.php" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id"
                                       value="<?= $data['id_buku'] ?>" hidden
                                       required>
                                <input type="text" name="image"
                                       value="<?= $data['gambar'] ?>" hidden
                                       required>
                                <p>Apakah Anda yakin ingin menghapus buku <?= $data['judul_buku'] ?> ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php } ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToastUpdate" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="assets/images/logo-ead.png" class="rounded me-2" alt="Logo EAD" width="20">
                <strong class="me-auto">Perpustakaan EAD</strong>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Berhasil memperbarui data buku
            </div>
        </div>
    </div>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript">
    let output = document.getElementById("description").value.trim();
    document.getElementById("description").innerHTML = output;

    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params['updated']) {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        let toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    }
</script>
</body>

</html>