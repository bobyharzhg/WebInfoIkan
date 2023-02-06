<?php
defined('BASEPATH') or exit('No direct script access
allowed');
use GuzzleHttp\Client;

class IkanHias_model extends CI_Model
{
    public $table = 'ikan_hias';
    public $id = 'ikan_hias.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'localhost/rest-api-infoikan/ikanhias'
        ]);
    }
    public function get()
    {
        $response = $this->_client->request('GET','ikanhias');
		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
    }
}