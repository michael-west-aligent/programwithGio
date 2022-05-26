<?php

use App\App;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)::createImmutable(dirname(__DIR__));
$dotenv->load();


/** SUPERGLOBALS  */
//are built in variables that are always  within all scope throughtout PHP code.

/** $_SERVER  */
//this contains all the information about  server and execution enviroment

define('VIEW_PATH', __DIR__ . '/../views');

$router = new App\Router();

try {                                                                                     
    $router                                                                               
        ->get('/', [App\Controllers\HomeController::class, 'index'])                      
        ->post('/upload', [App\Controllers\HomeController::class, 'upload'])              
        ->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])           
        ->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])   
        ->post('/invoices/create', [App\Controllers\InvoiceController::class, 'store']);  

(new App($router, ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]))->run();
