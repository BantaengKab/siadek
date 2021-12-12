<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bumdes extends MY_Model {

	private $primary_key 	= 'id_BUMDes';
	private $table_name 	= 'bumdes';
	private $field_search 	= ['periode', 'jenis_BUMDes', 'nama_BUMDes', 'pengelolah', 'jabatan', 'tanggal_pendirian', 'perdes', 'jenis_kegiatan', 'status'];

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
        //tambah
        $username = get_user_data('id'); 
        $user_gr = get_user_group($username);
        if($user_gr == '1' || $user_gr == '9' || $user_gr == '7'){
            $kd_wilayah = $this->input->get('kd_wilayah');
        }else{
            $kd_wilayah = get_user_data('kd_wilayah');
        }
        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= "bumdes.".$field . " LIKE '%" . $q . "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
	            } else {
	                $where .= "OR " . "bumdes.".$field . " LIKE '%" . $q .  "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "bumdes.".$field . " LIKE '%" . $q .  "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
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
        //tambah
        $username = get_user_data('id'); 
        $user_gr = get_user_group($username);
        if($user_gr == '1' || $user_gr == '9' || $user_gr == '7'){
            $kd_wilayah = $this->input->get('kd_wilayah');
        }else{
            $kd_wilayah = get_user_data('kd_wilayah');
        }
        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                $where .= "bumdes.".$field . " LIKE '%" . $q . "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
	            } else {
	                $where .= "OR " . "bumdes.".$field . " LIKE '%" . $q .  "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "bumdes.".$field . " LIKE '%" . $q .  "%' AND bumdes.kd_wilayah LIKE '%" . $kd_wilayah. "%' ";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }
		
		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by('bumdes.'.$this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

    public function join_avaiable() {
        $this->db->join('wilayah', 'wilayah.kd_wilayah = bumdes.kd_wilayah', 'LEFT');
        
        return $this;
    }

    public function filter_avaiable() {
        
        return $this;
    }

}

/* End of file Model_bumdes.php */
/* Location: ./application/models/Model_bumdes.php */