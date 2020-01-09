<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawatan extends CI_Controller {

	// function __construct(){
 //        parent::__construct();
 //        // konfigurasi helper & library
 //        $this->load->helper('url');
 //        $this->load->library('pagination');
 //        $this->load->library('form_validation');
 //        $this->load->database();
 //        $this->load->model('pembeli_model');
 //        if($this->session->userdata('status') != "login"){
	// 		redirect(base_url("login"));
	// 	}
 //    }

	public function index()
	{
		$isi['content'] 	= 'perawatan/perawatan_view';
		$isi['judul'] 		= 'List Data Perawatan';
		$isi['data']		= $this->db->get('tb_perawatan');
		$this->load->view('templates/home',$isi);
	}

	public function input()
	{
		$isi['content'] 	= 'perawatan/input_perawatan';
		$isi['judul'] 		= 'Tambah Data Perawatan';
		$this->load->view('templates/home',$isi);
	}

	public function simpan(){
		$nama_barang = $this->input->post('nama_barang');
		$jml_perawataan = $this->input->post('jml_perawataan');
		$tgl_perawataan = $this->input->post('tgl_perawataan');
		$ket_perawataan = $this->input->post('ket_perawataan');

		$data = array(
			'nama_barang' => $nama_barang,
			'jml_perawataan' => $jml_perawataan,
			'tgl_perawataan' => $tgl_perawataan,
			'ket_perawataan' => $ket_perawataan,
			);
		// $this->perawatan_model->insert_data($data,'tb_perawataan');
		// redirect('perawatan');
		$this->perawatan_model->insert_data($data,'tb_perawatan');
		redirect('perawatan');
	}

	public function hapus($id){
		$where = array('id_perawataan' => $id);
		$this->perawatan_model->delete_data($where,'tb_perawatan');
		redirect('perawatan');
	}

	// public function updateproduk(){
	// 	if ($this->session->userdata('username') != '') {
	// 		$namakos 	= $this->input->post('nama');
	// 		$alamatkos 	= $this->input->post('alamat');
	// 		$tahun 		= $this->input->post('tahun');
	// 		$jenis_kos 	= $this->input->post('jenis');
	// 		$ket 		= $this->input->post('ket');
	// 		$data = array(
	// 			'nama_kos' 		=> $namakos,
	// 			'jenis_kos'		=> $jenis_kos,
	// 			'keterangan' 	=> $ket,
	// 			'alamat_kos' 	=> $alamatkos,
	// 			'thn_berdiri' 	=> $tahun,
	// 			);
	// 		$this->mod_kos->update_datakos($namakos,$alamatkos,$tahun,$jenis_kos,$ket);
	// 		redirect('mitra/detailkos');
	// 	}else{
	// 		echo "Belum ada SESI";
	// 	}

	function ubah($id)
	{
		$isi['content'] = 'perawatan/ubah_data_perawatan';
		$isi['judul'] 	= 'Update Perawatan';
		// $data['judul']  = 'Form ubah Data Produk';
		$isi['perawatan'] = $this->perawatan_model->getPerawatanById($id);
		// $data['jenisproduk'] = ['makanan', 'minuman'];
		// $data['keterangan'] = ['tersedia', 'tidak tersedia'];

		$this->form_validation->set_rules('namabarang', 'Namabarang', 'required');
		$this->form_validation->set_rules('jmlperawataan', 'Jmlperawataan', 'required');
		$this->form_validation->set_rules('tglperawataan', 'Tglperawataan', 'required');
		$this->form_validation->set_rules('ketperawataan', 'Ketperawataan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/home',$isi);
		// $this->load->view('produk/ubah_produk', $data);
		// $this->load->view('dashboard_view');
		}else{
			$this->perawatan_model->ubahDataPerawatan();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('perawatan');
		}
		
		
	}
		
	

	// public function detail($id)
	// {
	// 	$data['judul']='Detail Data Produk';
	// 	$data['produk']= $this->Produk_model->getProdukById($id);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('templates/topbar', $data);
	// 	$this->load->view('produk/detail', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function detailproduk(){
	// 	$isi2['content'] 			= 'produk/detailproduk_view';
	// 	$isi2['judul'] 				= 'Detail Produk ';
	// 	$isi2['kos']				= $this->mod_kos->get_datakos();
	// 	$isi2['pemilik']			= $this->mod_pemilik->get_datapemilik();
	// 	$isi2['kamar']				= $this->mod_kos->get_kamar();
	// 	$isi2['parkir']				= $this->mod_kos->get_parkir();
	// 	$isi2['data']				= $this->db->get('tb_parkir');
	// 	$isi2['data2']				= $this->db->get('tb_lingkungan');
	// 	$isi2['gambar'] 			= $this->mod_kos->get_datagambarkos()->result_array();
	// 	$isi2['gambar2'] 			= $this->mod_kos->get_datagambarkamar()->result_array();
	// 	$this->load->view('mitra/dashboard_mitra_view',$isi2);
	// }
}
