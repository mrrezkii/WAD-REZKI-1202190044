<?php
$GLOBALS['username'] = 'Rezki_1202190044';
$GLOBALS['image'] = "https://thekasablanka.com/wp-content/uploads/2021/04/Home-About-us.png";
$GLOBALS['location'] = "/WAD-REZKI-1202190044/MODUL2%20REZKI";

$me = $GLOBALS['location'];

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $me . '/home':
    case $me . '/' :
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
