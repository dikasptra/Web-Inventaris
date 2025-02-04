<?php 
class Barang_model extends CI_Model
{
    public function getAllBrg()
    {
        return $this->db
        ->join('tbl_kategori','tbl_kategori.kode_kat=tbl_barang.kode_kat')
        ->join('tbl_ruangan','tbl_ruangan.kode_ruang=tbl_barang.kode_ruang')
        ->get('tbl_barang')->result_array();
    }
    // fungsi untuk menampilkan data kategori
    public function getAllKat()
    {
        return $this->db->get('tbl_kategori')->result_array();
    }
    // fungsi untuk menampilkan data ruangan
    public function getAllRuang()
    {
        return $this->db->get('tbl_ruangan')->result_array();
    }
    // fungsi untuk menambahan data barang
    public function addBrg()
    {
        $data = [
            'kode_brg' => $this->input->post('kode_brg', true),
            'kode_kat' => $this->input->post('kode_kat', true),
            'kode_ruang' => $this->input->post('kode_ruang', true),
            'nama_brg' => $this->input->post('nama_brg', true),
            'jumlah' => $this->input->post('jumlah', true),
            'kondisi' => $this->input->post('kondisi', true),
        ];
        $this->db->insert('tbl_barang', $data);
    }

    // fungsi menampilkan barang berdasarkan kode
    public function getBrgByKode($kode)
    {
        return $this->db->get_where('tbl_barang', ['kode_brg' => $kode])->row_array();
    }

    // fungsi edit data
    public function editBrg($kode)
    {
        $data = [
            'kode_brg' => $this->input->post('kode_brg', true),
            'kode_kat' => $this->input->post('kode_kat', true),
            'kode_ruang' => $this->input->post('kode_ruang', true),
            'nama_brg' => $this->input->post('nama_brg', true),
            'jumlah' => $this->input->post('jumlah', true),
            'kondisi' => $this->input->post('kondisi', true),
        ];
        $this->db->where('kode_brg', $kode);
        $this->db->update('tbl_barang', $data);
    }

    // fungsi untuk hapus data
    public function delBrg($kode)
    {
        $this->db->where('kode_brg', $kode);
        $this->db->delete('tbl_barang');
    }

    // end class
    // jangan dihapus
} 
?>