<?php
class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kelas');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $data['kelas'] = $this->M_kelas->get_kelas();
        $data['title'] = 'Data kelas';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('kelas/v_kelas', $data);
        $this->load->view('foot');
    }

    public function add()
    {
        $data['title'] = "Tambah Data kelas";
        $this->load->view('head', $data);
        $this->load->view('kelas/v_add', $data);
        $this->load->view('foot');
    }

    public function action_add()
    {
        if (isset($_POST['simpan'])) {

            $kelas = $_POST['kelas'];

            $model = $this->M_kelas;
            $exe = $model->add($kelas);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Ditambah!'); window.location='" . base_url('kelas') . "';</script>";
            }
        }
    }

    public function update($id)
    {
        $data['result'] = $this->M_kelas->get_kode($id);
        $data['title'] = "Ubah Data Kelas";
        $this->load->view('head', $data);
        $this->load->view('kelas/v_update', $data);
        $this->load->view('foot');
    }

    public function action_update()
    {
        if (isset($_POST['simpan'])) {

            $id = $_POST['id'];
            $kelas = $_POST['kelas'];


            $model = $this->M_kelas;
            $exe = $model->update($id,$kelas);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='" . base_url('kelas') . "';</script>";
            }
        }
    }

    public function delete($id)
    {
        $model = $this->M_kelas;
        $query = $model->delete($id);
        if ($query >= 1) {
            echo "<script>alert('Data Berhasil Dihapus!'); window.location='" . base_url('kelas') . "';</script>";
        }
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->M_kelas->get($id);
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('mahasiswa/v_mahasiswa', $data);
        $this->load->view('foot');
    }

}