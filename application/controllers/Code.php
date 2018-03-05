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
    } 

	public function index(){
		$error_found = false;

		if (($this->input->post())){
			if ($this->input->post('code')){
				$data['code'] = $this->input->post('code');
				$codeData = $this->MCode->searchCode($data);
				$imageData = $this->MCode->searchImage($data);
				if ($codeData){
					$temp = $this->config->item('type');
					$data['code'] = $codeData;
					$data['spec'] = $temp[$codeData->type];
					if ($imageData){
						$data['images'] = $imageData;
					}
					if($this->session->userdata('lang')=='cn'){
						$this->load->view('home2/code_search_cn',$data);
					}else {
						$this->load->view('home2/code_search',$data);
					}
				} else {
					$message = "Record doesn't exist";
					if($this->session->userdata('lang')=='cn'){
						$message = "记录不存在";
					}
					$error_found = true;
				}
			} else {
				$message = "Please Insert MicroChip Code";
				if($this->session->userdata('lang')=='cn'){
					$message = "请插入代码";
				}
				$error_found = true;
			}
		} else {
			if($this->session->userdata('lang')=='cn'){
				$this->load->view('home2/code_cn');
			}else {
				$this->load->view('home2/code');
			}
			
		}

		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('code'));
		}
		
	}
}
