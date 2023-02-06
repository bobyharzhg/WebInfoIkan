<?php
class IkanHias_model extends CI_Model
{
    public $table = 'ikan_hias';
    public $id = 'ikan_hias.id';
    public function get($id = null)
    {
        if ($id == null){
            return $this->db->get($this->table)->result_array();
        }else{
            return $this->db->get_where($this->table, ['id' =>$id])->result_array();
        }
    }
}