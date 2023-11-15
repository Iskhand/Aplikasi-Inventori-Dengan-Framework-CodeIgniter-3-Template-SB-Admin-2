<?php

class Web extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_web', 'm_web');
		$this->data['aktif'] = 'web';
	}

	public function index(){
		$this->data['title'] = 'Profil Web';
		$this->data['web'] = $this->m_web->lihat();
		$this->load->view('web', $this->data);
	}

	public function proses_ubah(){
		$data = [
			'nama_web' => $this->input->post('nama_web'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat'),
		];

		if($this->m_web->ubah($data)){
			$this->session->set_flashdata('success', 'Profil Web <strong>Berhasil</strong> Diubah!');
			redirect('web');
		} else {
			$this->session->set_flashdata('error', 'Profil Web <strong>Gagal</strong> Diubah!');
			redirect('web');
		}
	}
}