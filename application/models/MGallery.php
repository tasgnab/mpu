<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MGallery extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function insertGallery($data){
    	$data = $this->appendCreatedUpdatedBy($data);
		$this->db->insert('gallery',$data);
		return $this->db->affected_rows();
	}

	function deleteGallery($data){
		$data2 = array('is_deleted' => 'Y');
		$data2 = $this->appendUpdatedBy($data2);
		$this->db->set($data2);
		$this->db->where($data);
		$this->db->update('gallery');
		return $this->db->affected_rows();
	}

	function searchGallery($code){
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('code',$code);
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}

	function allGallery(){
		$where = "code in ('Office', 'Farm', 'Collection')";
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where($where);
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}

}