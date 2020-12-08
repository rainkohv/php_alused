<?php
/*
 * Ülesanne 8
 * Rain Kohv
 * 08.12.2020
 */
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time())."<br>";

$synniaasta = 1994;
    echo 'Kasutaja vanus sellel aastal on '.(date('Y') - $synniaasta)."<br>";

$date1 = new DateTime('2020-12-08');
$date2 = new DateTime('2021-06-06');
$days  = $date2->diff($date1)->format('%a');
echo "Kooli lõpuni on ".$days." päeva"."<br>";

$today = new DateTime();

$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$fall = new DateTime('September 22');
$winter = new DateTime('December 21');

switch(true) {
    case $today >= $spring && $today < $summer:
        echo 'Kevad!';
        break;

    case $today >= $summer && $today < $fall:
        echo 'Suvi!';
        break;

    case $today >= $fall && $today < $winter:
        echo 'Sügis!';
        break;

    default:
        echo 'Talv!';
}