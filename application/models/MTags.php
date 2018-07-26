<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTags  extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function get($where){
    	$this->db->where($where);
    	return $this->db->get('tag');
    }

    function create($data){
        $data = $this->appendCreatedUpdatedBy($data);
        $this->db->insert('tag',$data);
        return $this->db->insert_id();
    }

    function resetBlogTag($blogId){
        $this->db->where(array('blog_id' => $blogId));
        $this->db->delete('blog_tag');
        return $this->db->affected_rows();
    }

    function createBlogTag($blogId, $tags){
        foreach ($tags as $tag) {
            $this->db->insert(
                'blog_tag', 
                array('blog_id' => $blogId, 'tag_id' => $tag)
            );
        }
    }

    function getBlogTag($blogId){
        $this->db->where(array('blog_id' => $blogId));
        $blogTag = $this->db->get('blog_tag');

        $tagsName = array();        
        foreach($blogTag->result() as $row) {
            $tmp = $row->tag_id;
            $tagRow = $this->get(array('id' => $row->tag_id));
            $tag = $tagRow->row();
            array_push($tagsName, $tag->name);
        }
        return implode(",", $tagsName);
    }

    function getTop10($id = NULL){
        $this->db->select('tag_id, tag.name as name, tag.name_cn as name_cn, count(*) as total');
        $this->db->from('blog_tag');
        $this->db->join('blog','blog_tag.blog_id=blog.id');
        $this->db->join('tag','blog_tag.tag_id=tag.id');
        $this->db->where('blog.status','PUBLISHED');
        if ($id !== NULL)
            $this->db->where('blog_tag.blog_id',$id);
        $this->db->group_by('tag_id');
        $this->db->order_by('total', 'desc');
        $this->db->limit(10);
        return $this->db->get();
    }
}