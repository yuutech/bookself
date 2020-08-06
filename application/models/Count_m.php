<?php

    class Count_m extends CI_Model 
    {

      public function get() 
        {
            $this->db->from('tb_buku');
            $query = $this->db->get();
            return $query;
        }

        public function sum_buku() 
        {
            $this->db->select_sum('jumlah');
            $query = $this->db->get('tb_buku');
            return $query->row()->jumlah;
        }

        public function sum_buku_dipinjam() 
        {
            $this->db->select_sum('qty');
            $query = $this->db->get('tb_pesanan');
            return $query->row()->qty;
        }

        public function get_member() 
        {
            $this->db->where('level', 1);
            $this->db->from('tb_user');

            $query = $this->db->get();
            return $query;
        }

    }