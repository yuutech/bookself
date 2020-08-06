<?php

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        if (!isset($this->session->userdata['userid'])) {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show"
            role="alert">Anda Belum Login!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }
	public function index() 
    {
       
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
    }
}
