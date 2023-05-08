<?php

namespace Application\Model;
use Application\Component\DB;
use Application\Core\Model;

class ModelUser extends Model
{
    public function register_user($login, $password)
    {
        $db = new DB();
        $con=$db->connect();

        $stmt = $con->prepare("INSERT INTO Users (user_name, password) VALUES (?, ?)");
        $stmt->bind_param('ss', $login, $password);

        $stmt->execute();
        return true;

        $stmt->close();
    }
    public function auth($login, $password){
        $db = new DB();
        $con=$db->connect();

        $stmt = $con->prepare('SELECT * FROM Users WHERE user_name = ? AND password = ?');
        $stmt->bind_param('ss', $login, $password);

        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            return true;
        } else {
            return false;
        }

        $stmt->close();



    }
}