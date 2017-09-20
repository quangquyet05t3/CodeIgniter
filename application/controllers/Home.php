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

        /*$template = '<ul>{menuitems}
        <li><a href="{link}">{title}</a></li>
{/menuitems}</ul>';

        $data = array(
            'menuitems' => array(
                array('title' => 'First Link', 'link' => '/first'),
                array('title' => 'Second Link', 'link' => '/second'),
            )
        );
        $this->parser->parse_string($template, $data);*/


        $data = array(
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
            )
        );

        $this->parser->parse('home/index', $data);
    }
}