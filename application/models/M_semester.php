<?php
class M_semester extends CI_Model
{
    public function get_semester()
    {
        $sql = "SELECT id_semester, semester,(SELECT COUNT(id_semester) FROM mahasiswa WHERE mahasiswa.id_semester = semester.id_semester) AS jumlah FROM semester";
        $query = $this->db->query($sql);
        return $query;
    }

    public function add($semester)
    {
        $data = array(
            'semester' => $semester
        );
        $this->db->insert('semester', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get_kode($id)
    {
        $this->db->where('id_semester', $id);
        return $this->db->get('semester');
    }

    public function update($id, $semester)
    {
        $data = array(
            'semester' => $semester
        );
        $this->db->where('id_semester', $id);
        $this->db->update('semester', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function delete($id)
    {
        $this->db->where('id_semester', $id);
        $this->db->delete('semester');
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get($id){
        $sql = "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.jk, prodi.nama_prodi, semester.semester, kelas.kelas, tahun_angkatan.tahun_angkatan FROM mahasiswa, prodi, semester, tahun_angkatan, kelas WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.id_semester = semester.id_semester AND mahasiswa.id_kelas = kelas.id_kelas AND mahasiswa.id_tahun = tahun_angkatan.id_tahun AND mahasiswa.id_semester = '$id' AND semester.id_semester = '$id' ";
        $query = $this->db->query($sql);
        return $query; 
    }
}