<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $data['title'] = 'LOGIN';
        $this->load->view('head', $data);
        $this->load->view('Login/v_login');
        $this->load->view('foot');
    }

    public function action()
    {
        $username = $this->input->post('user');

        $user = $this->M_login->get($username);
        if ($user) {
            $password = $this->input->post('pass');
            if ($password == $user['password']) {
                $cek = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($cek);
                echo "<script>
                    alert('Login Berhasil');
                    window.location = '" . base_url('mahasiswa') . "';
                </script>";
            } else {
                echo "<script>
                    alert('Login Gagal');
                    window.location = '" . base_url('login') . "';
                </script>";
            }
        } else {
            echo
            "<script>
                alert('Harap isi username dan password');
                window.location = '" . base_url('login') . "';
            </script>";
        }
    }

    public function logout()
    {
        $cek = [
            'username',
            'role'
        ];
        $this->session->unset_userdata($cek);
        echo
        "<script>
                alert('Log Out Berhasil');
                window.location = '" . base_url('login') . "';
            </script>";
    }
}
