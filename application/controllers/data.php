<?php 
class Data extends CI_Controller{
public function hapus($id){
	
    	$this->DataModel->delete($id);
    	redirect('index.php/data/tampil');
}
public function __construct(){
	parent::__construct();
	$this->load->model('DataModel');
	if($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/login/'));
}}
public function index(){
	$this->load->view('header');
	$this->load->view('dasboard');
	$this->load->view('footer');
}
public function tampil(){
	$data['barang']=$this->DataModel->view();

	$this->load->view('header');
	$this->load->view('index', $data);
	$this->load->view('footer');
}
public function tambah(){
	if($this->input->post('submit')){
		$this->DataModel->save();
	redirect('index.php/data/tampil');
	}
	$this->load->view('tambah');
}
public function ubah($id){
	if($this->input->post('submit')){
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('data telah di ubah ');
    window.location.href='$base_url/login/index.php/data/tampil';
    </script>");
		$this->DataModel->edit($id);

	}
	$data['barang']=$this->DataModel->viewby($id);
	$this->load->view('ubah', $data);
}
public function akun(){
	$this->load->view('setting');
}
public function admin(){
	if($this->session->userdata("user") == 'admin'){
		redirect(base_url('index.php/control/'));
	}else{
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('anda bukan admin');
    window.location.href='$base_url/login/index.php/data/tampil';
    </script>");
	}
}public function kasir(){
	$data['barang']=$this->DataModel->view();
$this->load->view('kasir',$data);
}
}
?>
