<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_model extends CI_Model {
    
	public function all()
	{
		$this->db->from('asset');
		$this->db->order_by("nik", "asc");
		$query = $this->db->get(); 
		return $query->result();
	    // return $this->db->get('asset')->orderby('nik', 'DESC')->result();
	}	

	public function create($data)
	{
	    return $this->db->insert('asset', $data);
	}
	
	public function find($nik)
	{
	    return $this->db->select('*')->where('nik', $nik)->get('asset')->row_array();
	}

	public function update($data, $nik)
	{
	    return $this->db->where('nik', $nik)->update('asset', $data);
	}

	public function delete($nik)
	{
	    return $this->db->where('nik', $nik)->delete('asset');
	}

}
