<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_uji_kompetensi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
            $this->load->model('M_file');
            $this->load->model('M_notif');
    }

    public function index(){
        
        $data = array(
            'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
        'Title' => "kenaikan jabatan",
        'uji_kompetensi' => $this->M_file->get_data(),
        'notif' => $this->M_notif->get_data(),
        'jumlah_notif' => $this->M_notif->get_jumlah_notif(),
    
         );
         $this->load->view('User/templates_user/Sidebar', $data);
         $this->load->view('User/templates_user/Header', $data);
         $this->load->view('User/V_uji_kompetensi', $data);
         $this->load->view('User/templates_user/Footer', $data);
    }

	public function delete($id_kenaikan)
  {
		$file = $this->M_file->get_data2($id_kenaikan);
		if ($file->surat_pernyataan != "") {
			unlink('./assets2/files/' . $file->surat_pernyataan);
		}
    $data['id_kenaikan'] = $id_kenaikan;
    $this->M_file->delete($data);
    $this->session->set_flashdata('pesan', 'berhasil di hapus');
    redirect('User/C_uji_kompetensi');
  }

}
