<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Toko_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Daftar Toko di Pekanbaru";
		$data['toko'] = $this->Toko_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("toko/vw_toko", $data);
		$this->load->view("layout/footer");
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Toko";

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required', [
			'required' => 'Nama Toko Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('link',  'Link', 'required', [
			'required' => 'Link Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("toko/vw_tambah_toko", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama_toko' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
				'link' => $this->input->post('link'),
			];
			$this->Toko_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Toko Berhasil Ditambah!</div>');
			redirect('Toko');
		}
	}
	public function hapus($id)
	{
		$this->Toko_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Toko tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Toko Berhasil Dihapus!</div>');
		}
		redirect('Toko');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Toko";
		$data['toko'] = $this->Toko_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required', [
			'required' => 'Nama Toko Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('link',  'Link', 'required', [
			'required' => 'Link Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("toko/vw_ubah_toko", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama_toko' => $this->input->post('nama_toko'),
				'alamat' => $this->input->post('alamat'),
				'link' => $this->input->post('link'),
				'id' => $this->input->post('id')
			];
			$this->Toko_model->update($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Toko Berhasil Diubah!</div>');
			redirect('Toko');
		}
	}
}
