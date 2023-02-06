<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
        $this->load->model('User_model','userrole');
		$this->load->model('User_model');
		$this->load->model('IkanHias_model');
		$this->load->model('Ikan_model');
		$this->load->model('Toko_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Ikan Hias";
		$data['ikan'] = $this->IkanHias_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("profil/vw_ikan", $data);
		$this->load->view("layout/footer");
	}

	public function detailikan($id)
	{
        $data['ikanhias'] = $this->IkanHias_model->get();
		$data['judul'] = "Detail Ikan Hias";
		$data['user'] = $this->userrole->getBy();
		$data['ikan'] = $this->Ikan_model->getById($id);

		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_detailikan', $data);
		$this->load->view('layout/footer');
	}

	public function toko()
	{
        $data['toko'] = $this->Toko_model->get();
		$data['judul'] = "Daftar Toko di Pekanbaru";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("profil/vw_toko", $data);
		$this->load->view("layout/footer");
	}
}
