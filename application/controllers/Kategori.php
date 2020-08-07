<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data['row'] = $this->category_m->get();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/buku/kategori', $data);
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function add()
    {

        $category = new stdClass();
        $category->kd_kategori = null;
        $category->nama_kategori = null;

        $data = array(
            'page' => 'add',
            'row' => $category
        );

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/buku/kategoriform', $data);
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $query = $this->category_m->get($id);
        if ($query->num_rows() > 0) {
            $category = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $category
            );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/buku/kategoriform', $data);
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show"
            role="alert">Halaman tidak ditemukan!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('kategori');
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->category_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->category_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show"
            role="alert">Data berhasil disimpan!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }
        redirect('kategori');
    }

    public function del($id)
    {
        $this->category_m->del($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show"
            role="alert">Data sedang digunakan tabel lain. <br>Tidak dapat dihapus!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show"
            role="alert">Data berhasil dihapus!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }
        }
        redirect('kategori');
    }
}
