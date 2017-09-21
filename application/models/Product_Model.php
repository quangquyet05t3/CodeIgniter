<?php
class Product_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_product()
    {
        $query = $this->db->get('br_product');
        return $query->result_array();
    }

    public function get_product_by_id($id)
    {
        $this->db->select('*')
            ->from('br_product');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
};