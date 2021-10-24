<!doctype html>
<html lang="en">
<head>
    <?php include "component/helper/head.php"; ?>
</head>
<body>
<?php
include "component/header.php";

$booking_number = rand(1000000000, 9999999999);
$username = $_POST['username'];

date_default_timezone_set('GMT');
$originalDate = $_POST['event'] . " " . $_POST['time'];

$checkin = date("d-m-Y H:i", strtotime($originalDate));
$checkout = date("d-m-Y H:i", (strtotime($originalDate) + 60 * 60 * $_POST['duration']));

$name = $_POST['name'];
$phone = $_POST['phone'];

$total_price = 0;
if ($name == 'Nusantara Hall') $total_price += (2000 * $_POST['duration']);
elseif ($name == 'Garuda Hall') $total_price += (1000 * $_POST['duration']);
elseif ($name == 'Gedung Serba Guna') $total_price += (500 * $_POST['duration']);

if (isset($_POST['services'])) {
    foreach ($_POST['services'] as $service) {
        if ($service == 'Catering') $total_price += 700;
        if ($service == 'Decoration') $total_price += 450;
        if ($service == 'Sound System') $total_price += 250;
    }
}

?>
<main class="mt-5">
    <h5 class="text-center" style="padding-top: 10px;">Thank you <?= $username ?> for reserving</h5>
    <h6 class="text-center">Please double check your reservations details</h6>
    <section id="table_reservation" style="min-height: 390px">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Booking Number</th>
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
                    <th scope="row"><?= $booking_number ?></th>
                    <td><?= $username ?></td>
                    <td><?= $checkin ?></td>
                    <td><?= $checkout ?></td>
                    <td><?= $name ?></td>
                    <td><?= $phone ?></td>
                    <td>
                        <ul>
                            <?php

                            if (isset($_POST['services'])) {
                                foreach ($_POST['services'] as $service) {
                                    echo "<li>$service</li>";
                                }
                            } else {
                                echo "No Service";
                            }

                            ?>
                        </ul>
                    </td>
                    <td><?= '$' . $total_price ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
</body>
</html>