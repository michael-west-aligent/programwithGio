<?php
declare(strict_types=1);

namespace App\Controllers;

use App;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {

        var_dump($_ENV['DB_HOST']);

//        try {
//            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root', [
////            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
//             PDO::ATTR_EMULATE_PREPARES => false,
//            ]);
//
        try {


            $db = new PDO(
                'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

            $first_name = 'Josha';
            $last_name = 'Cdofaowq';
            $email = 'johddaasny@email.com';
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
//
//

//
//            $first_name = "Roe1qq";
//            $last_name = "asas1";
//            $email = "roqqe@1email.com";
//            $created_at = date('Y-m-d H:m:i', strtotime('07/11/2021 9:00pm'));
//            $is_active = 1;
//            $query = 'INSERT INTO users (first_name, last_name, email, created_at, is_active, updated_at)
//                        VALUES(:firstName, :lastName, :email, :date1, :active, :date2)' ;

//
//            $stmt = $db->prepare($query);
//
//            $stmt->bindValue('firstName', $first_name);
//            $stmt->bindValue('lastName', $last_name);
//            $stmt->bindValue('email', $email);
//            $stmt->bindValue('date1', $created_at);
//            $stmt->bindValue('date2', $created_at);
//            $stmt->bindParam('active', $is_active, PDO::PARAM_BOOL);
//
//            $is_active = 0;
//            $name = 'foo bar';

//            $stmt->execute(
////                [
////                'firstName' => $first_name,
////                'lastName' => $last_name,
////                'email' => $email,
////                'date' => $created_at,
////                'active' => $is_active,
////                ]
//            );

//            $id = (int) $db->lastInsertId();
//
//            $id = 33;
//
//            $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();
//            $stmt = $db->query($query);
//            var_dump($stmt->fetchAll());


                echo '<pre>';
                var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
                echo '</pre>';

//        } catch(\PDOException $e) {
//            var_dump($e->getCode());
//            throw new \PDOException($e->getMessage(), (int) $e->getCode());
//        }

    return View::make('index', ['foo' => 'bar']);
    }




    public  function upload()
    {

    }
}