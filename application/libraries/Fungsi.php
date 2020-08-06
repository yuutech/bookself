<?php

class Fungsi {

    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        // $this->$ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    public function count_book() {
        return $this->ci->count_m->get()->num_rows();
    }
    
    public function count_book_ready() {
        return $this->ci->count_m->sum_buku();
    }
    
    public function count_book_out() {
        return $this->ci->count_m->sum_buku_dipinjam();
    }
    
    public function count_member() {
        return $this->ci->count_m->get()->num_rows();
    }

    
}
