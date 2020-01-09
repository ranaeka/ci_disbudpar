<?php 
 
class Perawatan_model extends CI_Model{	

	function get_data(){
		return $this->db->get('tb_perawatan');
	}

	function getPerawatanById($id)
	{
		return $this->db->get_where('tb_perawatan', ['id_perawataan' => $id])->row_array();
	}
 
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}	

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// function update_dataproduk($namakos,$alamatkos,$tahun,$jenis_kos,$ket){
	// 	$username = $this->session->userdata('username');
	// 	$this->db->where("username",$username);
	// 	$this->db->query("UPDATE tbl_kos SET nama_kos='$namakos',alamat_kos='$alamatkos',thn_berdiri='$tahun',jenis_kos='$jenis_kos',keterangan='$ket' where username='$username'");
	// 	return $this->db->get('tbl_kos');
	// }

	// function ubahDataBarang()
	// {s
	// 	$data = [
	// 		"nama_barang" => $this->input->post('namabarang', true),
	// 		"kategori" => $this->input->post('kategori', true),
	// 		"merk_barang" => $this->input->post('merkbarang', true),
	// 		"jml_barang" => $this->input->post('jmlbarang', true),
	// 		"gambar" => $this->input->post('gambar', true),
	// 		"status_peminjaman" => $this->input->post('statuspeminjaman', true),
	// 		"status_perawatan" => $this->input->post('statusperawatan', true)
	// 	];

	// 	$this->db->where('id_barang', $this->input->post('id'));
	// 	$this->db->update('barang_tb', $data);
	// }


	// public function hitungJumlahProduk()
	// {   
	//     $query = $this->db->get('tb_produk');
	//     if($query->num_rows()>0)
	//     {
	//       return $query->num_rows();
	//     }
	//     else
	//     {
	//       return 0;
	//     }
	// }

}