<?php
declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;
use App\App;

class HomeController
{
    public function index(): View
    {
        var_dump($_ENV['DB_HOST']);

        $db = App::db();

        $first_name = 'Josssh';
        $last_name = 'Cdoaswwwfowq';
        $email = 'johwaswwddasny@email.com';
        $amount = 25;

        try {
            $db->beginTransaction();

            $newUserStmt = $db->prepare(
                'INSERT INTO users (first_name, last_name, email, created_at, is_active)
                    VALUES (?, ?, ?,NOW(), 1)'
            );

            $newInvoiceStmt = $db->prepare(
                'INSERT INTO invoices (amount, user_id)
                        VALUES (?, ? )'
            );

            $newUserStmt->execute([$email, $first_name, $last_name]);

            $userId = (int)$db->lastInsertId();

            $newInvoiceStmt->execute([$amount, $userId]);

            $db->commit();
        } catch(\Throwable $e){
            if($db->inTransaction()) {
                $db->rollBack();
            }
        }
        $fetchStmt = $db->prepare(
            'SELECT invoices.id AS invoice_id, amount, user_id, first_name, last_name
                FROM invoices
                INNER JOIN users ON user_id = users.id
                WHERE email = ?'
        );

        $fetchStmt->execute([$email]);

        echo '<pre>';
        var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';


        return View::make('index', ['foo' => 'bar']);
    }

    public  function upload()
    {

    }
}