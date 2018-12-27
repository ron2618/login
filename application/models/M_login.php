<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function save(){
		$data = array(
			'nama' => $this->input->post('input_nama'),
			'password' => $this->input->post('input_password')
			);
		$this->db->insert('admin',$data);
		}
	
	function viewpass(){
		return $this->db->get('admin')->result();
	}
	}
?>