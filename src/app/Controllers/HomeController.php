<?php
declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {

        try {
            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root');
        } catch(\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

     var_dump($db);

    return View::make('index', ['foo' => 'bar']);
    }




    public  function upload()
    {

    }
}