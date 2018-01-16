<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCode extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function insertCode($data){
    	$data = $this->appendCreatedUpdatedBy($data);
		$this->db->insert('chip_code',$data);
		return $this->db->affected_rows();
	}

	function updateCode($data,$code){
    	$data = $this->appendUpdatedBy($data);
		$this->db->set($data);
		$this->db->where('code',$code);
		$this->db->update('chip_code');
		return $this->db->affected_rows();
	}

	function deleteCode($code){
		$this->db->where('code',$code);
		$this->db->delete('chip_code');
		return $this->db->affected_rows();
	}

	function allCode(){
		$this->db->select('*');
		$this->db->from('chip_code');
		$this->db->where('is_deleted','N');
		$this->db->order_by('created_timestamp', 'desc');
		return $this->db->get()->result();
	}

	function searchCode($data){
		$this->db->select('*');
		$this->db->from('chip_code');
		if (array_key_exists('code', $data)){
			$this->db->where('code', $data['code']);
		}
		$this->db->where('is_deleted','N');
		$this->db->order_by('code', 'asc');
		return $this->db->get()->row();
	}

	function searchImage($data){
		$this->db->select('*');
		$this->db->from('gallery');
		if (array_key_exists('code', $data)){
			$this->db->where('code', $data['code']);
		}
		$this->db->where('is_deleted','N');
		$this->db->order_by('filename', 'asc');
		return $this->db->get()->result();
	}

}