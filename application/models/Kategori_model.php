<?php 
class Kategori_model extends CI_Model {
    // fungsi untuk menampilkan data
    public function getAllKat()
    {
        return $this->db->get('tbl_kategori')->result_array();
    }

    // fungsi untuk menambahkan data
    public function addKat()
    {
        $data = [
            'kode_kat' => $this->input->post('kode_kat', true),
            'nama_kat' => $this->input->post('nama_kat', true),
        ];
        $this->db->insert('tbl_kategori', $data);
    }

    // fungai untuk menampilkan kode berdasarkan kode
    public function getKatByKode($kode)
    {
        return $this->db->get_where('tbl_kategori', ['kode_kat' => $kode])->row_array();
    }
    // fungsi untuk edit data
    public function editKat($kode)
    {
        $data = [
            'kode_kat' => $this->input->post('kode_kat', true),
            'nama_kat' => $this->input->post('nama_kat', true),
        ];
        $this->db->where('kode_kat', $kode);
        $this->db->update('tbl_kategori', $data);
    }

    // fungsi untuk hapus
    public function delKat($kode)
    {
        $this->db->where('kode_kat', $kode);
        $this->db->delete('tbl_kategori');
    }

}
?>