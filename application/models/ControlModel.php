<?php 
class ControlModel extends CI_Model{
	public function view(){
		return $this->db->get('admin')->result();
	}
	public function viewby($id){
		$this->db->where('id',$id);
		return $this->db->get('admin')->row();
	}
	public function save(){
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('user')

			);
		$this->db->insert('admin',$data);
	}
	public function edit($id){
		$data =  array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('user'));
		$this->db->where('id',$id);
		$this->db->update('admin',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('admin');
	}
	
}
?>