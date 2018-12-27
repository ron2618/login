<?php 
class DataModel extends CI_Model{
	public function view(){
		return $this->db->get('barang')->result();
	}
	public function viewby($id){
		$this->db->where('id',$id);
		return $this->db->get('barang')->row();
	}
	public function save(){
		$data = array(
			'nama' => $this->input->post('username'),
			'harga' => $this->input->post('email')
			);
		$this->db->insert('barang',$data);
	}
	public function edit($id){
		$data =  array(
			'nama' => $this->input->post('username'),
			'harga' => $this->input->post('email'));
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('barang');
	}
	
}
?>