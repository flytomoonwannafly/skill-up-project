<?php

namespace Application\Component;
include 'application/Config/db.configs.php';

class DB
{
    public function connect()
    {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }

}