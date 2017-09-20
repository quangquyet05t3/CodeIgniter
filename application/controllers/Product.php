<?php
class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('html');
        $this->load->helper('url');
    }

    public function index()
    {
        $detailData['product'] = array('1', '2', '3');
        $data = array(
            'templates_head' => $this->load->view('templates/head', '', true),
            'templates_header' => $this->load->view('templates/header', '', true),
            'templates_menu' => $this->load->view('templates/menu', '', true),
            'templates_product' => $this->load->view('templates/product', $detailData, true),
            'templates_footer' => $this->load->view('templates/footer', '', true)
        );

        $this->parser->parse('product/index', $data);
    }
}