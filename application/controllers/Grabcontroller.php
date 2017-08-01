<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrabController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}

	public function index() {
		$this->load->view('principal');
	}

	public function registro_ficha() {
		$this->load->view('ficha/carga_ficha');
	}

}