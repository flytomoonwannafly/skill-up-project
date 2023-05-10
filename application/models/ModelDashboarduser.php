<?php

namespace Application\Model;
use Application\Component\DB;
use Application\Core\Model;

class ModelDashboarduser extends Model{

    public function __construct()
    {
        $this->db = new DB();
    }

    public function show_notes($id){

        $con=$this->db->connect();
        $check_query = "SELECT *  FROM Notes WHERE user_id = ?";
        $stmt = $con->prepare($check_query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $result->fetch_array();

        return $result;

    }
    public function delete_note($id){
        $con=$this->db->connect();
        $del_query = $con->prepare("DELETE FROM Notes WHERE id = ?");
        $del_query->bind_param("i", $id);
        $del_query->execute();

        $del_query->close();
        $con->close();

    }

}