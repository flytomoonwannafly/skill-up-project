<?php

namespace Application\Component;
include 'application/Config/db.configs.php';
class DB
{
        public function connect()
    {
        $host = HOST;
        $user = USER;
        $pass = PASS;
        $db = DBNAME;
        $connection = mysqli_connect($host, $user, $pass, $db);
        return $connection;
    }

}