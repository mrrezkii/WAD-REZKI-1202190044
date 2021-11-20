<!DOCTYPE html>
<html>

<head>
    <title>Detail Buku</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation.php"; ?>
<main>
    <section class="m-auto shadow p-3 mb-5 bg-body rounded w-75 mt-5 p-5" id="detail-book">
        <div class="container">
            <h4 class="fw-bold text-center">Detail Buku</h4>
            <center>
                <img class="my-3"
                     src="https://www.gramedia.com/blog/content/images/2019/05/Sebuah-Seni-Untuk-Bersikap-Bodo-Amat-1.jpg">
            </center>
            <hr width="100%" size="6" class="bg-primary">
            <form>
                    <label class="fw-bold" for="title">Judul Buku</label>
                    <p id="title mb-5">Pemrograman Web</p>
                    <label class="fw-bold" for="title">Penulis</label>
                    <p id="title mb-5">Rezki_1202190044</p>
                    <label class="fw-bold" for="title">Tahun Terbit</label>
                    <p id="title mb-5">2921</p>
                    <label class="fw-bold" for="title">Deskripsi</label>
                    <p id="title mb-5">Buku ini mengenai pemrograman web</p>
                    <label class="fw-bold" for="title">Bahasa</label>
                    <p id="title mb-5">Indonesia</p>
                    <label class="fw-bold" for="title">Tag</label>
                    <p id="title mb-5">Pemrograman, Website, OOP</p>
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
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Sunting</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="title">Judul Buku</label>
                                    <input type="text" class="form-control mt-2" id="title" name="title"
                                        aria-describedby="titleHelp" placeholder="Contoh: Pemrograman Web Bersama EAD"
                                        required>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="author">Penulis</label>
                                    <input type="text" class="form-control mt-2" id="author" name="author"
                                        aria-describedby="authorHelp" placeholder="Rezki_1202190044"
                                        value="Rezki_1202190044" required readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="year">Tahun Terbit</label>
                                    <input type="text" class="form-control mt-2" id="year" name="year"
                                        aria-describedby="yearHelp" placeholder="Contoh: 1990" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="description">Deskripsi</label>
                                    <textarea class="form-control mt-2" id="description" name="description"
                                        aria-describedby="descriptionHelp" rows="5"
                                        placeholder="Contoh: Buku ini menjelaskan tentang ...." required></textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold me-5" for="language">Bahasa</label>
                                    <input class="form-check-input" type="radio" value="id" id="id" name="language"
                                        required>
                                    <label class="form-check-label me-3" for="id" required>
                                        Indonesia
                                    </label>
                                    <input class="form-check-input" type="radio" value="other" id="other"
                                        name="language" required>
                                    <label class="form-check-label me-3" for="other">
                                        Lainnya
                                    </label>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold me-5" for="tag">Tag</label>
                                    <input class="form-check-input" type="checkbox" value="Pemrograman" id="pemrograman"
                                        name="tag[]">
                                    <label class="form-check-label me-3" for="pemrograman">
                                        Pemrograman
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Website" id="website"
                                        name="tag[]">
                                    <label class="form-check-label me-3" for="website">
                                        Website
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Java" id="java" name="tag[]">
                                    <label class="form-check-label me-3" for="java">
                                        Java
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="MVC" id="mvc" name="tag[]">
                                    <label class="form-check-label me-3" for="mvc">
                                        MVC
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Kalkulus" id="kalkulus"
                                        name="tag[]">
                                    <label class="form-check-label me-3" for="kalkulus">
                                        Kalkulus
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Lainnya" id="lainnya"
                                        name="tag[]">
                                    <label class="form-check-label me-3" for="lainnya">
                                        Lainnya
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus buku (ini) ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
</body>

</html>