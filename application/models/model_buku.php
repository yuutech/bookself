<?php

    class Model_buku extends CI_Model 
    {
        public function tampildata()
        {
            # code...
         $this->db->select('*');
            $this->db->from('tb_buku');
            $this->db->join('tb_kategori', 'tb_kategori.kd_kategori = tb_buku.kd_kategori ');
         return   $query = $this->db->get();
        }

        public function find($kd)
        {
            $result= $this->db->where('kd_buku',$kd)    
                              ->limit(1)
                              ->get('tb_buku');
            if ($result->num_rows() > 0) {
                # code...
            return $result->row();
            
            }else {
                return array();
                echo 'error gan';
            }
        }
        public function tambahbuku($post)
        {
            # code...
            $params['judul']=$post['judul'];
            $params['kategori']=$post['kategori'];
            $params['penerbit']=$post['penerbit'];
            $params['pengarang']=$post['pengarang'];
            $params['halaman']=$post['halaman'];
            $params['jumlah']=$post['jumlah'];
            $params['sinopsis']=$post['sinopsis'];
            $params['gambar']=$post['gambar'];
            $this->db->insert('tb_buku',$params);

            
        }
    }
    
?>