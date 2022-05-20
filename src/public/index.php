<?php


require_once __DIR__ . '/../vendor/autoload.php';


$dateTime = new DateTime();

//var_dump($dateTime);

$dateTime->setTimezone(new DateTimeZone('Australia/Adelaide'));

//var_dump($dateTime);

echo $dateTime->format('m/d/Y g:i A') . PHP_EOL;