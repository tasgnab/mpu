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
				if ($codeData){
					$temp = $this->config->item('type');
					$data['code'] = $codeData;
					$data['spec'] = $temp[$codeData->type];
					$this->load->view('home2/code_search',$data);
				} else {
					$message = "Record doesn't exist";
					$error_found = true;
				}
			} else {
				$message = "Please Insert MicroChip Code";
				$error_found = true;
			}
		} else {
			$this->load->view('home2/code');
		}

		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('code'));
		}
		
	}
}
