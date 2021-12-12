<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tbl_usulan_dtks_new extends MY_Model {

	private $primary_key 	= 'id';
	private $table_name 	= 'tbl_usulan_dtks_new';
	private $field_search 	= ['nama', 'jenkel', 'tgllhr', 'nik', 'kkno', 'alamat', 'kd_kec', 'kd_wilayah', 'status'];

	public function __construct()
	{
		$config = array(
			'primary_key' 	=> $this->primary_key,
		 	'table_name' 	=> $this->table_name,
		 	'field_search' 	=> $this->field_search,
		 );

		parent::__construct($config);
	}

	public function count_all($q = null, $field = null)
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);
		//TAMBAHAN
		$status = $this->input->get('status');
		//tambahan
		

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%' AND tbl_usulan_dtks_new.status= '$status' ";
	            } else {
	                $where .= "OR " . "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%' AND tbl_usulan_dtks_new.status= '$status' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%' AND tbl_usulan_dtks_new.status= '$status' ')";
        }

		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
		$query = $this->db->get($this->table_name);

		return $query->num_rows();
	}

	public function get($q = null, $field = null, $limit = 0, $offset = 0, $select_field = [])
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);
		//TAMBAHAN
		$status = $this->input->get('status');
		

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%'AND tbl_usulan_dtks_new.status= '$status' ";
	            } else {
	                $where .= "OR " . "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%' AND tbl_usulan_dtks_new.status= '$status' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "tbl_usulan_dtks_new.".$field . " LIKE '%" . $q . "%' AND tbl_usulan_dtks_new.status= '$status')";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }
		
		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by('tbl_usulan_dtks_new.'.$this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

    public function join_avaiable() {
        
        return $this;
    }

    public function filter_avaiable() {
        
        return $this;
    }

}

/* End of file Model_tbl_usulan_dtks_new.php */
/* Location: ./application/models/Model_tbl_usulan_dtks_new.php */