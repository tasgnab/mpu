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

    function updateGallery($data, $id){
    	$data = $this->appendUpdatedBy($data);
    	$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('gallery');
		return $this->db->affected_rows();
	}

	
	function deleteGallery($data){
		$this->db->where($data);
		$this->db->delete('gallery');
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

	function searchGalleryById($id){
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->row();
	}

	function allGallery($category){
		if ($category == 'All'){
			$where = "code in (select name from category)";
		} else {
			$where = "code in ('".$category."')";
		}
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where($where);
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}

	function allGalleryP(){
		$where = "code in ('Office', 'Farm', 'Collection')";
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where($where);
		$this->db->where('is_panorama','Y');
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}

	function allGalleryN(){
		$where = "code in ('Office', 'Farm', 'Collection')";
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where($where);
		$this->db->where('is_panorama','N');
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}

	function getCount(){
		$query = $this->db->query('select "All" as category, count(1) as total from gallery where code in (\'Office\',\'Farm\',\'Collection\') union select code as category, count(code) as total from gallery where code in (\'Office\',\'Farm\',\'Collection\') group by code');
		return $query->result();
	}

}