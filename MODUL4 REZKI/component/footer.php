<footer class="pt-4">
    <div class="container">
        <div class="d-flex flex-column bd-highlight align-items-center">
            <p class="text-center">&copy; 2021 Copyright <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#footerModal"><?= USERNAME ?></a></p>
        </div>
    </div>
    </div>
    <div class="modal fade" id="footerModal" tabindex="-1" aria-labelledby="footerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="footerModalLabel">Created By</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>&emsp; :</td>
                            <td>&nbsp; <?= NAME ?></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>&emsp; :</td>
                            <td>&nbsp; <?= NIM ?></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</footer>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="
            sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin=" anonymous ">
</script>