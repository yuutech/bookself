<?php

class Category_m extends CI_Model {

    public function get($id = null) 
    {
        $this->db->from('tb_kategori');
        if($id != null) {
            $this->db->where('kd_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tampilkategori()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        return $query= $this->db->get();
        
    }
    public function add($post)
    {
        $params = [
            'nama_kategori' => $post['name']
        ];

        $this->db->insert('tb_kategori', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_kategori' => $post['name']
        ];

        $this->db->where('kd_kategori',$post['id']);
        $this->db->update('tb_kategori', $params);
    }

    public function del($id) 
    {
        $this->db->where('kd_kategori',$id);
        $this->db->delete('tb_kategori');
    }

}
