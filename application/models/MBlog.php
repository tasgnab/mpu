<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBlog  extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function get($where){
    	$this->db->where($where);
    	return $this->db->get('blog');
    }

    function create($data){
        $data = $this->appendCreatedUpdatedBy($data);
        $this->db->insert('blog',$data);
        return $this->db->insert_id();
    }

    function update($id, $data){
        $data = $this->appendUpdatedBy($data);
    	$this->db->where('id', $id);
        $this->db->set($data);
    	$this->db->update('blog');
        return $this->db->affected_rows();
    }

    function getTop3(){
        $this->db->select('id, title, body, title_cn, body_cn, DATE_FORMAT(updated_timestamp, "%d %M %Y %h:%i %p") as updated_timestamp');
        $this->db->where('status','PUBLISHED');
        $this->db->from('blog');
        $this->db->limit(3);
        $this->db->order_by('updated_timestamp', 'desc');
        return $this->db->get();
    }
}