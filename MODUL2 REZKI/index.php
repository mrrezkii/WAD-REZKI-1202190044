<?php
    // APP ROUTE
    $project_location = "/WAD-REZKI-1202190044/MODUL2%20REZKI";
    $me = $project_location;

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me . '/' :
            require "pages/home.php";
            break;
        case $me . '/home' :
            require "pages/home.php";
            break;
        case $me . '/booking' :
            require "pages/booking.php";
            break;
        case $me . '/mybooking' :
            require "pages/my_booking.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
?>