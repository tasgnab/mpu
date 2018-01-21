<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends MY_Controller {

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
        $this->load->model('MGallery');
    } 

	public function index(){
		if ($this->is_login()){
			$this->load->view('dashboard/code_input');
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function code_input(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 

		$error_found = false;
		if ($this->input->post()){
			if ($this->input->post('code')){
				$data['code'] = $this->input->post('code');
			} else {
				$message = "Code should not be blank";
				$error_found = true;
			}

			if (!$error_found){
				if ($this->input->post('category')){
					$data['type'] = $this->input->post('category');
				} else {
					$message = "You must choose a category";
					$error_found = true;
				}
			}

			if (!$error_found){
				if (!$this->handleInsertCode($data)){
					$message = "Failed to Insert Code";
					$error_found = true;
				} else {
					$this->session->set_flashdata('message', $data['code'].' Inserted');
					$this->load->view('dashboard/code_input');
				}
			}
		} else {
			redirect(base_url('dashboard/code'));
		}

		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/code'));
		}
	}

	public function code_edit($code){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		
		if ($code){
			$data  = array('code' => $code);
			$codeData = $this->MCode->searchCode($data);
			if ($codeData){
				$this->load->view('dashboard/code_edit',$codeData);
			} else {
				$this->session->set_flashdata('message', "MicroChip doesn't exist");
				redirect(base_url('dashboard/code'));
			}
		}
	}

	public function do_edit(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		$error_found = false;
		if ($this->input->post()){
			$data = array(
				'type' => $this->input->post('category'), 
				'description' => $this->input->post('description'), 
				'description_cn' => $this->input->post('description_cn')
			);
			if (!$this->handleUpdateCode($data, $this->input->post('code'))){
				$message = "Failed to Updated Code";
				$error_found = true;
			} else {
				$this->session->set_flashdata('message', 'Code Updated');
				redirect(base_url('dashboard/code/list'));
			}
		}
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/code/list'));
		}
	}

	public function do_delete(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		$error_found = false;
		if ($this->input->post()){
			if (!$this->handleDeleteCode($this->input->post('code'))){
				$message = "Failed to Delete Code";
				$error_found = true;
			} else {
				$this->session->set_flashdata('message', 'Code Deleted');
				redirect(base_url('dashboard/code/list'));
			}
		} 
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/code/list'));
		}
	}

	public function code_list(){
		if ($this->is_login()){
			$data['code_list'] = $this->MCode->allCode();
			$this->load->view('dashboard/code_list',$data);
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function code_upload_image($code){
		if ($this->is_login()){
			if ($code){
				$data  = array('code' => $code);
				$codeData = $this->MCode->searchCode($data);
				if ($codeData){
					$this->session->set_userdata('code', $code);
					$this->load->view('dashboard/code_upload_image',$data);
				} else {
					$this->session->set_flashdata('message', "MicroChip doesn't exist");
					redirect(base_url('dashboard/code'));
				}
			}
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function code_view_image($code){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		if ($code){
			$data['code'] = $code;
			$data['images'] = $this->MGallery->searchGallery($code);
			$this->load->view('dashboard/code_view_image', $data);
		}
	}

	public function code_delete_image(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		} 
		$error_found = false;
		if ($this->input->post()){
			$data['code'] = $this->input->post('code');
			$data['filename'] = $this->input->post('filename');
			
			if ($this->handleDeleteImage($data)){
				$this->session->set_flashdata('message', 'Image Deleted');
				redirect(base_url('dashboard/code/viewImage/'.$data['code']));
			} else {
				$error_found = true;
				$message = "Failed to delete image";
			}
		}
		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/code/list'));
		}
	}

	public function insertImage(){
		if ($this->is_login()){
			if (!empty($_FILES)) {
				$tempFile = $_FILES['file']['tmp_name'];
				$oriFilename = $_FILES['file']['name'];
				$targetPath = getcwd() . '/upload/code/';
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

				$data = array(
					'code' => $this->session->userdata('code'),
					'filename' => $fileName
				 );
				$this->MGallery->insertGallery($data);
			}
			redirect(base_url('dashboard/gallery/input'));
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	private function handleInsertCode($data){
		if ($this->MCode->insertCode($data) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleUpdateCode($data, $code){
		if ($this->MCode->updateCode($data, $code) != 1){
			return false;
		} else {
			return true;
		}
	}

	private function handleDeleteCode($code){
		if ($this->MCode->deleteCode($code) != 1){
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
