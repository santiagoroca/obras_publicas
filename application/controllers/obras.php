<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obras extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("obras_model");
	}

	private function loadContent ($view_name, $params, $header = '') {
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
			'action_url' => base_url().'obras/create'
		));
	}

	public function update_form ($id) {
		if (!$this->obras_model->its_mine (
			$this->session->all_userdata()['data']->h_id, $id
		)) redirect (base_url().'obras/mylist');

		$this->loadContent ('obras/editar', Array (
			'action_url' => base_url().'obras/update',
			'data' => $this->obras_model->get ($id, true),
			'extra_info' => $this->obras_model->get_extra_info ($id)
		));
	}

	public function home ($id = "") {
		$this->loadContent ('obras/listar', Array (
			'data' => $this->obras_model->get ()
		));
	}

	public function create () {
		$this->obras_model->create (
			Array (
				'title' => $this->input->post ('titulo_obra'),
				's_desc' => $this->input->post ('breve_descripcion'),
				'l_desc_a' => $this->input->post ('descripcion_detallada_a'),
				'l_desc_b' => $this->input->post ('descripcion_detallada_b'),
				'progress' => $this->input->post ('progreso'),
				'tags' => $this->input->post ('tag'),
				'owner' => $this->session->all_userdata()['data']->h_id
			),
			$this->input->post ('misc_images'),
			$this->input->post ('info_extra')
		);

		redirect (base_url ().'obras/mylist');
	}

	public function update ($id) {
		if (!$this->obras_model->its_mine (
			$this->session->all_userdata()['data']->h_id, $id
		)) redirect (base_url().'obras/mylist');
		
		$this->obras_model->update (
			Array (
				'title' => $this->input->post ('titulo_obra'),
				's_desc' => $this->input->post ('breve_descripcion'),
				'l_desc_a' => $this->input->post ('descripcion_detallada_a'),
				'l_desc_b' => $this->input->post ('descripcion_detallada_b'),
				'progress' => $this->input->post ('progreso'),
				'tags' => $this->input->post ('tag'),
			),
			$this->input->post ('info_extra'),
			$id
		);	

		redirect (base_url ().'obras/mylist');
	}

	public function mylist () {
        $this->loadContent ('obras/mylist', Array (
    		'data' => $this->obras_model->get (
    			$this->session->all_userdata()['data']->h_id
    		)
    	));
	}

}
