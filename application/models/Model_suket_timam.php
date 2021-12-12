<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_suket_timam extends MY_Model
{

	private $primary_key 	= 'id';
	private $table_name 	= 'suket_timam';
	private $field_search 	= ['no', 'perihal_surat', 'tanggal_surat', 'nik', 'perangkat_id', 'kd_wilayah'];

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

		//tambahan
		$username = get_user_data('username');
		if($username=='admin'){
			$kd_wilayah = $this->input->get('kd_wilayah');
		}else{
			$kd_wilayah = get_user_data('kd_wilayah');
		}

		if (empty($field)) {
			foreach ($this->field_search as $field) {
				if ($iterasi == 1) {
					$where .= "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah' ";
				} else {
					$where .= "OR " . "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah'  ";
				}
				$iterasi++;
			}

			$where = '(' . $where . ')';
		} else {
			$where .= "(" . "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah'  )";
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

		//tambahan
		$username = get_user_data('username');
		if($username=='admin'){
			$kd_wilayah = $this->input->get('kd_wilayah');
		}else{
			$kd_wilayah = get_user_data('kd_wilayah');
		}

		if (empty($field)) {
			foreach ($this->field_search as $field) {
				if ($iterasi == 1) {
					$where .= "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah'  ";
				} else {
					$where .= "OR " . "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah'  ";
				}
				$iterasi++;
			}

			$where = '(' . $where . ')';
		} else {
			$where .= "(" . "suket_timam." . $field . " LIKE '%" . $q . "%' and suket_timam.kd_wilayah= '$kd_wilayah'  )";
		}

		if (is_array($select_field) and count($select_field)) {
			$this->db->select($select_field);
		}

		$this->join_avaiable()->filter_avaiable();
		$this->db->where($where);
		$this->db->limit($limit, $offset);
		$this->db->order_by('suket_timam.' . $this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

	public function join_avaiable()
	{

		return $this;
	}

	public function filter_avaiable()
	{

		return $this;
	}

	public function cetak($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}
	public function wilayah($kdwilayah)
	{
		$this->db->where('kd_wilayah', $kdwilayah);
		$query = $this->db->get("wilayah");
		return $query->result_array();
	}
}

/* End of file Model_suket_timam.php */
/* Location: ./application/models/Model_suket_timam.php */
