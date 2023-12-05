<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function pengumuman()
    {
        $this->db->select('*');
        $this->db->from('pengumuman');
       return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->update('pengumuman', $data);
    }
    
	public function get_admin()
	{
		return $this->db->get('user')->num_rows();
	}
	public function getJumlahNama()
	{
		$query = $this->db->select('COUNT(DISTINCT nama) as jumlah_nama')
            ->from('kenaikan_jabatan')
            ->get();

        return $query->row()->jumlah_nama;
	}

	public function total_kenaikan(){
		return $this->db->get('kenaikan_jabatan')->num_rows();
	}
	public function perpindahan()
	{
		$this->db->select('status, COUNT(status) as total');
    $this->db->from('kenaikan_jabatan');
    $this->db->group_by('status');
    $query = $this->db->get();

    $result = $query->result();

    // If you want to see the result using var_dump

    // If you want to return a specific status count (e.g., 'perpindahan jabatan')
    foreach ($result as $row) {
        if ($row->status == 'perpindahan jabatan') {
            return $row->total;
        }
    }

    // If the specific status is not found, return 0 or handle it accordingly
    return 0;
	}
	public function kenaikan()
	{
		$this->db->select('status, COUNT(status) as total');
    $this->db->from('kenaikan_jabatan');
    $this->db->group_by('status');
    $query = $this->db->get();

    $result = $query->result();

    // If you want to see the result using var_dump

    // If you want to return a specific status count (e.g., 'perpindahan jabatan')
    foreach ($result as $row) {
        if ($row->status == 'kenaikan jabatan') {
            return $row->total;
        }
    }

    // If the specific status is not found, return 0 or handle it accordingly
    return 0;
	}
}
