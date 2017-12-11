<?php
class MY_Model extends CI_Model {

	function __construct(){
        parent::__construct();
    }

    function appendModifiedBy($data){
    	$data['modified_by'] = $this->session->userdata('username');
		return $data;
    }

    function appendCreatedModifiedBy($data){
    	$data['created_by'] = $this->session->userdata('username');
        $data['modified_by'] = $this->session->userdata('username');
		return $data;
    }
}