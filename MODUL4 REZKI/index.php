<?php

include "helper/constant.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include "component/helper/head.php" ?>
</head>

<body>
<?php include "component/navigation_logged_in.php"; ?>
<main>
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
                                    <img src="https://asset.kompas.com/crops/28S0TkvG7koDd1XpB5m9t-703Ww=/0x0:780x520/780x390/data/photo/2021/03/21/605753630590a.jpg"
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
                                    <img src="https://asset.kompas.com/crops/28S0TkvG7koDd1XpB5m9t-703Ww=/0x0:780x520/780x390/data/photo/2021/03/21/605753630590a.jpg"
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
                    <form action="#" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bookingModalLabel">Tanggal Perjalanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="hidden-value">
                            <div class="form-group mb-4">
                                <input type="date" class="form-control mt-2" id="date" name="date"
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
    var myModalEl = document.getElementById('bookingModal')
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
        document.getElementById("place").remove();
        document.getElementById("location").remove();
        document.getElementById("price").remove();
    })

    function btnOrder(place, price) {
        var dataPlace = place.split(", ");


        var addPlace = document.createElement("input");
        var addLocation = document.createElement("input");
        var addPrice = document.createElement("input");

        Object.assign(addPlace, {
            id: "place",
            name: "place",
            type: "text",
            hidden: "hidden",
            value: dataPlace[0]
        });

        Object.assign(addLocation, {
            id: "location",
            name: "location",
            type: "text",
            hidden: "hidden",
            value: dataPlace[1]
        });

        Object.assign(addPrice, {
            id: "price",
            name: "price",
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