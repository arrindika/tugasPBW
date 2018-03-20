<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class models extends CI_Model {
	public function getMahasiswa($table)
	{
		$data = $this->db->get($table);
        return $data->result_array();
	}
}
