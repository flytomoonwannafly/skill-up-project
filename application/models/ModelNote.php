<?php

namespace Application\Model;

use Application\Component\DB;
use Application\Core\Model;

class ModelNote extends Model
{

    public function __construct()
    {
        $this->db = new DB();
    }

    public function show_notes($id)
    {

        $con = $this->db->connect();
        $check_query = "SELECT *  FROM Notes WHERE user_id = ?";
        $stmt = $con->prepare($check_query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $result->fetch_array();

        return $result;

    }

    public function delete_note($id)
    {
        $con = $this->db->connect();
        $del_query = $con->prepare("DELETE FROM Notes WHERE id = ?");
        $del_query->bind_param("i", $id);
        $del_query->execute();

        $del_query->close();
        $con->close();

    }

    public function create_note($user_id, $title, $content)
    {
        $con = $this->db->connect();
        $stmt = $con->prepare("INSERT INTO Notes (user_id, title, content) VALUES (?, ?, ?)");
        $stmt->bind_param('iss', $user_id, $title, $content);
        $stmt->execute();
        $stmt->close();
    }

    public function show_note($id)
    {
        $con = $this->db->connect();
        // Показати окремий нотаток за його айді

        $sel_query = "SELECT * FROM Notes WHERE id = ?";
        $stmt = $con->prepare($sel_query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result->fetch_array();
    }

    public function update_note($title, $content, $id)
    {
        $con = $this->db->connect();

        // Підготовка запиту з параметрами
        $query = "UPDATE Notes SET title = ?, content = ? WHERE id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ssi', $title, $content, $id);

// Виконання запиту
        $stmt->execute();
        $stmt->close();

    }
}