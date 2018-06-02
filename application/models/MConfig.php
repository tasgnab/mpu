<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MConfig  extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function get($name){
    	$this->db->where('name', $name);
    	$query = $this->db->get('config');
    	$result = $query->row();
    	return $result->value;
    }

    function update($name, $value){
    	$this->db->where('name', $name);
    	$this->db->set('value', $value);
    	$this->db->update('config');
    }
}