<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PapeletaModel extends CI_Model {

	public function All_papeleta()
	{
		$query = $this->db->get('papeletas');
        return $query->result();
	}
}
