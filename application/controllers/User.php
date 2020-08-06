<?php 
    class User extends CI_Controller {
        public function index() 
    {
        $data['user'] = $this->user_m->get_user()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/user/daftaruser',$data);
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }


    }
?>