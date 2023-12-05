<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_notif extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
            $this->load->model('M_notif');
			 if(empty($this->session->userdata('username'))){
              $this->session->set_flashdata('pesan', 'Anda belum login !!!');
              redirect('C_login');
            }
         
    }

    public function index(){
        
        $data = array(
        'Title' => "Halaman notifikasi",
        'notif' => $this->M_notif->get_data(),
        'jumlah_notif' => $this->M_notif->get_jumlah_notif(),
        'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
         );
         $this->load->view('User/templates_user/Sidebar', $data);
         $this->load->view('User/templates_user/Header', $data);
         $this->load->view('User/V_notif', $data);
         $this->load->view('User/templates_user/Footer', $data);
    }

    public function tambah_notif_kenaikan_jabatan(){
        $surat_pernyataan = $this->input->post('surat_pernyataan');
        $sk_pangkat = $this->input->post('sk_pangkat');
        $pas_foto = $this->input->post('pas_foto');
        $surat_usulan = $this->input->post('surat_usulan');
        $surat_sehat = $this->input->post('surat_sehat');
        $ijazah = $this->input->post('ijazah');
        $portofolio = $this->input->post('portofolio');
        $sertifikat_diklat = $this->input->post('sertifikat_diklat');
        $dokumen_penetapan = $this->input->post('dokumen_penetapan');
        $sk_terakhir = $this->input->post('sk_terakhir');
        $pak = $this->input->post('pak');
        $catatan = $this->input->post('catatan');
        $id_kenaikan = $this->input->post('id_kenaikan');
        $status = '1';
        $judul = 'Data anda ada yang kurang atau salah tolong segera dilengkapi';
        $data = array(
            'surat_pernyataan' => $surat_pernyataan,
            'sk_pangkat' => $sk_pangkat,
            'pas_foto' => $pas_foto,
            'surat_usulan' => $surat_usulan,
            'surat_sehat' => $surat_sehat,
            'ijazah' => $ijazah,
            'portofolio' => $portofolio,
            'sertifikat_diklat' => $sertifikat_diklat,
            'dokumen_penetapan' => $dokumen_penetapan,
            'sk_terakhir' => $sk_terakhir,
            'pak' => $pak,
            'catatan' => $catatan,
            'id_kenaikan' => $id_kenaikan,
            'status' => $status,
            'judul' => $judul
        );
        $this->M_notif->tambah($data);
        return redirect('Admin/C_kenaikan_jabatan');
    }

    public function tambah_notif_perpindahan_jabatan(){
        $surat_pernyataan = $this->input->post('surat_pernyataan');
        $sk_pangkat = $this->input->post('sk_pangkat');
        $pas_foto = $this->input->post('pas_foto');
        $surat_usulan = $this->input->post('surat_usulan');
        $surat_sehat = $this->input->post('surat_sehat');
        $ijazah = $this->input->post('ijazah');
        $portofolio = $this->input->post('portofolio');
        $sertifikat_diklat = $this->input->post('sertifikat_diklat');
        $dokumen_penetapan = $this->input->post('dokumen_penetapan');
        $sk_terakhir = $this->input->post('sk_terakhir');
        $pak = $this->input->post('pak');
        $catatan = $this->input->post('catatan');
        $id_kenaikan = $this->input->post('id_kenaikan');
        $status = '1';
        $judul = 'Data anda ada yang kurang atau salah tolong segera dilengkapi';
        $data = array(
            'surat_pernyataan' => $surat_pernyataan,
            'sk_pangkat' => $sk_pangkat,
            'pas_foto' => $pas_foto,
            'surat_usulan' => $surat_usulan,
            'surat_sehat' => $surat_sehat,
            'ijazah' => $ijazah,
            'portofolio' => $portofolio,
            'sertifikat_diklat' => $sertifikat_diklat,
            'dokumen_penetapan' => $dokumen_penetapan,
            'sk_terakhir' => $sk_terakhir,
            'pak' => $pak,
            'catatan' => $catatan,
            'id_kenaikan' => $id_kenaikan,
            'status' => $status,
            'judul' => $judul
        );
        $this->M_notif->tambah($data);
        return redirect('C_kenaikan_jabatan');
    }

    public function sudah_dibaca($id_notif)
    
    {
        $status = '0';
        $data = array(
            'id_notif' => $id_notif,
            'status' => $status,
        );
        $this->M_notif->edit($data);
        return redirect('C_notif');
        
    }

    

}
