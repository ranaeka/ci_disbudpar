<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
        parent::__construct();
        // konfigurasi helper & library
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('barang_model');
  //       if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }
    }

	public function index()
	{
		$isi['content'] 	= 'barang/barang_view';
		$isi['judul'] 		= 'List Barang';
		$isi['data']		= $this->db->get('barang_tb');
		$this->load->view('templates/home',$isi);
	}

	public function input()
	{
		$isi['content'] 	= 'barang/input_barang';
		$isi['judul'] 		= 'Tambah Barang';
		$this->load->view('templates/home',$isi);
	}

	public function simpan(){
		$nama_barang = $this->input->post('nama_barang');
		$kategori = $this->input->post('kategori');
		$merk_barang = $this->input->post('merk_barang');
		$jml_barang = $this->input->post('jml_barang');
		$gambar = $this->input->post('gambar');
		$status_peminjaman = $this->input->post('status_peminjaman');
		$status_perawatan = $this->input->post('status_perawatan');

		$data = array(
			'nama_barang' => $nama_barang,
			'kategori' => $kategori,
			'merk_barang' => $merk_barang,
			'jml_barang' => $jml_barang,
			'gambar' => $gambar,
			'status_peminjaman' => $status_peminjaman,
			'status_perawatan' => $status_perawatan,
			);
		$this->barang_model->insert_data($data,'barang_tb');
		redirect('barang');
	}

	public function hapus($id){
		$where = array('id_barang' => $id);
		$this->barang_model->delete_data($where,'barang_tb');
		redirect('barang');
	}


	function ubah($id){
		$isi['content'] = 'barang/ubah_barang';
		$isi['judul'] 	= 'Update Barang';
		// $data['judul']  = 'Form ubah Data Produk';
		$isi['barang'] = $this->barang_model->getBarangById($id);
		// $data['jenisproduk'] = ['makanan', 'minuman'];
		// $data['keterangan'] = ['tersedia', 'tidak tersedia'];

		$this->form_validation->set_rules('namabarang', 'Namabarang', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('merkbarang', 'Merkbarang', 'required');
		$this->form_validation->set_rules('jmlbarang', 'Jmlbarang', 'required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'required');
		$this->form_validation->set_rules('statuspeminjaman', 'Statuspeminjaman', 'required');
		$this->form_validation->set_rules('statusperawatan', 'Statusperawatan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/home',$isi);
		// $this->load->view('produk/ubah_produk', $data);
		// $this->load->view('dashboard_view');
		}else{
			$this->barang_model->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('barang');
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
