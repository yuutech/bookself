<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class House extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('model_buku');
    //     $this->load->model('user_m');
    // }

    public function index()
    {
        // $buku = $this->model_buku->tampildata()->result();
        $data = array(
            'buku' => 'anjeng',
        );
        $this->load->view('template/header');
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }
}
