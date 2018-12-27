<?php
class Login extends CI_Controller{

 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}


 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$a = $this->input->post('username');
		$level = $this->db->query("select * from admin where admin.username = '$a' and admin.level = 1")->num_rows();
		if($level >= 1){


		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$secret_key = "6LcOwYIUAAAAAGCDmC4p9gFqwWgFMnyN3mzDcevI";
			$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
			$response = json_decode($verify);
			$cek = $this->m_login->cek_login("admin",$where)->num_rows();
			if(!$response->success){
				if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'user' => "admin",
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/data"));
			

 
			}else{
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('password atau username yang anda masukan salah');
    window.location.href='$base_url/login';
    </script>");
		}

			}else{
				echo ("<script LANGUAGE='JavaScript'>
    window.alert('mohon mengisi captha');
    window.location.href='$base_url/login';
    </script>");
			}
		
		
	}else{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$secret_key = "6LcOwYIUAAAAAGCDmC4p9gFqwWgFMnyN3mzDcevI";
			$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
			$response = json_decode($verify);
			$cek = $this->m_login->cek_login("admin",$where)->num_rows();
			if(!$response->success){
				if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'user' => "operator",
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/data"));
			

 
			}else{
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('password atau username operator yang anda masukan salah');
    window.location.href='$base_url/login';
    </script>");
		}

			}else{
				echo ("<script LANGUAGE='JavaScript'>
    window.alert('mohon mengisi captha');
    window.location.href='$base_url/login';
    </script>");
			}

	}}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
	function lupa(){
		$email = $this->input->post('email');
		$where = array(
			'email' => $email
		);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){ 
			$data['admin']=$this->m_login->viewpass();
			$this->load->view('pass',$data);
		}
	}
	function viewlupa(){
		$this->load->view('lupa');
	}
	}
		
?>