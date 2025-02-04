<?php 
class Ruangan_model extends CI_Model {
    // fungsi untuk menampilkan data
    public function getAllRuang()
    {
        return $this->db->get('tbl_ruangan')->result_array();
    }

    // fungsi untuk menambahkan data
    public function addRuang()
    {
        $data = [
            'kode_ruang' => $this->input->post('kode_ruang', true),
            'nama_ruang' => $this->input->post('nama_ruang', true),
        ];
        $this->db->insert('tbl_ruangan', $data);
    }

    // fungai untuk menampilkan kode berdasarkan kode
    public function getRuangByKode($kode)
    {
        return $this->db->get_where('tbl_ruangan', ['kode_ruang' => $kode])->row_array();
    }
    // fungsi untuk edit data
    public function editRuang($kode)
    {
        $data = [
            'kode_ruang' => $this->input->post('kode_ruang', true),
            'nama_ruang' => $this->input->post('nama_ruang', true),
        ];
        $this->db->where('kode_ruang', $kode);
        $this->db->update('tbl_ruangan', $data);
    }

    // fungsi untuk hapus
    public function delRuang($kode)
    {
        $this->db->where('kode_ruang', $kode);
        $this->db->delete('tbl_ruangan');
    }

}
?>