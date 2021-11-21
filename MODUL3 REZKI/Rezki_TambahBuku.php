<?php
include "helper/constant.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
    <?php include "component/helper/head.php" ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
          rel="stylesheet">
</head>

<body>
<?php include "component/navigation.php"; ?>>
<main>
    <section class="m-auto shadow p-3 mb-5 bg-body rounded w-75 mt-5 p-5" id="add-book">
        <div class="container">
            <div class="content-page">
                <h4 class="fw-bold text-center">Tambah Data Buku</h4>
                <form action="transactions/Rezki_CreateBook.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <label class="fw-bold" for="title">Judul Buku</label>
                        <input type="text" class="form-control mt-2" id="title" name="title"
                               aria-describedby="titleHelp" placeholder="Contoh: Pemrograman Web Bersama EAD" required
                               autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label class="fw-bold" for="author">Penulis</label>
                        <input type="text" class="form-control mt-2" id="author" name="author"
                               aria-describedby="authorHelp" placeholder="<?= USERNAME ?>" value="Rezki_1202190044"
                               required readonly autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label class="fw-bold" for="year">Tahun Terbit</label>
                        <input type="text" class="form-control mt-2" id="year" name="year"
                               aria-describedby="yearHelp" placeholder="Contoh: 1990" required autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label class="fw-bold" for="description">Deskripsi</label>
                        <textarea class="form-control mt-2" id="description" name="description"
                                  aria-describedby="descriptionHelp" rows="5"
                                  placeholder="Contoh: Buku ini menjelaskan tentang ...." required
                                  autocomplete="off"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fw-bold me-5" for="language">Bahasa</label>
                        <input class="form-check-input" type="radio" value="Indonesia" id="id" name="language" required>
                        <label class="form-check-label me-3" for="id">
                            Indonesia
                        </label>
                        <input class="form-check-input" type="radio" value="Lainnya" id="other" name="language"
                               required>
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
                        <input class="form-check-input" type="checkbox" value="Website" id="website" name="tag[]">
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
                        <input class="form-check-input" type="checkbox" value="Kalkulus" id="kalkulus" name="tag[]">
                        <label class="form-check-label me-3" for="kalkulus">
                            Kalkulus
                        </label>
                        <input class="form-check-input" type="checkbox" value="Lainnya" id="lainnya" name="tag[]">
                        <label class="form-check-label me-3" for="lainnya">
                            Lainnya
                        </label>
                    </div>
                    <div class="form-group mb-4">
                        <label class="fw-bold me-5" for="image">Gambar</label>
                        <input type="file" accept="image/png, image/gif, image/jpeg"
                               class="custom-file-input form-control mt-2" id="image" name="image" required
                               autocomplete="off">
                    </div>
                    <center>
                        <button class="btn btn-primary w-50 mt-5" type="submit">+ TAMBAH</button>
                    </center>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript" src="assets/js/datepicker.js"></script>
</body>

</html>