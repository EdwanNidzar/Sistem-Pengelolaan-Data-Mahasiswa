<?php
class M_tahun extends CI_Model
{
    public function get_tahun()
    {
        $sql = "SELECT id_tahun, tahun_angkatan,(SELECT COUNT(id_tahun) FROM mahasiswa WHERE mahasiswa.id_tahun = tahun_angkatan.id_tahun) AS jumlah FROM tahun_angkatan";
        $query = $this->db->query($sql);
        return $query;
    }

    public function add($tahun)
    {
        $data = array(
            'tahun_angkatan' => $tahun
        );
        $this->db->insert('tahun_angkatan', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get_kode($id)
    {
        $this->db->where('id_tahun', $id);
        return $this->db->get('tahun_angkatan');
    }

    public function update($id, $tahun)
    {
        $data = array(
            'tahun_angkatan' => $tahun
        );
        $this->db->where('id_tahun', $id);
        $this->db->update('tahun_angkatan', $data);
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function delete($id)
    {
        $this->db->where('id_tahun', $id);
        $this->db->delete('tahun_angkatan');
        $exe = $this->db->affected_rows();
        return $exe;
    }

    public function get($id){
        $sql = "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.jk, prodi.nama_prodi, semester.semester, kelas.kelas, tahun_angkatan.tahun_angkatan FROM mahasiswa, prodi, semester, tahun_angkatan, kelas WHERE mahasiswa.id_prodi = prodi.id_prodi AND mahasiswa.id_semester = semester.id_semester AND mahasiswa.id_kelas = kelas.id_kelas AND mahasiswa.id_tahun = tahun_angkatan.id_tahun AND mahasiswa.id_tahun = '$id' AND tahun_angkatan.id_tahun = '$id' ";
        $query = $this->db->query($sql);
        return $query; 
    }
}