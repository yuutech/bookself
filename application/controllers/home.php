


<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        var_dump($_SERVER['HTTP_HOST']);
        die();
        $buku = $this->model_buku->tampildata()->result();
        $data = array(
            'buku' => $buku,
        );
        $this->load->view('template/header');
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }
}
