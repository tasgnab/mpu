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
    } 

	public function index(){
		if ($this->is_login()){
			$data['images'] = $this->MGallery->allGallery();
			$this->load->view('dashboard/gallery_view',$data);
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function gallery_input(){
		if ($this->is_login()){
			$this->load->view('dashboard/gallery_input');
		} else {
			redirect(base_url('dashboard/login'));
		}
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
			redirect(base_url('dashboard/gallery'));
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
				redirect(base_url('dashboard/gallery'));
			} else {
				$error_found = true;
				$message = "Failed to delete image";
			}
		}
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/gallery'));
		}
	}

	private function handlInsertImage($data){
		if ($this->MGallery->insertGallery($data) != 1){
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

}
