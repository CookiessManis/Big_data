<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_kenaikan_jabatan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
            $this->load->model('M_file');
						if(empty($this->session->userdata('username'))){
            $this->session->set_flashdata('pesan', 'Anda belum login !!!');
            redirect('index.php/C_login');
          } elseif($this->session->userdata('status') != '2'){
			 $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                anda tidak memiliki akses kehalaman ini!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button></div>');
              redirect('C_dashboard/dashboard_user');

		  }  
    }

    public function index(){
        $data = array(
            'Title' => "kenaikan jabatan",
            'kenaikan_pangkat' => $this->M_file->get_data(),
        );
        $this->load->view('Admin/templates_admin/Sidebar', $data);
       $this->load->view('Admin/templates_admin/Header', $data);
       $this->load->view('Admin/V_kenaikan_jabatan_admin', $data);
       $this->load->view('Admin/templates_admin/Footer', $data);
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
    redirect('Admin/C_kenaikan_jabatan');
  }

  public function load_user($id_kenaikan)
  {
     $user = $_GET['instansi'];
 
     $this->db->select('*');
     $this->db->from('user');
     $this->db->join('kenaikan_jabatan','user.username = kenaikan_jabatan.username');
     $this->db->where('user.instansi', $user);
     $data = $this->db->get()->result();

                  $no =1; 
                foreach ($data as $k) { ?>
									
                  
                <tr class="text-start fw-semibold" style="font-size: 20px">
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $no++; ?>
                  </td>

                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $k->nip; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $k->nama; ?>
                  </td>
                  <td
                    class="px-2 py-3"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <?= $k->tanggal; ?>
                  </td>
                  <td
                    class="px-2 py-3 text-center"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <button
                      class="btn text-white px-4"
                      style="background-color: #587bfd"
                      data-bs-toggle="modal"
                      data-bs-target="#detail<?= $k->id_kenaikan; ?>"
                    >
                      Detail
                    </button>
                  </td>
                  <td
                    class="px-2 py-3 text-center"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                    <button
                      class="btn text-white px-4"
                      style="background-color: #fec007"
											onclick="downloadZip<?= $k->id_kenaikan ?>()"
                    >
                      Unduh
                    </button>
                  </td>
                  <td
                    class="px-2 py-3 text-center px-4"
                    style="
                      border-right: 1px solid black;
                      border-bottom: 1px solid black;
                    "
                  >
                  <button  
                      type="submit"  
                      class="btn btn-danger text-white">
                      <a href="<?= base_url('Admin/C_kenaikan_jabatan/delete/'.$k->id_kenaikan) ?> " class="button-kegiatan btn btn-danger px-1"> Hapus</a>
                      </button>
                  </td>
                </tr>
                <?php }} 

}
