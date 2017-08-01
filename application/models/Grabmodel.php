<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grabmodel extends CI_Model {
	public function __construct() {
        parent::__construct();
    }

    public function getLanchas() {
    	$sql = "SELECT * FROM lanchas";

    	return $this->db->query($sql)->result('array');
    }
}