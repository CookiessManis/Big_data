<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_verifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
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

    public function register_admin(){
        $data = array(
            'user' => $this->M_login->role(),
            'Title ' => "Registrasi Admin",
        );
       $this->load->view('Admin/templates_admin/Sidebar');
       $this->load->view('Admin/templates_admin/Header');
       $this->load->view('Admin/V_register_admin',$data);
       $this->load->view('Admin/templates_admin/Footer');
        
    }
    
    public  function verifikasi()
    {
           $username = $this->input->post('username');
           $email    = $this->input->post('email');
           $status = $this->input->post('status');
           $data = array(
               'username' => $username,         
               'status' => $status,
           );
          
           $statusMessage = ($status === '1') ? "Pesan: Akun anda telah di verifikasi" : "Pesan: akun anda telah di nonaktifkan silahkan hubungi admin";

               $config = [
                   'mailpath' => '/usr/sbin/sendmail',
                   'protocol' => 'smtp',
                   'smtp_host' => 'smtp.googlemail.com',
                   'smtp_user' => 'tcoba019@gmail.com',
                   'smtp_pass' => 'mtjgafefxotunlfc', // Gunakan kata sandi aplikasi khusus dari akun Google Anda
                   'smtp_port' => 465,
                   'smtp_crypto' => 'ssl', // Gunakan tls untuk koneksi yang lebih aman

                   'mailtype' => 'text',
                   'charset' => 'iso-8859-1',
                   'wordwrap' => TRUE,
                   'newline' => "\r\n",
                   'crlf' => "\r\n",
                   'validate' => FALSE,
                   'priority' => 3, // Or as needed
               ];
               $this->load->library('email', $config);
               $this->email->initialize($config);

               $this->email->from('tcoba019@gmail.com', 'tes coba');
               $this->email->to($email);
               $this->email->subject("aku");
               $this->email->message($statusMessage);

               $this->email->print_debugger();

               if ($this->email->send()) {
                   echo "email, berhasil di kirim";
               } else {
                   show_error($this->email->print_debugger());
               }
           
           $this->M_login->edit($data);
           $this->session->set_flashdata('pesan', 'berhasil di edit');
           redirect('Admin/C_verifikasi//register_admin');
    }

    
public function delete($username)
{
  $data['username'] = $username;
  $this->M_login->delete($data);
  $this->session->set_flashdata('pesan', 'berhasil di hapus');
  redirect('Admin/C_verifikasi/register_admin');
}

}
