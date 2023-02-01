<?php
class Semester extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_semester');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $data['semester'] = $this->M_semester->get_semester();
        $data['title'] = 'Data Semester';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('semester/v_semester', $data);
        $this->load->view('foot');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Semester";
        $this->load->view('head', $data);
        $this->load->view('semester/v_add', $data);
        $this->load->view('foot');
    }

    public function action_add()
    {
        if (isset($_POST['simpan'])) {

            $semester = $_POST['semester'];

            $model = $this->M_semester;
            $exe = $model->add($semester);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Ditambah!'); window.location='" . base_url('semester') . "';</script>";
            }
        }
    }

    public function update($id)
    {
        $data['result'] = $this->M_semester->get_kode($id);
        $data['title'] = "Ubah Data Semester";
        $this->load->view('head', $data);
        $this->load->view('semester/v_update', $data);
        $this->load->view('foot');
    }

    public function action_update()
    {
        if (isset($_POST['simpan'])) {

            $id = $_POST['id'];
            $semester = $_POST['semester'];


            $model = $this->M_semester;
            $exe = $model->update($id,$semester);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='" . base_url('semester') . "';</script>";
            }
        }
    }

    public function delete($id)
    {
        $model = $this->M_semester;
        $query = $model->delete($id);
        if ($query >= 1) {
            echo "<script>alert('Data Berhasil Dihapus!'); window.location='" . base_url('semester') . "';</script>";
        }
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->M_semester->get($id);
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('mahasiswa/v_mahasiswa', $data);
        $this->load->view('foot');
    }

}