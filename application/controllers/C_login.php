<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
		
    }


    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->load->view('V_login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->M_login->login($username, $password);

            if ($cek == false) {
                $this->session->set_flashdata('pesan', 'username atau password anda salah');
                redirect('C_login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('nama', $cek->email);
                $this->session->set_userdata('status', $cek->status);
                
                switch ($cek->status) {
                    case 1: redirect('C_dashboard/dashboard_user');
                        break;
                    case 2:
                        redirect('C_dashboard/dashboard_admin');
                        break;
                    case 0:
                        $this->session->set_flashdata('pesan','akun anda belum aktif');
                        redirect('C_login');
                        break;
                    default:
                    break;
                }
            }
        }
    }
    public function view_registrasi()
    {
    $this->load->view('user/V_registrasi');
    }

    public function registrasi(){
       $username = $this->input->post('username');
       $email    = $this->input->post('email');
       $password = md5($this->input->post('password'));
       $instansi = $this->input->post('instansi');
       $status   = '0';
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'instansi' => $instansi,
            'status' => $status,
        );

        $this->M_login->tambah($data);
        redirect('C_login');
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

    // public function tes($username)
    //     {
    //         $data['title'] ='halaman edit email';
    //         $data['username'] = $this->M_login->verifikasi($username);
    //         $this->load->view('tes', $data);
    //     }
     

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
            redirect('C_login/register_admin');
     }











    public function verifikasi_user()
{
    $statusMessage = ($status === '1') ? "Pesan: Aku" : "Pesan: Kamu";

    $data = array(
        'username' => $username,
        'status' => $status, // '1' untuk status aktif, '0' untuk status tidak aktif
    );
    $this->M_login->edit($data);
    redirect('C_login/aktifasi');

    if (!empty($email)) {
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
        $this->email->subject("pesan verifikasi akun anda");
        $this->email->message($statusMessage); // Menggunakan $statusMessage sesuai kondisi status

        $this->email->print_debugger();

        if ($this->email->send()) {
            echo "email, berhasil di kirim";
        } else {
            show_error($this->email->print_debugger());
        }
    }
}


    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

	    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan', 'berhasil di logout');
        redirect('C_login');
    }
     
}
