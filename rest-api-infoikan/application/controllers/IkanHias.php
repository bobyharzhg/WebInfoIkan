<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class IkanHias extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('IkanHias_model','ikh');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id == null) {
            $ikan = $this->ikh->get();
        } else {
            $ikan = $this->ikh->get($id);
        }

        if($ikan){
            $this->response([
                'status' => true,
                'data' => $ikan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'data' => 'Id tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>