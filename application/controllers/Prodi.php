<?php
class Prodi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_prodi');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $data['prodi'] = $this->M_prodi->get_prodi();
        $data['title'] = 'Data Prodi';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('prodi/v_prodi', $data);
        $this->load->view('foot');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Prodi";
        $this->load->view('head', $data);
        $this->load->view('prodi/v_add', $data);
        $this->load->view('foot');
    }

    public function action_add()
    {
        if (isset($_POST['simpan'])) {

            $nama = $_POST['nama'];

            $model = $this->M_prodi;
            $exe = $model->add($nama);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Ditambah!'); window.location='" . base_url('prodi') . "';</script>";
            }
        }
    }

    public function update($id)
    {
        $data['result'] = $this->M_prodi->get_kode($id);
        $data['title'] = "Ubah Data Prodi";
        $this->load->view('head', $data);
        $this->load->view('prodi/v_update', $data);
        $this->load->view('foot');
    }

    public function action_update()
    {
        if (isset($_POST['simpan'])) {

            $id = $_POST['id'];
            $nama = $_POST['nama'];


            $model = $this->M_prodi;
            $exe = $model->update($id,$nama);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='" . base_url('prodi') . "';</script>";
            }
        }
    }

    public function delete($id)
    {
        $model = $this->M_prodi;
        $query = $model->delete($id);
        if ($query >= 1) {
            echo "<script>alert('Data Berhasil Dihapus!'); window.location='" . base_url('prodi') . "';</script>";
        }
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->M_prodi->get($id);
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('mahasiswa/v_mahasiswa', $data);
        $this->load->view('foot');
    }

}