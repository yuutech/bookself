<?php

class Invoice_m extends CI_Model {
  
  public function index()
  {
    date_default_timezone_set('Asia/Jakarta');

    $tgl_pinjam = $this->input->post('tgl_pinjam');
    $date1 = new DateTime($tgl_pinjam);
    $tgl_kembali = $this->input->post('tgl_kembali');
    $date2 = new DateTime($tgl_kembali);
    $lama_pinjam= $date1->diff($date2)->format("%d");

    $id_user = $this->fungsi->user_login()->user_id; 

    $invoice_data = array(
      'tgl_pinjam' => $tgl_pinjam,
      'tgl_kembali' => $tgl_kembali,
      'user_id' => $id_user,
      'lama_pinjam' => $lama_pinjam,
    );

    $this->db->insert('tb_pinjam', $invoice_data);
    $id_invoice = $this->db->insert_id();

    foreach($this->cart->contents() as $item){
      $data = array(
        'kd_pinjam' => $id_invoice,
        'kd_buku' => $item['id'],
        'qty' => $item['qty'],
        'halaman' => $item['price'],
      );

      $this->db->insert('tb_pesanan', $data);
    }

    return TRUE;
  }

  public function tampil_data()
  {
    $this->db->select('*');
		$this->db->from('tb_pinjam');
		$this->db->join('tb_user', 'tb_pinjam.user_id = tb_user.user_id');
    
    return $this->db->get()->result();
  }

  public function invoice_no()
  {
      $sql = "SELECT MAX(invoice) as invoice_no 
              FROM tb_pinjam";
      $query = $this->db->query($sql);
      if($query->num_rows() > 0) {
          $row = $query->row();
          $n = ((int)$row->invoice_no) + 1;
          $no = sprintf("%'.04d", $n);
      } else {
          $no = "0001";
      }
      $invoice = "BS".$no;
      return $invoice;
  }

  public function ambil_id_invoice($id_invoice)
  {
    $this->db->select('*');
		$this->db->from('tb_pinjam');
    $this->db->join('tb_user', 'tb_pinjam.user_id = tb_user.user_id');
    $this->db->where('tb_pinjam.kd_pinjam', $id_invoice);
    return $this->db->get()->row();
  }

  public function ambil_id_pesanan($id_invoice)
  {
    $this->db->select('*');
		$this->db->from('tb_pesanan');
    $this->db->join('tb_buku', 'tb_pesanan.kd_buku = tb_buku.kd_buku');
    $this->db->where('tb_pesanan.kd_pinjam', $id_invoice);
    return $this->db->get()->result();
  }

}