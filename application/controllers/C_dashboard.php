<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
            $this->load->model('M_dashboard');
            $this->load->model('M_notif');
						 if(empty($this->session->userdata('username'))){
              $this->session->set_flashdata('pesan', 'Anda belum login !!!');
              redirect('C_login');
            }
    }

  public function dashboard_user(){
    $data = array(
    'title' => "Dashboard user",
    'pengumuman' => $this->M_dashboard->pengumuman(),
    'notif' => $this->M_notif->get_data(),
    'jumlah_notif' => $this->M_notif->get_jumlah_notif(),
		'jumlahNama' => $this->M_dashboard->getJumlahNama(),
		'jumlah_perpindahan' => $this->M_dashboard->perpindahan(),
		'jumlah_kenaikan' => $this->M_dashboard->kenaikan(),
    'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
    );
    $this->load->view('User/templates_user/Sidebar', $data);
    $this->load->view('User/templates_user/Header', $data);
    $this->load->view('User/V_dashboard_user', $data);
    $this->load->view('User/templates_user/Footer', $data);
    
    }

    public function dashboard_admin(){
      $data = array(
        'title'=> "Dashboard admin",
        'pengumuman' => $this->M_dashboard->pengumuman(),
        'jumlahNama' => $this->M_dashboard->getJumlahNama(),
				'total_kenaikan' => $this->M_dashboard->total_kenaikan(),
				'get_admin' => $this->M_dashboard->get_admin()
      );
       $this->load->view('Admin/templates_admin/Sidebar', $data);
       $this->load->view('Admin/templates_admin/Header', $data);
       $this->load->view('Admin/V_dashboard_admin', $data);
       $this->load->view('Admin/templates_admin/Footer', $data);
      }

      public function edit_pengumuman()
      {
        $id_pengumuman = $this->input->post('id_pengumuman');
        $pengumuman = $this->input->post('pengumuman');

        $data = array(
          'id_pengumuman' => $id_pengumuman,
          'pengumuman' => $pengumuman,
        );
        
        $this->M_dashboard->edit($data);
				$this->session->set_flashdata('pesan','Pengumuman Berhasil Diubah');
      	return redirect('C_dashboard/dashboard_admin');
       
      }


			

}
