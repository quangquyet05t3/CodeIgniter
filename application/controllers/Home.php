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
        $this->load->model('type_model');
        $dataType['types'] = $this->type_model->get_type();

        $this->load->library('br_config');
        $path_image = $this->br_config->get_path_image();
        $this->load->model('product_model');
        $dataProduct['products'] = $this->product_model->get_all_product();
        $dataProduct['path_image'] = $path_image;




        $data = array(
            'templates_head' => $this->load->view('templates/head', '', true),
            'templates_header' => $this->load->view('templates/header', '', true),
            'templates_menu_slide' => $this->load->view('templates/menu_slide', $dataType, true),
            'templates_product' => $this->load->view('templates/product', $dataProduct, true),
            'templates_footer' => $this->load->view('templates/footer', '', true)
        );

        $this->parser->parse('home/index', $data);
    }
}