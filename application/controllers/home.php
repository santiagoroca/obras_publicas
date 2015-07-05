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

	private function checkPassword ($pwd, &$errors) {
	    if (strlen($pwd) < 8) {
	        $errors[] = "Password too short.";
	    }

	    if (!preg_match("#[0-9]+#", $pwd)) {
	        $errors[] = "Password must include at least one number.";
	    }

	    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
	        $errors[] = "Password must include at least one letter.";
	    }     

	    return $errors;
	}

	public function log_in_form () {
		$this->loadContent ('home/home', Array (
			'action_url' => 'log_in',
			'new_user_url' => 'create_form'
		));
	}

	public function create_form () {
		$errors = $this->session->flashdata('errors');

		$this->loadContent ('home/nuevo_usuario', Array (
			'action_url' => 'create',
			'errors' => isset($errors) ? json_decode($errors) : false
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
		$user = $this->input->post ('usuario');
		$password = $this->input->post ('contrasenia');
		$name = $this->input->post ('nombre');
		$last_name = $this->input->post ('apellido');
		$address = $this->input->post ('direccion');
		$tel = $this->input->post ('telefono');
		$email = $this->input->post ('email');

		$data = Array (
			'user_info' => Array (),
			'errors' => Array ()
		);

		$this->checkPassword ($password, $errors ['errors']);

		if ($errors) {
			$errors ['user_info']['user'] = $user;
			$errors ['user_info']['password'] = $password;
			$errors ['user_info']['name'] = $name;
			$errors ['user_info']['last_name'] = $last_name;
			$errors ['user_info']['address'] = $address;
			$errors ['user_info']['tel'] = $tel;
			$errors ['user_info']['email'] = $email;

			$this->session->set_flashdata('errors', json_encode($errors));
			redirect(base_url().'home/create_form');
		}

		if ($this->user_model->create ( Array (
				'user' => $user,
				'hash' => $password
			), Array (
				'name' => $name,
				'last_name' => $last_name,
				'address' => $address,
				'tel' => $tel,
				'email' =>$email,
				'type' => 1
			)
		)) {
			redirect (base_url().'/home/log_in_form'); 
		} else {
			redirect ();
		}
	}

}
