<?php
class Library extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('some_class');
        $sum = $this->some_class->some_method();
        echo $sum;
    }
}