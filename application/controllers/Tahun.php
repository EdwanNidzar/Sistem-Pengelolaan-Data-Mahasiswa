<?php
class Tahun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_tahun');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $data['tahun'] = $this->M_tahun->get_tahun();
        $data['title'] = 'Data Tahun Angkatan';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('tahun/v_tahun', $data);
        $this->load->view('foot');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Tahun Angkatan";
        $this->load->view('head', $data);
        $this->load->view('tahun/v_add', $data);
        $this->load->view('foot');
    }

    public function action_add()
    {
        if (isset($_POST['simpan'])) {

            $tahun = $_POST['tahun'];

            $model = $this->M_tahun;
            $exe = $model->add($tahun);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Ditambah!'); window.location='" . base_url('tahun') . "';</script>";
            }
        }
    }

    public function update($id)
    {
        $data['result'] = $this->M_tahun->get_kode($id);
        $data['title'] = "Ubah Data Tahun Angkatan";
        $this->load->view('head', $data);
        $this->load->view('tahun/v_update', $data);
        $this->load->view('foot');
    }

    public function action_update()
    {
        if (isset($_POST['simpan'])) {

            $id = $_POST['id'];
            $tahun = $_POST['tahun'];


            $model = $this->M_tahun;
            $exe = $model->update($id,$tahun);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='" . base_url('tahun') . "';</script>";
            }
        }
    }

    public function delete($id)
    {
        $model = $this->M_tahun;
        $query = $model->delete($id);
        if ($query >= 1) {
            echo "<script>alert('Data Berhasil Dihapus!'); window.location='" . base_url('tahun') . "';</script>";
        }
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->M_tahun->get($id);
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('mahasiswa/v_mahasiswa', $data);
        $this->load->view('foot');
    }

}