<?php
class M_mahasiswa extends CI_Model
{
    public function get_mahasiswa()
    {
        $sql = "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.jk, prodi.nama_prodi, semester.semester, kelas.kelas, tahun_angkatan.tahun_angkatan FROM mahasiswa, prodi, semester, tahun_angkatan, kelas WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.id_semester = semester.id_semester AND mahasiswa.id_kelas = kelas.id_kelas AND mahasiswa.id_tahun = tahun_angkatan.id_tahun;";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_prodi()
    {
        $sql = "SELECT * FROM prodi";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_semester()
    {
        $sql = "SELECT * FROM semester";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_kelas()
    {
        $sql = "SELECT * FROM kelas";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_tahun_angkatan()
    {
        $sql = "SELECT * FROM tahun_angkatan";
        $query = $this->db->query($sql);
        return $query;
    }

    public function add($nim, $nama, $jk, $prodi,$semester,$kelas,$tahun)
    {
        $data = array(
            'nim' => $nim,
            'nama_mahasiswa' => $nama,
            'jk' => $jk,
            'id_prodi' => $prodi,
            'id_semester' => $semester,
            'id_kelas' => $kelas,
            'id_tahun' => $tahun
        );
        $this->db->insert('mahasiswa', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get_kode($nim)
    {
        $this->db->where('nim', $nim);
        return $this->db->get('mahasiswa');
    }

    public function update($nim, $nama, $jk, $prodi, $semester, $kelas, $tahun)
    {
        $data = array(
            'nama_mahasiswa' => $nama,
            'jk' => $jk,
            'id_prodi' => $prodi,
            'id_semester' => $semester,
            'id_kelas' => $kelas,
            'id_tahun' => $tahun  
        );
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function delete($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
        $exe = $this->db->affected_rows();
        return $exe;
    }
}