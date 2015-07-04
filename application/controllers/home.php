<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("user_model");
	}

	private function loadContent ($view_name) {
		$this->load->view('commons/header');
		$this->load->view($view_name, Array (
			'action_url' => 'log_in'
		));
		$this->load->view('commons/footer');
	}

	public function log_in_form () {
		$this->loadContent ('home/home');
	}

	public function create_form () {
		$this->loadContent ('home/nuevo_usuario');
	}

	public function update_form () {
		$this->loadContent ('home/modificar_usuario');
	}

	public function log_in () {
		echo $this->user_model->log_in (
			$this->input->post ('usuario'),
			$this->input->post ('contrasenia')
		);
	}

}
