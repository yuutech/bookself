<?php

class Invoice extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('invoice_m');
    $this->load->model('user_m');
  }
  public function index()
  {
    $data['invoice'] = $this->invoice_m->tampil_data();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/transaksi/bukukeluar', $data);
    $this->load->view('template/foot');
    $this->load->view('template/footer');
  }

  public function detail($id_invoice)
  {
    $data['invoice'] = $this->invoice_m->ambil_id_invoice($id_invoice);
    $data['pesanan'] = $this->invoice_m->ambil_id_pesanan($id_invoice);

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/transaksi/detail_invoice', $data);
    $this->load->view('template/foot');
    $this->load->view('template/footer');
  }
}
