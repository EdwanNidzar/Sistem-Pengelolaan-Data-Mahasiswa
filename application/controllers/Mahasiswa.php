<?php
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $data['mahasiswa'] = $this->M_mahasiswa->get_mahasiswa();
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('head', $data);
        $this->load->view('nav');
        $this->load->view('mahasiswa/v_mahasiswa', $data);
        $this->load->view('foot');
    }

    public function add()
    {
        $data['prodi'] = $this->M_mahasiswa->get_prodi();
        $data['semester'] = $this->M_mahasiswa->get_semester();
        $data['kelas'] = $this->M_mahasiswa->get_kelas();
        $data['tahun_angkatan'] = $this->M_mahasiswa->get_tahun_angkatan();
        $data['title'] = "Tambah Data Mahasiswa";
        $this->load->view('head', $data);
        $this->load->view('mahasiswa/v_add', $data);
        $this->load->view('foot');
    }

    public function action_add()
    {
        if (isset($_POST['simpan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $semester = $_POST['semester'];
            $kelas = $_POST['kelas'];
            $tahun = $_POST['tahun'];

            $model = $this->M_mahasiswa;
            $exe = $model->add($nim, $nama, $jk, $prodi,$semester,$kelas,$tahun);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Ditambah!'); window.location='" . base_url('mahasiswa') . "';</script>";
            }
        }
    }

    public function update($nim)
    {
        $data['prodi'] = $this->M_mahasiswa->get_prodi();
        $data['semester'] = $this->M_mahasiswa->get_semester();
        $data['kelas'] = $this->M_mahasiswa->get_kelas();
        $data['tahun_angkatan'] = $this->M_mahasiswa->get_tahun_angkatan();
        $data['result'] = $this->M_mahasiswa->get_kode($nim);
        $data['title'] = "Ubah Data Mahasiswa";
        $this->load->view('head', $data);
        $this->load->view('mahasiswa/v_update', $data);
        $this->load->view('foot');
    }

    public function action_update()
    {
        if (isset($_POST['simpan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $semester = $_POST['semester'];
            $kelas = $_POST['kelas'];
            $tahun = $_POST['tahun'];

            $model = $this->M_mahasiswa;
             $exe = $model->update($nim, $nama, $jk,$prodi,$semester,$kelas,$tahun);
            if ($exe >= 1) {
                echo "<script>alert('Data Berhasil Diubah!'); window.location='" . base_url('mahasiswa') . "';</script>";
            }
        }
    }

    public function delete($nim)
    {
        $model = $this->M_mahasiswa;
        $query = $model->delete($nim);
        if ($query >= 1) {
            echo "<script>alert('Data Berhasil Dihapus!'); window.location='" . base_url('mahasiswa') . "';</script>";
        }
    }

}