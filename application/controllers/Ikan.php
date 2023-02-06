<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Ikan_model');
	}
     public function index()
	{
		$data['judul'] = "Halaman Ikan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ikan'] = $this->Ikan_model->get();
        $this->load->view('layout/header', $data);
		$this->load->view('ikan/vw_ikan', $data);
		$this->load->view('layout/footer');
	}
    public function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Ikan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ikan'] = $this->Ikan_model->get();

		$this->form_validation->set_rules('nama', 'Nama Ikan', 'required', ['required' => 'Nama Ikan Wajib di isi']);
        $this->form_validation->set_rules('nama_ilmiah', 'Nama Ilmiah Ikan', 'required', ['required' => 'Nama Ilmiah Ikan Wajib di isi']);
        $this->form_validation->set_rules('ukuran_ikan', 'Ukuran Ikan', 'required', ['required' => 'Ukuran Ikan Wajib di isi']);
        $this->form_validation->set_rules('kesulitan', 'Kesulitan', 'required', ['required' => 'Kesulitan Wajib di isi']);
        $this->form_validation->set_rules('sifat', 'Sifat', 'required', ['required' => 'Sifat Wajib di isi']);
        $this->form_validation->set_rules('panjang_umur', 'Panjang Umur', 'required', ['required' => 'Panjang Umur Wajib di isi']);
        $this->form_validation->set_rules('makanan', 'Makanan', 'required', ['required' => 'Makanan Wajib di isi']);
        $this->form_validation->set_rules('ukuran_akuarium', 'Ukuran Akuarium', 'required', ['required' => 'Ukuran Akuarium Wajib di isi']);
        $this->form_validation->set_rules('suhu_optimal', 'Suhu Optimal', 'required', ['required' => 'Suhu Optimal Wajib di isi']);
		

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('ikan/vw_tambah_ikan', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nama_ilmiah' => $this->input->post('nama_ilmiah'),
				'ukuran_ikan' => $this->input->post('ukuran_ikan'),
				'kesulitan' => $this->input->post('kesulitan'),
				'sifat' => $this->input->post('sifat'),
                'panjang_umur' => $this->input->post('panjang_umur'),
				'makanan' => $this->input->post('makanan'),
				'ukuran_akuarium' => $this->input->post('ukuran_akuarium'),
				'suhu_optimal' => $this->input->post('suhu_optimal'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './dist/assets/images/ikan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Ikan_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Ikan Berhasil Ditambah!</div>');
			redirect('Ikan');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Ikan";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ikan'] = $this->Ikan_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Ikan', 'required', ['required' => 'Nama Ikan Wajib di isi']);
        $this->form_validation->set_rules('nama_ilmiah', 'Nama Ilmiah Ikan', 'required', ['required' => 'Nama Ilmiah Ikan Wajib di isi']);
        $this->form_validation->set_rules('ukuran_ikan', 'Ukuran Ikan', 'required', ['required' => 'Ukuran Ikan Wajib di isi']);
        $this->form_validation->set_rules('kesulitan', 'Kesulitan', 'required', ['required' => 'Kesulitan Wajib di isi']);
        $this->form_validation->set_rules('sifat', 'Sifat', 'required', ['required' => 'Sifat Wajib di isi']);
        $this->form_validation->set_rules('panjang_umur', 'Panjang Umur', 'required', ['required' => 'Panjang Umur Wajib di isi']);
        $this->form_validation->set_rules('makanan', 'Makanan', 'required', ['required' => 'Makanan Wajib di isi']);
        $this->form_validation->set_rules('ukuran_akuarium', 'Ukuran Akuarium', 'required', ['required' => 'Ukuran Akuarium Wajib di isi']);
        $this->form_validation->set_rules('suhu_optimal', 'Suhu Optimal', 'required', ['required' => 'Suhu Optimal Wajib di isi']);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('ikan/vw_ubah_ikan', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nama_ilmiah' => $this->input->post('nama_ilmiah'),
				'ukuran_ikan' => $this->input->post('ukuran_ikan'),
				'kesulitan' => $this->input->post('kesulitan'),
				'sifat' => $this->input->post('sifat'),
                'panjang_umur' => $this->input->post('panjang_umur'),
				'makanan' => $this->input->post('makanan'),
				'ukuran_akuarium' => $this->input->post('ukuran_akuarium'),
				'suhu_optimal' => $this->input->post('suhu_optimal'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2048';
				$config['upload_path'] = './dist/assets/images/ikan/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['ikan']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'dist/assets/images/ikan/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Ikan_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Ikan Berhasil Diubah!</div>');
			redirect('Ikan');
		}
	}
	public function hapus($id)
	{
		$this->Ikan_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>
			Data Ikan tidak dapat dihapus!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>
			Data Ikan Berhasil Dihapus!</div>');
		}
		redirect('Ikan');
	}
}
