<?php 
 
class Login extends CI_Controller{

	function __construct(){
	parent::__construct();	
	$this->load->library('session');	
	$this->load->model('mod_login');
	}

	public function index(){
		$this->load->view('login/login_view');
	}

	public function aksi_login(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$where = array(
		'username' => $username,
		'password' => $password
		);
	$cek = $this->mod_login->cek_login_admin("tb_user",$where)->num_rows();
	if($cek > 0){
		$data_session = array(
			'nama' => $username,
			'status' => "login"
		);
		$this->session->set_userdata($data_session);
		redirect('templates/home');
		}
		// else
		// {
		// 	$this->session->set_flashdata('item','Username atau password salah !');
		// 	redirect('login'); 
		// }
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
