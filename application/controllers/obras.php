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

	public function home ($id = "") {
		$this->loadContent ('obras/listar', Array (
			//'data' => $this->obras_model->get ($id)
		), '');
	}

	public function create () {
		$this->obras_model->create (
			Array (
				'title' => $this->input->post ('title'),
				's_desc' => $this->input->post ('s_desc'),
				'l_desc_a' => $this->input->post ('l_desc_a'),
				'l_desc_b' => $this->input->post ('l_desc_b'),
				'progress' => $this->input->post ('progress'),
				'tag' => $this->input->post ('tag'),
				'image' => $this->input->post ('image'),
				'owner' => $this->session->all_userdata()['data']->u_id
			),
			$this->input->post ('misc_images'),
			$this->input->post ('extra_info')
		);
	}

	public function update ($id) {
		$this->obras_model->update (
			Array (
				$this->input->post ('title'),
				$this->input->post ('s_desc'),
				$this->input->post ('l_desc_a'),
				$this->input->post ('l_desc_b'),
				$this->input->post ('progress'),
				$this->input->post ('tag'),
				$this->input->post ('image')
			),
			$this->input->post ('extra_info'),
			$id
		);	
	}

}
