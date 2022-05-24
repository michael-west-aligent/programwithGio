<?php
use App\Invoice;
use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)::createImmutable(dirname(__DIR__));
$dotenv->load();


/** SUPERGLOBALS  */
//are built in variables that are always  within all scope throughtout PHP code.

/** $_SERVER  */
//this contains all the information about  server and execution enviroment

//
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

define('VIEW_PATH', __DIR__ . '/../views');

$router = new App\Router();

//we can register some routes

//$router->register(
//    '/',
//    function() {
//    echo 'Home';
//});

try {                                                                                     
    $router                                                                               
        ->get('/', [App\Controllers\HomeController::class, 'index'])                      
        ->post('/upload', [App\Controllers\HomeController::class, 'upload'])              
        ->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])           
        ->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])   
        ->post('/invoices/create', [App\Controllers\InvoiceController::class, 'store']);  

//invoices page
//$router->register(
//    '/invoices',
//    function() {
//        echo 'Invoices';
//    }
//) ;


    echo $router->resolve(
        $_SERVER['REQUEST_URI'],
        strtolower($_SERVER['REQUEST_METHOD']));

} catch(App\Exceptions\RouteNotFoundException $e) {
    http_response_code(404); 
   echo \App\View::make('error/404');

}
//
//var_dump($_SESSION);
