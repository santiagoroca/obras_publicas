<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->model("user_model");
		$this->load->helper('url');
	}

	private function loadContent ($view_name) {
		$this->load->view('commons/header');
		$this->load->view($view_name);
		$this->load->view('commons/footer');
	}

	public function index() {
		$this->loadContent ('home/home');
	}

}
