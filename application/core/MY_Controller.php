<?php
class MY_Controller extends CI_Controller {
	function __construct(){
        parent::__construct();
    }

    function is_login(){
    	return true;
    }

}