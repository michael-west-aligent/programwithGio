<?php

require_once __DIR__ . '/../vendor/autoload.php';

$service = new App\DebtCollectionService();

echo $service->collectDebt(new App\Rocky()) . PHP_EOL;




//$fields = [
////    new \App\Field('basefield'),
//    new \App\Text('textField'),
////    new \App\Boolean('booleanField'),
//    new \App\Checkbox('checkboxField'),
//    new \App\Radio('radioField'),
//];
//
//foreach($fields as $field) {
//    echo $field->render() . '<br />';
//}