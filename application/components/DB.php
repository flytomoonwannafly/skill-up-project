<?php

namespace Application\Component;
include 'application/Config/db.configs.php';

class DB
{
    public function connect()
    {
        try {
            $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Перевірка підключення до бази даних
            if (!$connection) {
                throw new Exception("Помилка підключення до бази даних");
            }
            return $connection;

            mysqli_close($connection);
        } catch (Exception $e) {
            // Обробка помилки підключення до бази даних
            echo "На жаль, виникла помилка: " . $e->getMessage();
        }
    }

}