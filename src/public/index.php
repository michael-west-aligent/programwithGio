<?php
use App\Invoice;
use App\InvoiceCollection;

require_once __DIR__ . '/../vendor/autoload.php';

//array
//foreach(['a', 'b', 'c', 'd', 'e'] as $key => $value) {

//replace array with an object of invoice class
//

//foreach(new App\Invoice(25) as $key=> $value)  {
//
//    //we get the id number and value amount
//    echo $key . ' = ' . $value . PHP_EOL;
//}

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach($invoiceCollection as $invoice ) {
//    var_dump($invoice);
    echo $invoice->id . '-' . $invoice->amount .  PHP_EOL;
}