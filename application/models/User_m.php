<?php

class User_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null) 
    {
        $this->db->from('tb_user');
        if($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_admin() 
    {
        $this->db->from('tb_user');
        $this->db->where('level', 1);
        $query = $this->db->get();
        return $query;
    }

    public function get_user() 
    {
        $this->db->from('tb_user');
        $this->db->where('level', 2);
        $query = $this->db->get();
        return $query;
    }

    public function daftar($post)
    {
       $params['username']=$post['username'];
       $params['password']=sha1($post['password']);
       $params['name']=$post['fullname'];
       $params['address']=$post['alamat'];
       $params['level']=2;
        $this->db->insert('tb_user',$params);
    }
}
