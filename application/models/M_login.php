<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function login($username, $password)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function tambah($data)
    {
        $this->db->insert('user', $data);
    }

    public function role()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status = 0 or 1');
        $this->db->order_by('username');
        return $this->db->get()->result();
    }

    public function edit($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->update('user', $data);
    }


      public function verifikasi($username)
      {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.username', $username);
        return $this->db->get()->row();
      }
}