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
        $this->load->model('MBlog');
        $this->load->model('MTags');
    } 

	public function index(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$this->load->view('dashboard/blog_list');
	}

	public function new(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$this->load->view('dashboard/blog_new');
	}

	public function image_upload(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		if (!empty($_FILES)) {
			$tempFile = $_FILES['file']['tmp_name'];
			$oriFilename = $_FILES['file']['name'];
			$targetPath = getcwd() . '/upload/blog/';
			$randomString = random_string('alnum', 10);
			$fileName = $randomString . '.jpg';
			$targetFile = $targetPath . $fileName;
			move_uploaded_file($tempFile, $targetFile);
				
			$config['image_library'] = 'gd2';
			$config['source_image'] = $targetFile;
			$config['maintain_ratio'] = TRUE;
			$config['new_image'] = $randomString.'.jpg';
			$config['height']	= 1024;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			echo json_encode(array('location' => $randomString.'.jpg'));
		}
	}

	public function blog_save(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$error_found = false;
		
		if ($this->input->post('title')){
			$data['title'] = $this->input->post('title');
		}
		if ($this->input->post('body')){
			$data['body'] = $this->input->post('body');
		}
		if ($this->input->post('title_cn')){
			$data['title_cn'] = $this->input->post('title_cn');
		}
		if ($this->input->post('body_cn')){
			$data['body_cn'] = $this->input->post('body_cn');
		}
		$tags = [];
		if ($this->input->post('tags')){
			$tags = explode(",", $this->input->post('tags'));
		}

		$start = strrpos($data['body'], base_url().'upload/blog/');
		if ($start){
			$end = strrpos($data['body'], '.jpg');
			if ($end){
				$image=substr($data['body'], $start, $end-$start+4);
				log_message('info', 'blog image : '.$image);
			}
		}

		if ($this->input->post('id')){
			$id = $this->input->post('id');
			$this->handleUpdateBlog($id, $data, $tags);
			$json = array('id' => $id );
		} else {
			$id = $this->handleInsertBlog($data, $tags);
			$json = array('id' => $id );
		}

		if ($image)
			$this->handleBlogImage($id,$image);
		
		echo json_encode($json);
	}

	public function blog_delete(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$error_found = false;
		if ($this->input->post('id')){
			$id = $this->input->post('id');
			$this->MTags->resetBlogTag($id);
			$this->MBlog->delete($id);
		}
		redirect(base_url('dashboard/blog'));	
	}

	public function edit($id){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$where['id'] = $id;
		$data['post'] = $this->MBlog->get($where)->row();
		$data['tags'] = $this->MTags->getBlogTag($id);
		$this->load->view('dashboard/blog_new',$data);
	}

	private function handleInsertBlog($data, $tags){
		$tagsId = $this->getTagsId($tags);
		$blogId = $this->MBlog->create($data);
		$this->handleTags($blogId, $tagsId);
		return $this->MBlog->create($data);
	}

	private function handleUpdateBlog($id, $data, $tags){
		$tagsId = $this->getTagsId($tags);
		$this->handleTags($id, $tagsId);
		$this->MBlog->update($id, $data);
	}

	private function getTagsId($tags){
		$tagsId = array();
		foreach ($tags as $tag) {
			$count = $this->MTags->get(array('name' => $tag));
			if ($count->num_rows() == 0){
				$tmp = $this->MTags->create(array('name' => ucwords($tag), 'name_cn' => $tag));
				array_push($tagsId, $tmp);
			} else {
				array_push($tagsId, $count->row()->id);
			}
		}
		return $tagsId;
	}

	private function handleTags($blogId, $tags){
		$this->MTags->resetBlogTag($blogId);
		$this->MTags->createBlogTag($blogId, $tags);
	}

	private function handleBlogImage($blogId, $image){
		$this->MBlog->deleteBlogImage($blogId);
		$this->MBlog->insertBlogImage($blogId, $image);
	}

	public function blog_list_page(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}

		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$code = $this->MBlog->get("1=1");
		$data = array();

		foreach($code->result() as $r) {
			$data[] = array(
				$r->title,
				$r->updated_timestamp,
				$r->status,
				'<span><a href="'.base_url('dashboard/blog/edit/').$r->id.'"><button type="button" class="btn btn-default">Edit</button></a></span><span><button type="button" class="btn btn-warning" onclick="delete_post(\''.$r->id.'\',\''.$r->title.'\')">Delete</button></span>'
			);
		}

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $code->num_rows(),
			"recordsFiltered" => $code->num_rows(),
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}

}
