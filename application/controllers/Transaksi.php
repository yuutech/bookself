<?php 
    class Transaksi extends CI_Controller {
        public function dipinjam() 
        {
            $data['invoice'] = $this->invoice_m->tampil_data();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin/transaksi/bukukeluar',$data);
            $this->load->view('template/foot');
            $this->load->view('template/footer');
        }
    }
?>