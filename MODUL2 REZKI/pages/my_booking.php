<!doctype html>
<html lang="en">
<head>
    <?php include "component/helper/head.php"; ?>
</head>
<body>
<?php include "component/header.php"; ?>
<main class="mt-5">
    <h5 class="text-center" style="padding-top: 10px;">Thank you <?= $_POST['name'] ?> for reserving</h5>
    <h6 class="text-center">Please double check your reservations details</h6>
    <section id="table_reservation" style="min-height: 450px">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Booking</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Building Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-light">
                    <th scope="row">#1202190044</th>
                    <td><?= $_POST['username'] ?></td>
                    <td>11-10-2021 10:00:00</td>
                    <td>11-10-2021 10:00:00</td>
                    <td><?= $_POST['name'] ?></td>
                    <td><?= $_POST['phone'] ?></td>
                    <td>
                        <ul>
                            <?php
                            foreach ($_POST['services'] as $service) {
                                echo "<li>$service</li>";
                            }
                            ?>
                        </ul>
                    </td>
                    <td>$4150</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
</body>
</html>