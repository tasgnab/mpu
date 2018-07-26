<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBlog  extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function get($where){
    	$this->db->where($where);
        $this->db->order_by('updated_timestamp', 'desc');
    	return $this->db->get('blog');
    }

    function deleteBlogImage($id){
        $this->db->where('blog_id',$id);
        $this->db->delete('blog_image');
    }

    function insertBlogImage($id, $image){
        $data = array('blog_id' => $id, 'image_url' => $image);
        $this->db->insert('blog_image',$data);
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

    function delete($id){
        $this->db->where(array('id' => $id));
        $this->db->delete('blog');
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

    function getSingleBlog($id){
        $this->db->select('id, title, body, title_cn, body_cn, DATE_FORMAT(updated_timestamp, "%d") as day, SUBSTRING(DATE_FORMAT(updated_timestamp, "%M"),1,3) as month, DATE_FORMAT(updated_timestamp, "%Y") as year, DATE_FORMAT(updated_timestamp, "%d %M %Y %h:%i %p") as updated_timestamp, created_by, image_url');
        $this->db->where('status','PUBLISHED');
        $this->db->where('id', $id);
        $this->db->from('blog');
        $this->db->join('blog_image', 'blog.id = blog_image.blog_id', 'left');
        $query = $this->db->get();
        return $query->row();
    }

    public function getForBlogPage_perpage($limit, $start){
        $this->db->limit($limit, $start);
        $this->db->select('id, title, body, title_cn, body_cn, DATE_FORMAT(updated_timestamp, "%d") as day, SUBSTRING(DATE_FORMAT(updated_timestamp, "%M"),1,3) as month, DATE_FORMAT(updated_timestamp, "%Y") as year, DATE_FORMAT(updated_timestamp, "%d %M %Y %h:%i %p") as updated_timestamp, created_by, image_url');
        $this->db->where('status','PUBLISHED');
        $this->db->from('blog');
        $this->db->join('blog_image', 'blog.id = blog_image.blog_id', 'left');
        $this->db->order_by('updated_timestamp', 'desc');
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
     
    public function getForBlogPage_getTotal(){
        $this->db->where('status','PUBLISHED');
        return $this->db->count_all("blog");
    }
}