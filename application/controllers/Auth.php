<?php

class Auth extends CI_Controller {

	public function login() 
    {
        check_already_login();
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function process()
	{
        $this->form_validation->set_rules('username','username','required',[
            'required' => 'Username Wajib diisi!'
        ]);
        $this->form_validation->set_rules('password','password','required',[
            'required' => 'Password Wajib diisi!'
        ]);
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            $post = $this->input->post(null, TRUE);
            if(isset($post['login'])) {
                $query = $this->user_m->login($post);
                if($query->num_rows() > 0) {
                    $row = $query->row();
                    $params = array(
                        'userid' 	=> $row->user_id,
                        'level' 	=> $row->level
                    );
                    $this->session->set_userdata($params);
                    redirect('auth/landing');
                } else {
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show"
                        role="alert">Username dan Password Salah!<button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('auth/login');
                }
            }
        }
    }

    public function landing() 
    {
        $this->load->view('template/header');
        $this->load->view('bridge');
        $this->load->view('template/footer');
    }
    
    public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('home');
    }
    
}
