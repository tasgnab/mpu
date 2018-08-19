<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        $this->load->model('MCode');
        $this->load->model('MCategory');
        $this->load->model('MConfig');
        $this->load->model('MBlog');
        $this->load->model('MTags');
        $this->load->library('pagination');
        $this->load->helper('url');
    } 
  
	public function index($start=null){
		$params = array();
        $limit_per_page = 6;
        $start_index = ($start)?$start:0;//($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $total_records = $this->MBlog->getForBlogPage_getTotal();
 
        if ($total_records > 0){

            $params['results'] = $this->MBlog->getForBlogPage_perpage($limit_per_page, $start_index);
            $config['base_url'] = base_url() . 'blog';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            //$config["uri_segment"] = 4;
            $config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
  
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			  
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			  
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $params["links"] = $this->pagination->create_links();
            $params['tags'] = $this->MTags->getTop10()->result();
        }
        if($this->session->userdata('lang')=='cn'){
			$this->load->view('home2/blog_page_cn', $params);
		} else {
			$this->load->view('home2/blog_page', $params);
		}
	}
	public function single($id){
		$data['post'] = $this->MBlog->getSingleBlog($id);
		$data['tags'] = $this->MTags->getTop10($id)->result();

        if($this->session->userdata('lang')=='cn'){
			$this->load->view('home2/blog_single_cn',$data);
		} else {
			$this->load->view('home2/blog_single',$data);
		}
	}
}
