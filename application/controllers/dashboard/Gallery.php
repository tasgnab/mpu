<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

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
        $this->load->model('MGallery');
        $this->load->model('MCategory');
    } 

    public function index($category){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$data['images'] = $this->MGallery->allGallery($category);
		$this->load->view('dashboard/gallery_view',$data);
	}

	public function view($category){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$data['images'] = $this->MGallery->allGallery($category);
		$data['category'] = $category;
		$this->load->view('dashboard/gallery_view',$data);
	}

	public function gallery_input(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$data['categories'] = $this->MCategory->getCategory();
		$this->load->view('dashboard/gallery_input',$data);
	}

	public function gallery_edit($id){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$data = $this->MGallery->searchGalleryById($id);
		$this->load->view('dashboard/gallery_edit', $data);
	}

	public function gallery_category(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$this->load->view('dashboard/gallery_category');
	}

	public function do_input_category(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$data['name'] = $this->input->post('name');
		$data['name_cn'] = $this->input->post('name_cn');
		$data['is_image_category'] = 'Y';
		if (!$this->handleInsertCategory($data)){
			$message = "Failed Insert Category";
		} else {
			$message = "Category Inserted";
		}
		$this->session->set_flashdata('message', $message);
		redirect(base_url('dashboard/gallery/category'));
	}

	public function do_edit_category(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$id = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['name_cn'] = $this->input->post('name_cn');
		if (!$this->handleEditCategory($id,$data)){
			$message = "Failed Edit Category";
		} else {
			$message = "Category Updated";
		}
		$this->session->set_flashdata('message', $message);
		redirect(base_url('dashboard/gallery/category'));
	}

	public function do_delete_category(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$id = $this->input->post('id');
		if (!$this->handleDeleteCategory($id)){
			$message = "Failed Delete Category";
		} else {
			$message = "Category Deleted";
		}
		$this->session->set_flashdata('message', $message);
		redirect(base_url('dashboard/gallery/category'));
	}

	public function category_list_page(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$category = $this->MCategory->allGalleryCategory();
		$data = array();

		foreach($category->result() as $r) {
			$data[] = array(
				'<a href="'.base_url('dashboard/gallery/view/').$r->name.'">'.$r->name."</a>",
				$r->name_cn,
				$r->total,
				'<span><a class="btn btn-info" onclick="editCategory(\''.$r->id.'\',\''.$r->name.'\',\''.$r->name_cn.'\')"><i class="fa fa-pencil"></i></a></span>
				<span><a class="btn btn-warning" onclick="deleteCategory(\''.$r->id.'\',\''.$r->name.'\')"><i class="fa fa-trash"></i></a></span>'
			);
		}

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $category->num_rows(),
			"recordsFiltered" => $category->num_rows(),
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}

	public function do_input(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}

		$error_found = false;
		if ($this->input->post()){
			if (!empty($_FILES)) {
				$tempFile = $_FILES['file']['tmp_name'];
				$oriFilename = $_FILES['file']['name'];
				$targetPath = getcwd() . '/upload/code/';
				$randomString = random_string('alnum', 10);
				$fileName = $randomString . '.jpg';
				$targetFile = $targetPath . $fileName;
				if (!move_uploaded_file($tempFile, $targetFile)){
					$error_found = true;
					$message = "Upload failed";
				} else {
					$config['image_library'] = 'gd2';
					$config['source_image'] = $targetFile;
					$config['maintain_ratio'] = TRUE;
					$config['new_image'] = $randomString.'.jpg';
					$config['height']	= 1024;
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$data = array(
						'code' => $this->input->post('category'),
						'filename' => $fileName,
						'is_panorama' => (null !== $this->input->post('is_panorama'))?$this->input->post('is_panorama'):'N',
						'description' => $this->input->post('description'),
						'description_cn' => $this->input->post('description_cn')
					 );
					if ($this->handlInsertImage($data)){
						$this->session->set_flashdata('message', 'Image Uploaded');
						redirect(base_url('dashboard/gallery/input'));
					} else {
						$error_found = true;
						$message = "Failed to insert record";
					}
				}
			}
		}
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/gallery/category'));
		}
	}

	public function do_edit(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login/category'));
		}

		$error_found = false;
		if ($this->input->post()){
			$data = array(
				'code' => $this->input->post('category'),
				'is_panorama' => (null !== $this->input->post('is_panorama'))?$this->input->post('is_panorama'):'N',
				'description' => $this->input->post('description'),
				'description_cn' => $this->input->post('description_cn')
			);
			if ($this->handlEditImage($data, $this->input->post('id'))){
				$this->session->set_flashdata('message', 'Gallery Updated');
				redirect(base_url('dashboard/gallery/category'));
			} else {
				$error_found = true;
				$message = "Failed to update record";
			}
		}
		
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/gallery/category'));
		}
	}

	public function do_delete(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}

		$error_found = false;
		if ($this->input->post()){
			$data['code'] = $this->input->post('code');
			$data['filename'] = $this->input->post('filename');
			
			if ($this->handleDeleteImage($data)){
				$this->session->set_flashdata('message', 'Image Deleted');
				redirect(base_url('dashboard/gallery/category'));
			} else {
				$error_found = true;
				$message = "Failed to delete image";
			}
		}
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/gallery/category'));
		}
	}

	private function handlInsertImage($data){
		if ($this->MGallery->insertGallery($data) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handlEditImage($data, $id){
		if ($this->MGallery->updateGallery($data, $id) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleDeleteImage($data){
		if ($this->MGallery->deleteGallery($data) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleInsertCategory($data){
		if ($this->MCategory->insertCategory($data) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleEditCategory($id,$data){
		if ($this->MCategory->updateCategory($id,$data) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleDeleteCategory($id){
		if ($this->MCategory->deleteCategory($id) != 1){
			return false;
		} else {
			return true;
		}
	}

}
