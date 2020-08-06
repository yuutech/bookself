<?php

class Register extends CI_Controller {

	public function index() 
    {
        check_already_login();

        $this->load->view('template/header');
        $this->load->view('register');
        $this->load->view('template/footer');
    }
    public function proses_reg()
    {
        $this->form_validation->set_rules('username','Username','required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        $this->form_validation->set_rules('fullname','Fullname','required');
        $this->form_validation->set_rules('alamat','Alamat','required');

        $this->form_validation->set_message('required', '<strong>%s Harus di Isi</strong>');
        $this->form_validation->set_message('is_unique', '<strong>%s sudah digunakan </strong>');
        $this->form_validation->set_message('min_length', '%s Minimal 8 character');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('register');
            $this->load->view('template/footer');
        } else {
            # code...
            $post = $this->input->post(null, TRUE);
            $this->user_m->daftar($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show"
                                            role="alert">Registrasi Berhasil!<button type="button" class="close"
                                            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth/login');
            }
        }


    }
}