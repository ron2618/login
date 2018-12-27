<?php 
class Control extends CI_Controller{
public function hapus($id){
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('data yang akan di hapus tidak dapat di kembalikan');
    window.location.href='$base_url/login/index.php/control';
    </script>");
    	$this->ControlModel->delete($id);
}
public function __construct(){
	parent::__construct();
	$this->load->model('ControlModel');
	if($this->session->userdata('status') != "login"){
			redirect(base_url('index.php/login/'));
}}
public function index(){
	$data['admin']=$this->ControlModel->view();

	$this->load->view('header');
	$this->load->view('index2', $data);
	$this->load->view('footer');
}
public function coba(){
	$this->load->view('header');
	$this->load->view('index3');
	$this->load->view('footer');

}
public function tambah(){
	if($this->input->post('submit')){
		$this->ControlModel->save();
	redirect('index.php/control');
	}
	$this->load->view('tambah2');
}
public function ubah($id){
	if($this->input->post('submit')){
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('data telah di ubah ');
    window.location.href='$base_url/login/index.php/control';
    </script>");
		$this->ControlModel->edit($id);
	}
	$data['admin']=$this->ControlModel->viewby($id);
	$this->load->view('ubah2', $data);
}}