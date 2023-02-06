<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Toko extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_model','tkh');
    }
    
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == null) {
            $toko = $this->tkh->get();
        } else {
            $toko = $this->tkh->get($id);
        }

        if($toko){
            $this->response([
                'status' => true,
                'data' => $toko
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'data' => 'Id tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id == null) {
            $this->response([
                'status' => false,
                'message' => 'Masukkan ID'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if($this->tkh->delete($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data berhasil dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Id tidak ditemukan'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nama_toko' => $this->post('nama_toko'),
            'alamat' => $this->post('alamat'),
            'link' => $this->post('link')
        ];
        if ($this->tkh->insert($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menambahkan data'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nama_toko' => $this->put('nama_toko'),
            'alamat' => $this->put('alamat'),
            'link' => $this->put('link')
        ];
        if ($this->tkh->update($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal mengubah data'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>