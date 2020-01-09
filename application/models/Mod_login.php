<?php 
 
class Mod_login extends CI_Model{	

		// $this->db->select('*');
		// $this->db->from('mitra');
		// $this->db->where('username', $username);
		// $this->db->where('password', $password);
		// $query = $this->db->get();

		// if ($query->num_rows() > 0) {
		// 	return TRUE;
		// }else{
		// 	return FALSE;
		// }
		function cek_login_admin($table,$where){		
		return $this->db->get_where($table,$where);
	}
}	

