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
            <h6 class="text-center text-light  bg-dark" style="padding: 5px;">Reserve your venue now!</h6>
            <div class="row g-0">
                <div class="col-lg-5 col-md-5 col-sm-12 d-flex justify-content-center">
                    <img class="m-auto p-3"
                         src="https://id.yamaha.com/id/files/jpg_eis_hall_main_1200x600_0892d7db9d88873041cda38e6845ecfc.jpg"
                         alt="Card image cap" height="250px">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <form action="#" method="get" class="ms-5 mt-5">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                                   placeholder="Enter email" value="<?= $GLOBALS['username'] ?>" readonly>
                        </div>
                        <div class="form-group mt-3">
                            <label for="event">Event Date</label>
                            <input type="date" class="form-control" id="event" aria-describedby="event" name="event">
                        </div>
                        <div class="form-group mt-3">
                            <label for="time">Start Time</label>
                            <input type="time" class="form-control" id="time" aria-describedby="time" name="time">
                        </div>
                        <div class="form-group mt-3">
                            <label for="duration">Duration (Hours)</label>
                            <input type="number" class="form-control" id="duration" aria-describedby="duration"
                                   name="duration">
                        </div>
                        <div class="form-group mt-3">
                            <label for="building">Building Type</label>
                            <select class="form-control" id="building" name="building">
                                <option selected>Choose..</option>
                                <option>Nusantara Hall</option>
                                <option>Garuda Hall</option>
                                <option>Gedung Serba Guna</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" aria-describedby="phone" name="phone">
                        </div>
                        <div class="form-group mt-3">
                            <label>Add Services(s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="catering" id="catering"
                                       name="catering">
                                <label class="form-check-label" for="catering">
                                    Catering / $700
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="decoration" id="decoration"
                                       name="decoration">
                                <label class="form-check-label" for="decoration">
                                    Decoration / $450
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="sound" id="sound" name="sound">
                                <label class="form-check-label" for="sound">
                                    Sound System / $250
                                </label>
                            </div>
                        </div>
                        <div class="form-group mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">Book</button>
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