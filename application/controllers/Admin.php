<?php 
    class Admin extends CI_Controller {
        public function index() 
        {
            $data['user'] = $this->user_m->get_admin()->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/user/daftaradmin',$data);
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        }
    }
?>