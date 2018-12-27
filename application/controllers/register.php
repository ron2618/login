<?php
class register extends CI_Controller{

	function index(){
		$this->load->view('register');
	}
	function tambah(){
		if($this->input->post('submit')){
			$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
			);
		$this->db->insert('admin',$data);
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('your account registered');
    window.location.href='$base_url/login';
    </script>");
	}
	$this->load->view('index.php/login');
	}

 
	
 
	}?>