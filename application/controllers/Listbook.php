<?php

class Listbook extends CI_Controller {

	public function index() 
    {
        $data['buku'] = $this->model_buku->tampildata()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/buku/daftarbuku',$data);
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data['kategori']= $this->category_m->tampilkategori()->result();
        $data['penerbit']= $this->penerbit_m->tampilpenerbit()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/buku/daftarbukuform',$data);
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
    public function addproses()
    {
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('penerbit','Penerbit','required');
        $this->form_validation->set_rules('pengarang','Pengarang','required');
        $this->form_validation->set_rules('halaman','Halaman','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');  
        $this->form_validation->set_rules('sinopsis','Sinopsis','required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['kategori']= $this->category_m->tampilkategori()->result();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/buku/daftarbukuform',$data);
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        
        } else {
            $post = $this->input->post(null, TRUE);
            $this->model_buku->tambahbuku($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show"
                                            role="alert">Buku Berhasil di tambahkan<button type="button" class="close"
                                            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('admin/buku/daftarbukuform');
            }
        }

    }
}

