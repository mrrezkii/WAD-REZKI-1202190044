<!doctype html>
<html lang="en">
<head>
    <?php include "component/helper/head.php"; ?>
</head>
<body>
<?php
include "component/header.php";
$originalDate = $_POST['event'] . " " . $_POST['time'];
$newDate = date("d-m-Y H:i", strtotime($originalDate));

date_default_timezone_set('GMT');
$checkout = date("d-m-Y H:i", (strtotime($originalDate) + 60 * 60 * $_POST['duration']));

$total_price = 0;
foreach ($_POST['services'] as $service) {
    if ($service == 'Catering') $total_price += 700;
    if ($service == 'Decoration') $total_price += 450;
    if ($service == 'Sound System') $total_price += 250;
}

?>
<main class="mt-5">
    <h5 class="text-center" style="padding-top: 10px;">Thank you <?= $_POST['name'] ?> for reserving</h5>
    <h6 class="text-center">Please double check your reservations details</h6>
    <section id="table_reservation" style="min-height: 390px">
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
                    <th scope="row"><?= rand() ?></th>
                    <td><?= $_POST['username'] ?></td>
                    <td><?= $newDate ?></td>
                    <td><?= $checkout ?></td>
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
                    <td><?= $total_price ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include "component/footer.php"; ?>
</body>
</html>