<?php


echo time();

echo time() * 7 * 24 * 60 * 60;

echo mktime(0, 0, 0, 1, 1, 2000);

// date($format, $timestamp);

echo date("1 F jS, Y - g:ia", time());

// constantes de fecha


// ejemplo 7-3 verificacion de la validez de la fecha

$month = 9;
$day = 31;
$year = 2022;

if (checkdate($month, $day, $year)) {
    # code...
    echo "Date  is valid";
} else {
    echo "Date is invalid";
}

