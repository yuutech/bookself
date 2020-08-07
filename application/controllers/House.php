<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class House extends CI_Controller
{

    public function index()
    {
        $buku = $this->model_buku->tampildata()->result();
        $data = array(
            'buku' => $buku,
        );
        $this->load->view('template/header');
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }
}
