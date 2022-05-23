<?php
declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index(): string
    {
    return <<<FORM
    <form action="/upload" method="post" enctype="multipart/form-data"> 
    <input type="file" name="receipt" />
    <button type="submit">Upload </button>
FORM;



    }

//        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
//        return View::make('index', $_GET)->render();

//        return 'Home';

//        echo '<pre>';
//        var_dump($_REQUEST);
//        echo '</pre>';
//
//        echo '<pre>';
//        var_dump($_GET);
//        echo '</pre>';
//
//
//        echo '<pre>';
//        var_dump($_POST);
//        echo '</pre>';

//        return '<form action "/?foo=bar&amount=250" method="post"><label> Amount </label><input type="text" name="amount"> </form> ';



    public  function upload()
    {

    }
}