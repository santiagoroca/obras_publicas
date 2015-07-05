<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obras extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("obras_model");
	}

	private function loadContent ($view_name, $params, $header) {
		$this->load->view('commons/header'.$header);
		$this->load->view($view_name, $params);
		$this->load->view('commons/footer');
	}

	private function checkPassword ($pwd, &$errors) {
	    if (strlen($pwd) < 8) {
	        $errors[] = "La contraseña es demasiado corta.";
	    }

	    if (!preg_match("#[0-9]+#", $pwd)) {
	        $errors[] = "La contraseña debe incluir al menos un numero.";
	    }

	    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
	        $errors[] = "La contraseña debe incluir al menos una letra.";
	    }     

	    return $errors;
	}

	public function index () {
		$this->home ();
	}

	public function create_form () {
		$this->loadContent ('obras/crear', Array (
			'action_url' => 'create'
		), '');
	}

	public function update_form () {
		$this->loadContent ('obras/editar', Array (
			'action_url' => 'update'
		), '');
	}

	public function home () {
		$this->loadContent ('obras/listar', Array (), '');
	}

}
