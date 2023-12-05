<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class C_kenaikan_jabatan extends CI_Controller{

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
            'notif' => $this->M_notif->get_data(),
        'jumlah_notif' => $this->M_notif->get_jumlah_notif(),
       
        );
        $this->load->view('User/templates_user/Sidebar', $data);
       $this->load->view('User/templates_user/Header', $data);
       $this->load->view('User/V_kenaikan_jabatan', $data);
       $this->load->view('User/templates_user/Footer', $data);
    }

     public function tambah() {
       
        $data = array(
             'nip' => $this->input->post('nip'),
             'tanggal' => $this->input->post('tanggal'),
             'nama' => $this->input->post('nama'),
             'status' => $this->input->post('status'),
             'surat_pernyataan' => $this->input->post('surat_pernyataan'),
             'sk_pangkat' => $this->input->post('sk_pangkat'),
             'pas_foto' => $this->input->post('pas_foto'),
             'surat_usulan' => $this->input->post('surat_usulan'),
             'surat_sehat' => $this->input->post('surat_sehat'),
             'ijazah' => $this->input->post('ijazah'),
             'portofolio' => $this->input->post('portofolio'),
             'sertifikat_diklat' => $this->input->post('sertifikat_diklat'),
             'dokumen_penetapan' => $this->input->post('dokumen_penetapan'),
             'sk_terakhir' => $this->input->post('sk_terakhir'),
             'pak' => $this->input->post('pak'),
             'username' => $this->input->post('username'),
         );
    
         $config['upload_path'] = './assets2/files';
        $config['allowed_types'] = 'doc|docx|pdf|PDF|sql|pdf|Jpg|png|jpeg';
         $config['max_size'] = 0;
    
         $this->load->library('upload', $config);
    
         // Inisialisasi variabel $file_upload_error
         $file_upload_error = false;
    
         // Untuk setiap input file di form
         foreach ($_FILES as $key => $value) {
             if (!empty($value['name'])) { // Pastikan file dipilih sebelum melakukan upload
                 if (!$this->upload->do_upload($key)) {
                     $file_upload_error = true;
                     $error = array('error' => $this->upload->display_errors());
                     $this->load->view('V_tambah_file2', $error);
                     break;
                 } else {
                     $upload_data = $this->upload->data();
                     $data[$key] = $upload_data['file_name'];
                 }
             }
         }
    
         if (!$file_upload_error) {
             $this->M_file->insert2($data);
             redirect('User/C_uji_kompetensi');
         }
     }

	  public function view_edit($id_kenaikan){
        $data = array(
            'session_user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row(),
            'Title' => "kenaikan jabatan",
            'k' => $this->M_file->get_data2($id_kenaikan),
        'jumlah_notif' => $this->M_notif->get_jumlah_notif(),
       
        );
        $this->load->view('User/templates_user/Sidebar', $data);
       $this->load->view('User/templates_user/Header', $data);
       $this->load->view('User/V_edit_kenaikan_jabatan', $data);
       $this->load->view('User/templates_user/Footer', $data);
    }

	public function edit() {
    // ...
    $file_upload_error = false;

    // Mendapatkan data file yang sudah ada sebelumnya
    $id_kenaikan = $this->input->post('id_kenaikan');
    $file = $this->M_file->get_data2($id_kenaikan);
    
    // Array untuk menyimpan nama file baru
    $new_file_names = array();

    // Untuk setiap input file di form
    foreach ($_FILES as $key => $value) {
        if (!empty($value['name'])) { // Pastikan file dipilih sebelum melakukan upload
            // Menghapus file yang sudah ada sebelumnya
            $file_path = './assets2/files/' . $file->$key;
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            // Lakukan proses upload file
            $config['upload_path'] = './assets2/files';
            $config['allowed_types'] = 'doc|docx|pdf|PDF|sql|pdf|Jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($key)) {
                $file_upload_error = true;
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('V_tambah_file2', $error);
                break;
            } else {
                // Jika upload berhasil, simpan nama file ke dalam array
                $upload_data = $this->upload->data();
                $new_file_names[$key] = $upload_data['file_name'];
            }
        }
    }

    if (!$file_upload_error) {
        // Gabungkan array nama file baru dengan data lainnya
        $data = array(
            'nip' => $this->input->post('nip'),
            'tanggal' => $this->input->post('tanggal'),
            'nama' => $this->input->post('nama'),
            'id_kenaikan' => $this->input->post('id_kenaikan'),
            'surat_pernyataan' => isset($new_file_names['surat_pernyataan']) ? $new_file_names['surat_pernyataan'] : $file->surat_pernyataan,
            'sk_pangkat' => isset($new_file_names['sk_pangkat']) ? $new_file_names['sk_pangkat'] : $file->sk_pangkat,
            'pas_foto' => isset($new_file_names['pas_foto']) ? $new_file_names['pas_foto'] : $file->pas_foto,
            'surat_usulan' => isset($new_file_names['surat_usulan']) ? $new_file_names['surat_usulan'] : $file->surat_usulan,
            'surat_sehat' => isset($new_file_names['surat_sehat']) ? $new_file_names['surat_sehat'] : $file->surat_sehat,
            'ijazah' => isset($new_file_names['ijazah']) ? $new_file_names['ijazah'] : $file->ijazah,
            'portofolio' => isset($new_file_names['portofolio']) ? $new_file_names['portofolio'] : $file->portofolio,
            'sertifikat_diklat' => isset($new_file_names['sertifikat_diklat']) ? $new_file_names['sertifikat_diklat'] : $file->sertifikat_diklat,
            'dokumen_penetapan' => isset($new_file_names['dokumen_penetapan']) ? $new_file_names['dokumen_penetapan'] : $file->dokumen_penetapan,
            'sk_terakhir' => isset($new_file_names['sk_terakhir']) ? $new_file_names['sk_terakhir'] : $file->sk_terakhir,
            'pak' => isset($new_file_names['pak']) ? $new_file_names['pak'] : $file->pak,
        );

        // Lakukan penyimpanan data ke database setelah upload berhasil
        $this->M_file->edit($data);

        // Set pesan flashdata dan redirect ke halaman yang diinginkan
        $this->session->set_flashdata('pesan', 'berhasil di edit');
        redirect('User/C_uji_kompetensi');
    }
}

}

