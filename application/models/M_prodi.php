<?php
class M_prodi extends CI_Model
{
    public function get_prodi()
    {
        $sql = "SELECT id_prodi, nama_prodi,(SELECT COUNT(id_prodi) FROM mahasiswa WHERE mahasiswa.id_prodi = prodi.id_prodi) AS jumlah FROM prodi";
        $query = $this->db->query($sql);
        return $query;
    }

    public function add($nama_prodi)
    {
        $data = array(
            'nama_prodi' => $nama_prodi
        );
        $this->db->insert('prodi', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get_kode($id)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->get('prodi');
    }

    public function update($id, $nama)
    {
        $data = array(
            'nama_prodi' => $nama
        );
        $this->db->where('id_prodi', $id);
        $this->db->update('prodi', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function delete($id)
    {
        $this->db->where('id_prodi', $id);
        $this->db->delete('prodi');
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get($id){
        $sql = "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.jk, prodi.nama_prodi, semester.semester, kelas.kelas, tahun_angkatan.tahun_angkatan FROM mahasiswa, prodi, semester, tahun_angkatan, kelas WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.id_semester = semester.id_semester AND mahasiswa.id_kelas = kelas.id_kelas AND mahasiswa.id_tahun = tahun_angkatan.id_tahun AND mahasiswa.id_prodi = '$id' AND prodi.id_prodi = '$id' ";
        $query = $this->db->query($sql);
        return $query; 
    }
}