<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_notif extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('notif', $data);
    }

    public function get_data()
    {
    $this->db->select('notif.*, kenaikan_jabatan.nama,kenaikan_jabatan.username');
    $this->db->from('notif');
    $this->db->join('kenaikan_jabatan','kenaikan_jabatan.id_kenaikan = notif.id_kenaikan');

    return $this->db->get()->result();
    }

    public function edit($data)
    {
        $this->db->where('id_notif', $data['id_notif']);
        $this->db->update('notif', $data);
    }
    
    //masih ada yang salah
    public function get_jumlah_notif()
    {
        $this->db->select('count(notif.status) as jumlah_notif, kenaikan_jabatan.username as user');
        $this->db->from('notif');
        $this->db->join('kenaikan_jabatan','kenaikan_jabatan.id_kenaikan = notif.id_kenaikan');
        $this->db->where('notif.status = 1');
        //$this->db->where('kenaikan_jabatan.username',$username);
      //  $this->db->group_by('kenaikan_jabatan.username');
        return $this->db->get()->result();
    }
}
