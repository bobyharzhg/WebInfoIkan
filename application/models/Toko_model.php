<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Toko_model extends CI_Model
{
	public $table = 'toko';
	public $id = 'toko.id';
	private $_client;
	public function __construct()
	{
		parent::__construct();
		$this->_client = new Client([
			'base_uri' =>'localhost/rest-api-infoikan/toko'
		]);
	}
	public function get()
	{
		$response = $this->_client->request('GET','toko');
		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'];
	}
	public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function update($data)
	{
		$response = $this->_client->request('PUT','toko', ['form_params' => $data]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
	public function insert($data)
	{
		$response = $this->_client->request('POST','toko', ['form_params' => $data]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
	public function delete($id)
	{
		$response = $this->_client->request('DELETE','toko', ['form_params' => ['id' => $id]]);
		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}
}
