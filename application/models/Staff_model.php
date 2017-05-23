<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Generic_model.php';

class Staff_model extends Generic_model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

		$this->table = 'data_staff';
	}

	public function insert ($data)
	{
		$data = $this->expunge ($data, 'id');

		return $this->db->insert ($this->table, $data);
	}

	public function update ($id, $data)
	{
		$data = $this->expunge ($data, 'id');

		$this->db->where ('id', $id);
		return $this->db->update ($this->table, $data);
	}

	public function delete ($id)
	{
		$this->db->where ('id', $id);
		return $this->db->delete ($this->table);
	}

	public function get ($column = NULL, $condition = NULL, $group = NULL, $offset = 1, $limit = NULL)
	{
		return $this->retrieve ($this->table, $column, $condition, $group, $offset, $limit);
	}

	public function count ($column = NULL, $condition = NULL, $group = NULL, $offset = 1, $limit = NULL)
	{
		return $this->num_rows ($this->table, $column, $condition, $group, $offset, $limit);
	}

}

?>