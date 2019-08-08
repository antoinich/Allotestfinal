<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_services extends CI_Model
{
	protected $table = 'services';

	public function __construct()
	{
		parent::__construct(); 
	}

	public function getData($rowno,$rowperpage)
	{
        $this->db->limit($rowperpage, $rowno);
		$this->db->order_by('published_at', 'DESC');
		$query = $this->db->get($this->table);
       	
		return $query->result_array();
	}

    public function getrecordCount()
	{
    	$this->db->select('count(*) as allcount');
      	$this->db->from('posts');
      	$query = $this->db->get();
      	$result = $query->result_array();
      	return $result[0]['allcount'];
    }

	public function get_count()
	{
		return $this->db->count_all($this->table);
	}
}
