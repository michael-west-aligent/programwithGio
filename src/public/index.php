<?php
use App\Invoice;
use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

/** SUPERGLOBALS  */
//are built in variables that are always  within all scope throughtout PHP code.

/** $_SERVER  */
//this contains all the information about  server and execution enviroment

//
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

$router = new App\Router();

//we can register some routes

//$router->register(
//    '/',
//    function() {
//    echo 'Home';
//});


$router
    ->register('/', [App\Classes\Home::class, 'index'])
    ->register('/invoices', [App\Classes\Invoice::class, 'index'])
    ->register('/invoices/create', [App\Classes\Invoice::class, 'create']);

//invoices page
//$router->register(
//    '/invoices',
//    function() {
//        echo 'Invoices';
//    }
//) ;

echo $router->resolve($_SERVER['REQUEST_URI'])       ;