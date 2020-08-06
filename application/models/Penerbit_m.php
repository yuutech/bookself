<?php

    class Penerbit_m extends CI_model
    {
        public function tampilpenerbit()
        {
            # code...
            $this->db->select('*');
            $this->db->from('tb_penerbit');
            return $query=$this->db->get();
            
        }
    }
    
?>








