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
	public function index(){
		if ($this->is_login()){
			$this->load->view('dashboard/code_input');
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function list_code(){
		if ($this->is_login()){
			$this->load->view('dashboard/code');
		} else {
			redirect(base_url('dashboard/login'));
		}
	}


}
