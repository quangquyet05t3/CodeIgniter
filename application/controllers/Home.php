<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('html');
        $this->load->helper('url');
    }

    public function index()
    {
        $productData['product'] = array('1', '2', '3');
        $data = array(
            'templates_head' => $this->load->view('templates/head', '', true),
            'templates_header' => $this->load->view('templates/header', '', true),
            'templates_menu_slide' => $this->load->view('templates/menu_slide', '', true),
            'templates_product' => $this->load->view('templates/product', $productData, true),
            'templates_footer' => $this->load->view('templates/footer', '', true)
        );

        $this->parser->parse('home/index', $data);
    }
}