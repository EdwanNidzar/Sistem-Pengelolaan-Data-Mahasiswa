<?php
class M_kelas extends CI_Model
{
    public function get_kelas()
    {
        $sql = "SELECT id_kelas, kelas,(SELECT COUNT(id_kelas) FROM mahasiswa WHERE mahasiswa.id_kelas = kelas.id_kelas) AS jumlah FROM kelas";
        $query = $this->db->query($sql);
        return $query;
    }

    public function add($kelas)
    {
        $data = array(
            'kelas' => $kelas
        );
        $this->db->insert('kelas', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get_kode($id)
    {
        $this->db->where('id_kelas', $id);
        return $this->db->get('kelas');
    }

    public function update($id, $kelas)
    {
        $data = array(
            'kelas' => $kelas
        );
        $this->db->where('id_kelas', $id);
        $this->db->update('kelas', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function delete($id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get($id){
        $sql = "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.jk, prodi.nama_prodi, semester.semester, kelas.kelas, tahun_angkatan.tahun_angkatan FROM mahasiswa, prodi, semester, tahun_angkatan, kelas WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.id_semester = semester.id_semester AND mahasiswa.id_kelas = kelas.id_kelas AND mahasiswa.id_tahun = tahun_angkatan.id_tahun AND mahasiswa.id_kelas = '$id' AND kelas.id_kelas = '$id' ";
        $query = $this->db->query($sql);
        return $query; 
    }
}