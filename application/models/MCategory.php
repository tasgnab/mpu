<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCategory extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function counter(){
    	$this->db->insert('counter', array('dummy' => 0));
    }

    function getCOunter(){
    	$query = $this->db->query('SELECT count(*) as visitor FROM counter LIMIT 1');
		$row = $query->first_row();
		return $row->visitor;
    }

    function insertCategory($data){
    	$data = $this->appendCreatedUpdatedBy($data);
		$this->db->insert('category',$data);
		return $this->db->affected_rows();
	}

	function updateCategory($id, $data){
    	$data = $this->appendUpdatedBy($data);
    	$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update('category');
		return $this->db->affected_rows();
	}

	function deleteCategory($id){
		$this->db->where('id',$id);
		$this->db->delete('category');
    	return $this->db->affected_rows();
	}

	function allGalleryCategory(){
		return $this->db->query('select * from category left join (select code, count(*) as total from gallery group by code)a on category.name=a.code and category.is_image_category=\'Y\' and category.is_deleted=\'N\' order by name');
	}

	function allGalleryCategoryForLandingPage(){
		return $this->db->query('select \'All\' as name, \'所有\' as name_cn, sum(total) as total from (select name, name_cn, total from category left join (select code, count(*) as total from gallery group by code)a on category.name=a.code and category.is_image_category=\'Y\' and category.is_deleted=\'N\')a UNION select name, name_cn, total from category left join (select code, count(*) as total from gallery group by code)a on category.name=a.code and category.is_image_category=\'Y\' and category.is_deleted=\'N\'');
	}

	function getCategory(){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where(
			array(
				'is_deleted' => 'N',
				'is_image_category' => 'Y'
			)
		);
		$this->db->order_by('id', 'asc');
		return $this->db->get();
	}

	

}