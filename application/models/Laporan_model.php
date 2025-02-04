<?php 
class Laporan_model extends CI_Model
{
    // fungsi untuk menampilkan data laporan
    public function getAllLap()
    {
        return $this->db
        ->join('tbl_kategori','tbl_kategori.kode_kat=tbl_barang.kode_kat')
        ->join('tbl_ruangan','tbl_ruangan.kode_ruang=tbl_barang.kode_ruang')
        ->get('tbl_barang')->result_array();
    }
    // end class
    // haram hukumnya dihapus
}
?>