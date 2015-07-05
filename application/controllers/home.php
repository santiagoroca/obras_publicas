<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("user_model");
	}

	private function loadContent ($view_name, $params) {
		$this->load->view('commons/header');
		$this->load->view($view_name, $params);
		$this->load->view('commons/footer');
	}

	public function log_in_form () {
		$this->loadContent ('home/home', Array (
			'action_url' => 'log_in',
			'new_user_url' => 'create_form'
		));
	}

	public function create_form () {
		$this->loadContent ('home/nuevo_usuario', Array (
			'action_url' => 'create'
		));
	}

	public function update_form () {
		$this->loadContent ('home/modificar_usuario', Array ());
	}

	public function log_in () {
		if ($this->user_model->log_in (
			$this->input->post ('usuario'),
			$this->input->post ('contrasenia')
		)) {
			redirect (base_url().'obras/home'); 
		} else {
			redirect (base_url().'home/log_in_form'); 
		}
	}

	public function create () {
		if ($this->user_model->create ( Array (
				'user' => $this->input->post ('usuario'),
				'hash' => $this->input->post ('contrasenia')
			), Array (
				'name' => $this->input->post ('nombre'),
				'last_name' => $this->input->post ('apellido'),
				'address' => $this->input->post ('direccion'),
				'tel' => $this->input->post ('telefono'),
				'email' =>$this->input->post ('email'),
				'type' => 1
			)
		)) {
			redirect (base_url().'/home/log_in_form'); 
		} else {
			redirect ();
		}
	}

}
