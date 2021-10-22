<!doctype html>
<html lang="en">
<head>
    <?php include "component/helper/head.php"; ?>
</head>
<body>
<?php
include "component/header.php";
$username = $GLOBALS['username'];
$name = $_POST['name'];
$photo = $_POST['image'];
$photo_default = $GLOBALS['image'];
?>
<main class="mt-5">
    <h5 class="text-center" style="padding-top: 10px;">WELCOME TO ESD VENUE RESERVATION</h5>
    <section id="hotel">
        <div class="container">
            <h6 class="text-center text-light  bg-dark" style="padding: 5px;">Reserve your venue now!</h6>
            <div class="row g-0">
                <div class="col-lg-5 col-md-5 col-sm-12 d-flex justify-content-center">
                    <?php if (isset($photo)) : ?>
                        <img class="m-auto p-3"
                             src="<?= $photo ?>"
                             alt="photo" height="250px" width="600px">
                    <?php else : ?>
                        <img class="m-auto p-3"
                             src="<?= $photo_default ?>"
                             alt="default" height="250px" width="600px">
                    <?php endif; ?>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <form action="mybooking" method="post" class="ms-5 mt-5">
                        <div class="form-group mt-3">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username"
                                   name="username"
                                   placeholder="Enter name" value="<?= $username ?>" readonly>
                        </div>
                        <div class="form-group mt-3">
                            <label for="event">Event Date</label>
                            <input type="date" class="form-control" id="event" aria-describedby="event" name="event"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="time">Start Time</label>
                            <input type="time" class="form-control" id="time" aria-describedby="time" name="time"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="duration">Duration (Hours)</label>
                            <input type="number" class="form-control" id="duration" aria-describedby="duration"
                                   name="duration" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="building">Building Type</label>
                            <?php if (isset($name)) : ?>
                                <select class="form-control" id="building" name="name" required>
                                    <option selected value="<?= $name ?>"><?= $name ?></option>
                                </select>
                            <?php else : ?>
                                <select class="form-control" id="building" name="name" required>
                                    <option value="">Choose..</option>
                                    <option value="Nusantara Hall">Nusantara Hall</option>
                                    <option value="Garuda Hall">Garuda Hall</option>
                                    <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                                </select>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" aria-describedby="phone" name="phone"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Add Services(s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Catering" id="catering"
                                       name="services[]">
                                <label class="form-check-label" for="catering">
                                    Catering / $700
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Decoration" id="decoration"
                                       name="services[]">
                                <label class="form-check-label" for="decoration">
                                    Decoration / $450
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sound System" id="sound"
                                       name="services[]">
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