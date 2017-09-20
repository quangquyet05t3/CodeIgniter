<?php
class Type extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_type()
    {
        $query = $this->db->get('br_type');
        return $query->result_array();
    }
};