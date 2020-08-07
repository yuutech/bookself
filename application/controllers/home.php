<?php

date_default_timezone_set('Asia/Jakarta');

class home extends CI_Controller {

	public function index() 
    {

        $buku = $this->model_buku->tampildata()->result();
		$data = array(
			'buku' => $buku,
		); 
        $this->load->view('template/header');
        $this->load->view('index',$data);
        $this->load->view('template/footer');
    }
    public function tambah_ke_keranjang($kd)
    {
        # code...
        $buku= $this->model_buku->find($kd);
        $data = array(
            'id'      => $buku->kd_buku,
            'qty'     => 1,
            'price'   => $buku->halaman,
            'name'    => $buku->judul
            
    );
    $this->cart->insert($data);

    $id= $data['id'];
    $qty= $data['qty'];
    $sql = "UPDATE tb_buku SET jumlah = jumlah - $qty WHERE kd_buku = $id";
    $this->db->query($sql);
            
   // var_dump($data);
    //var_dump($a);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show"
        role="alert">Buku berhasil dimasukkan ke keranjang!<button type="button" class="close"
        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect ('home');
    }
    public function detail_keranjang()
    {
        $this->load->view('template/header');
        $this->load->view('keranjang');
        $this->load->view('template/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();

        redirect('home');
    }

    function delete_buku_cart()
    {

        $id=$this->input->post('id');
        $qty=$this->input->post('qty');
        $rowid=$this->input->post('rowid');
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $sql = "UPDATE tb_buku SET jumlah = jumlah + $qty WHERE kd_buku = $id";
        $this->db->query($sql);

         $this->cart->update($data);
         redirect('home/detail_keranjang');
    }

    function proses_pesanan()
    {
        $processed = $this->invoice_m->index();
        $this->cart->destroy();
        if($processed){
        $this->load->view('template/header');
        $this->load->view('keranjang');
        $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show"
                        role="alert">gagal meminjam!<button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('home');
        }

        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show"
            role="alert">Data peminjaman berhasil ditambahkan!<button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('home');
    }
}
