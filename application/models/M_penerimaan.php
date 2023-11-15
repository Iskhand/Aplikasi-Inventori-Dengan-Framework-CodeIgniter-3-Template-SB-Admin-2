<?php

class M_penerimaan extends CI_Model {
	protected $_table = 'penerimaan';

	public function lihat(){
		$this->db->from($this->_table.' as p');
		$this->db->join('detail_terima as dt','p.no_terima=dt.no_terima');
		$query=$this->db->get();
		return $query->result();
		// return $this->db->get($this->_table)->result();
	} 

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_no_terima($no_terima){
		return $this->db->get_where($this->_table, ['no_terima' => $no_terima])->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function hapus($no_terima){
		return $this->db->delete($this->_table, ['no_terima' => $no_terima]);
	}
}