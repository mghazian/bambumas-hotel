<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generic_model extends CI_Model
{
	protected $table;
	protected $view;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

		$this->view = array();
	}

	/**
	 *	Removes value with key @param $key
	 *	@param array $array
	 *	@param string $key
	 *	@return array
	 */
	protected function expunge ($array, $key)
	{
		return array_diff_key ($array, array ($key => NULL));
	}

	/**
	 *	Array validity verification
	 *	@param array $array
	 *	@return bool
	 */
	protected function is_array_valid ($array)
	{
		return ( is_array ($array) && ! empty ($array) );
	}

	/**
	 *	Checks whether specified data is exist or not
	 *	@param array $data
	 *	@param string $table
	 *	@return bool
	 */
	protected function is_exist ($data, $table)
	{
		if ( ! $this->is_array_valid ($data) )
			return FALSE;

		$this->db->where ($data);
		$query = $this->db->get ($table);

		return ( $query->num_rows() > 0 );
	}

	/**
	 *	Gets data with given parameter
	 *	@param string $source
	 *	@param mixed $column 	equivalent to 'SELECT' clause
	 *	@param mixed $condition equivalent to 'WHERE' clause
	 *	@param mixed $group 	equivalent to 'GROUP BY' and 'HAVING' clause
	 *	@param mixed $offset
	 *	@param mixed $limit
	 *	@return array
	 */
	protected function retrieve ($source, $column = NULL, $condition = NULL, $group = NULL, $offset = 1, $limit = NULL)
	{
		if ($column !== NULL)
			$this->db->select ($column);
		
		if ($condition !== NULL)
			$this->db->where ($condition);
		
		if ($group !== NULL)
		{
			if (array_key_exists ('group', $group))
				$this->db->group_by ($group['group']);
			
			if (array_key_exists ('having', $group))
				$this->db->having ($group['having']);
		}

		$this->db->offset ($offset);

		if ($limit !== NULL)
			$this->db->limit ($limit);
		
		return $this->db->get ($this->table)->result_array();
	}

	/**
	 *	Returns the number of rows that satisfies given parameter
	 *	@param string $source
	 *	@param mixed $condition equivalent to 'WHERE' clause
	 *	@param mixed $group 	equivalent to 'GROUP BY' and 'HAVING' clause
	 *	@param mixed $offset
	 *	@param mixed $limit
	 *	@return array
	 */
	protected function num_rows ($source, $condition = NULL, $group = NULL, $offset = 1, $limit = NULL)
	{
		if ($column !== NULL)
			$this->db->select ($column);
		
		if ($condition !== NULL)
			$this->db->where ($condition);
		
		if ($group !== NULL)
		{
			if (array_key_exists ('group', $group))
				$this->db->group_by ($group['group']);
			
			if (array_key_exists ('having', $group))
				$this->db->having ($group['having']);
		}

		$this->db->offset ($offset);

		if ($limit !== NULL)
			$this->db->limit ($limit);
		
		return $this->db->get ($table)->num_rows();
	}

	/**
	 *	'JOIN' clause. Use before get-ing or count-ing
	 *	@param array $source consists of table/view name as key, and the join condition as value
	 */
	public function join ($source)
	{
		foreach ($source as $key => $value)
		{
			$this->db->join ($key, $value);
		}
	}
}

?>