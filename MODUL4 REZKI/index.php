<?php
session_start();
include "helper/constant.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php
if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] == true) {
        include "component/navigation_logged_in.php";
    } else {
        include "component/navigation_not_logged_in.php";
    }
} else {
    include "component/navigation_not_logged_in.php";
}
?>
<main>
    <div class="alert alert-success hide visually-hidden" role="alert" id="alert-login">
        Berhasil login
    </div>
    <div class="alert alert-success hide visually-hidden" role="alert" id="alert-booking">
        Berhasil memesan tiket
    </div>
    <section class="m-auto" id="login-form">
        <div class="container">
            <div class="content-page d-flex flex-column align-items-center px-5">
                <div class="card mt-5" style="width: 65rem">
                    <div class="card-body">
                        <div class="headline">
                            <h1 class="card-title text-center p-5">EAD Travel</h1>
                        </div>
                        <div class="row gx-4">
                            <div class="col-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="https://asset.kompas.com/crops/28S0TkvG7koDd1XpB5m9t-703Ww=/0x0:780x520/780x390/data/photo/2021/03/21/605753630590a.jpg"
                                         class="card-img-top" alt="Card-Images">
                                    <div class="card-body">
                                        <h5 class="card-title">Raja Ampat, Papua</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Nam ullamcorper condimentum ultrices. Fusce dignissim orci sed
                                            dolor bibendum, vel imperdiet tortor lacinia. Fusce pharetra
                                            interdum elit at laoreet. Cras egestas pellentesque eros ut mollis.
                                            Vivamus eu sem quis velit gravida hendrerit eu eget lectus.</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <p class="fw-bold">Rp7.000.000</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <button onclick="btnOrder('Raja Ampat, Papua', 7000000)" type="button"
                                                class="btn btn-primary w-100 btn-order" data-bs-toggle="modal"
                                                data-bs-target="#bookingModal">Pesan Tiket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="https://asset.kompas.com/crops/oUbd-oWgmK9GQitYBij1i8DX-1Y=/0x73:1280x713/750x500/data/photo/2019/07/24/5d37bf7ba9d0f.jpg"
                                         class="card-img-top" alt="Card-Images">
                                    <div class="card-body">
                                        <h5 class="card-title">Gunung Bromo, Malang</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Nam ullamcorper condimentum ultrices. Fusce dignissim orci sed
                                            dolor bibendum, vel imperdiet tortor lacinia. Fusce pharetra
                                            interdum elit at laoreet. Cras egestas pellentesque eros ut mollis.
                                            Vivamus eu sem quis velit gravida hendrerit eu eget lectus.</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <p class="fw-bold">Rp2.000.000</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <button onclick="btnOrder('Gunung Bromo, Malang', 2000000)" type="button"
                                                class="btn btn-primary w-100 btn-order" data-bs-toggle="modal"
                                                data-bs-target="#bookingModal">Pesan Tiket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem;">
                                    <img src="https://www.rentalmobilbali.net/wp-content/uploads/2019/12/Sunset-Pura-Tanah-Lot-Bali-Twitter.jpg"
                                         class="card-img-top" alt="Card-Images">
                                    <div class="card-body">
                                        <h5 class="card-title">Tanah Lot, Bali</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Nam ullamcorper condimentum ultrices. Fusce dignissim orci sed
                                            dolor bibendum, vel imperdiet tortor lacinia. Fusce pharetra
                                            interdum elit at laoreet. Cras egestas pellentesque eros ut mollis.
                                            Vivamus eu sem quis velit gravida hendrerit eu eget lectus.</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <p class="fw-bold">Rp5.000.000</p>
                                        <hr width="100%" size="3" class="bg-secondary"/>
                                        <button onclick="btnOrder('Tanah Lot, Bali', 5000000)" type="button"
                                                class="btn btn-primary w-100 btn-order" data-bs-toggle="modal"
                                                data-bs-target="#bookingModal">Pesan Tiket
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="transactions/store_booking.php" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bookingModalLabel">Tanggal Perjalanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="hidden-value">
                            <div class="form-group mb-4">
                                <input type="date" class="form-control mt-2" id="tanggal" name="tanggal"
                                       aria-describedby="dateHelp" required/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
<script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    const alertLogin = document.getElementById("alert-login");
    const alertBooking = document.getElementById("alert-booking");

    if (params['logged_in']) alertLogin.classList.remove("visually-hidden");
    if (params['created']) alertBooking.classList.remove("visually-hidden");


    var myModalEl = document.getElementById('bookingModal')
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
        document.getElementById("nama_tempat").remove();
        document.getElementById("lokasi").remove();
        document.getElementById("harga").remove();
    })

    function btnOrder(place, price) {
        var dataPlace = place.split(", ");


        var addPlace = document.createElement("input");
        var addLocation = document.createElement("input");
        var addPrice = document.createElement("input");

        Object.assign(addPlace, {
            id: "nama_tempat",
            name: "nama_tempat",
            type: "text",
            hidden: "hidden",
            value: dataPlace[0]
        });

        Object.assign(addLocation, {
            id: "lokasi",
            name: "lokasi",
            type: "text",
            hidden: "hidden",
            value: dataPlace[1]
        });

        Object.assign(addPrice, {
            id: "harga",
            name: "harga",
            type: "text",
            hidden: "hidden",
            value: price
        });

        const modal = document.getElementById("hidden-value");

        modal.append(addPlace);
        modal.append(addLocation);
        modal.append(addPrice);
    }
</script>
</body>

</html>