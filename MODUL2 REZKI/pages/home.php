<!doctype html>
<html lang="en">
<head>
    <?php include "component/helper/head.php"; ?>
</head>
<body>
<?php include "component/header.php"; ?>
<main class="mt-5">
    <h5 class="text-center" style="padding-top: 10px;">WELCOME TO ESD VENUE RESERVATION</h5>
    <section id="hotel">
        <div class="container">
            <h6 class="text-center text-light  bg-dark" style="padding: 5px;">Find your best deal for your event,
                here!</h6>
            <div class="row g-0">
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center">
                    <form method="post" action="booking">
                        <div class="card" style="width: 22rem;">
                            <img class="card-img-top"
                                 src="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/IMG_0836_l7p7uz/ice-indonesia-convention-exhibition_wedding-at-ice-bsd1487580049_10.jpg"
                                 alt="Card image cap">
                            <input name="image"
                                   value="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/IMG_0836_l7p7uz/ice-indonesia-convention-exhibition_wedding-at-ice-bsd1487580049_10.jpg"
                                   hidden>
                            <div class="card-body">
                                <h5 class="card-title">Nusantara Hall</h5>
                                <input name="name" value="Nusantara Hall" hidden>
                                <div class="card-text">
                                    <p class="text-secondary">$2000 / Hour</p>
                                    <p class="text-secondary">5000 / Capacity</p>
                                    <input name="price" value="$2000" hidden>
                                    <input name="capacity" value="5000" hidden>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-success">Free Parking</li>
                                <li class="list-group-item text-success">Full Ac</li>
                                <li class="list-group-item text-success">Cleaning Service</li>
                                <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                                <li class="list-group-item bg-light">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center">
                    <form method="post" action="booking">
                        <div class="card" style="width: 22rem;">
                            <img class="card-img-top"
                                 src="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg"
                                 alt="Card image cap">
                            <input name="image"
                                   value="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg"
                                   hidden>
                            <div class="card-body">
                                <h5 class="card-title">Garuda Hall</h5>
                                <input name="name" value="Garuda Hall" hidden>
                                <div class="card-text">
                                    <p class="text-secondary">$1000 / Hour</p>
                                    <p class="text-secondary">2000 / Capacity</p>
                                    <input name="price" value="$1000" hidden>
                                    <input name="capacity" value="2000" hidden>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-success">Free Parking</li>
                                <li class="list-group-item text-success">Full Ac</li>
                                <li class="list-group-item text-danger">No Cleaning Service</li>
                                <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                                <li class="list-group-item bg-light">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center">
                    <form method="post" action="booking">
                        <div class="card" style="width: 22rem;">
                            <img class="card-img-top"
                                 src="https://jabarprov.go.id/assets/images/berita/gambar_25191.jpg"
                                 alt="Card image cap">
                            <input name="image" value="https://jabarprov.go.id/assets/images/berita/gambar_25191.jpg"
                                   hidden>
                            <div class="card-body">
                                <h5 class="card-title">Gedung Serba Guna</h5>
                                <input name="name" value="Gedung Serba Guna" hidden>
                                <div class="card-text">
                                    <p class="text-secondary">$500 / Hour</p>
                                    <p class="text-secondary">500 / Capacity</p>
                                    <input name="price" value="$500" hidden>
                                    <input name="capacity" value="500" hidden>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-danger">No Free Parking</li>
                                <li class="list-group-item text-danger">No Full Ac</li>
                                <li class="list-group-item text-danger">No Cleaning Service</li>
                                <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                                <li class="list-group-item bg-light">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Book Now">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
</main>
<?php include "component/footer.php"; ?>
</body>
</html>