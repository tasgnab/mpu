<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
        $this->load->model('MConfig');
        $this->load->model('MBlog');
    }
	public function index(){
		$data['galleries_P'] = $this->MGallery->allGalleryP();
		$data['galleries_N'] = $this->MGallery->allGalleryN();
		$counter = (int) $this->MConfig->get('counter');
		$counter++;
		$this->MConfig->update('counter', $counter);
		$data['visitor'] = $counter;

		$data['count'] = $this->MCategory->allGalleryCategoryForLandingPage();
		$data['blog'] = $this->MBlog->getTop3()->result();

		if($this->session->userdata('lang')=='cn'){
			$this->load->view('home2/main_cn',$data);
		}else {
			$this->load->view('home2/main',$data);
		}
	}
}
