<?php
class MY_Controller extends CI_Controller {
	function __construct(){
        parent::__construct();
    }

    function is_login(){
    	return $this->session->userdata('is_login');
    }

    function set_session_data($username){
    	$this->session->set_userdata('is_login', true);
    	$this->session->set_userdata('username', $username);
    }

}