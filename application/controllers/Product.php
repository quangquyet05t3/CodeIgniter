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
            'templates_menu' => $this->load->view('templates/menu', $dataType, true),
            'templates_product' => $this->load->view('templates/product', $dataProduct, true),
            'templates_footer' => $this->load->view('templates/footer', '', true)
        );

        $this->parser->parse('product/index', $data);
    }

    public function view($id)
    {
        $this->load->library('br_config');
        $path_image = $this->br_config->get_path_image();
        $this->load->model('product_model');
        $dataProduct['product'] = $this->product_model->get_product_by_id($id);
        $dataProduct['path_image'] = $path_image;

        if (empty($dataProduct['product']))
        {
            show_404();
        }

        $this->load->model('type_model');
        $dataType['types'] = $this->type_model->get_type();

        $data = array(
            'templates_head' => $this->load->view('templates/head', '', true),
            'templates_header' => $this->load->view('templates/header', '', true),
            'templates_menu' => $this->load->view('templates/menu', $dataType, true),
            'detail_detail' => $this->load->view('detail/detail', $dataProduct, true),
            'templates_footer' => $this->load->view('templates/footer', '', true)
        );

        $this->parser->parse('detail/index', $data);
    }
}