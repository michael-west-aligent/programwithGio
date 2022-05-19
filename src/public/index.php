<?php

require_once __DIR__ . '/../vendor/autoload.php';

$fields = [
//    new \App\Field('basefield'),
    new \App\Text('textField'),
//    new \App\Boolean('booleanField'),
    new \App\Checkbox('checkboxField'),
    new \App\Radio('radioField'),
];

foreach($fields as $field) {
    echo $field->render() . '<br />';
}