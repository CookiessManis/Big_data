<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_file extends CI_Model
{



    public function insert2($data){
        return $this->db->insert('kenaikan_jabatan', $data);
    }

    public function get_data()
    {
    $this->db->select('*');
    $this->db->from('kenaikan_jabatan');
    return $this->db->get()->result();
    }
    public function get_data3()
    {
    $this->db->select('*');
    $this->db->from('kenaikan_jabatan');
    return $this->db->get()->row();
    }

	public function get_data2($id_kenaikan)
    {
    $this->db->select('*');
    $this->db->from('kenaikan_jabatan');
    $this->db->where('id_kenaikan',$id_kenaikan);
    return $this->db->get()->row();
    }

	 public function edit($data)
    {
        $this->db->where('id_kenaikan', $data['id_kenaikan']);
        $this->db->update('kenaikan_jabatan', $data);
    }

	
    public function delete($data)
    {
        $this->db->where('id_kenaikan', $data['id_kenaikan']);
        $this->db->delete('kenaikan_jabatan', $data);
    }

	public function get_file_data_by_id($id) {
        // Assuming 'nama_tabel' is the name of your database table
        $this->db->select('surat_pernyataan, sk_pangkat, pas_foto, surat_usulan, surat_sehat, ijazah, portofolio, sertifikat_diklat, dokumen_penetapan');
        $this->db->where('id_kenaikan', $id);
        $query = $this->db->get('kenaikan_jabatan');

        if ($query->num_rows() > 0) {
            return $query->row(); // Return the first row as an object
        } else {
            return false; // Return false if no data is found
        }
    }

	 public function remove_file_reference($id) {
        $this->db->where('id_kenaikan', $id);
        $this->db->update('kenaikan_jabatan', array(
            'surat_pernyataan' => NULL, // Replace with the actual field name
            'sk_pangkat' => NULL, // Replace with the actual field name
            // Add more fields as needed
        ));

        return $this->db->affected_rows(); // Return the number of affected rows
    }
}
